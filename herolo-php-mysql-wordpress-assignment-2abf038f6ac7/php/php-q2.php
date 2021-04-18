#Filter
     <?php

function findUniqueNumbers (array $numbers) : array  {
       $array_count_values = array_count_values($numbers);	
       $numbers_show_only_once = array();
       foreach($array_count_values as $key=>$val){
           if($val===1){
               array_push($numbers_show_only_once,$key);  
           }
       }
       return $numbers_show_only_once;
   }
    
        $arr = [1, 2, 1, 3];
       $res = findUniqueNumbers($arr);
         print_r(array_values($res));
?>