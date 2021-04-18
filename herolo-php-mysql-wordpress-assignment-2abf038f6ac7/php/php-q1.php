#unieq_names
<?php

function unique_names(array $array1, array $array2) : array
{
    return array_unique(array_merge($array1,$array2));
}
print_r(unique_names(['Dan','Ron','Boris'],['Boris','Dan', 'Ruth']));
?>