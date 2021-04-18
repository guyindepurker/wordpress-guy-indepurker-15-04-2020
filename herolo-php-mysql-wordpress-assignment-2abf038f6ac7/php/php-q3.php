#Filter
     <?php

     function  filterNumbersFromArray (array &$arr)  :  void
     {
           $arr =array_filter($arr,'is_int');
     }
 
     $arr = [1, 'a','b',  2];
     filterNumbersFromArray ($arr);
      print_r ( array_values ( $arr ) ) ;
