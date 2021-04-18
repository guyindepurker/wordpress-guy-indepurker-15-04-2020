#Array Sum
    <?php

function  prependSum (array  &$array)  :  int
{
       $sum = array_sum( $array ) ;
        array_unshift ($array, $sum) ;

        return  $sum;
}

$arr = array (1 , 2, 3 ) ;

echo ( prependSum($arr).PHP_EOL );
print_r ( array_values ( $arr ) ) ;
