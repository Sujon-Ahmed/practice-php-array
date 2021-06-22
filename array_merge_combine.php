<!-- 
array_merge() -> index or associative array
array_merge_recursive() => multidimensional array
array_combine() -> index array 
-->
<?php
    // array_merge() use for add two or many array
    $a = ['a' => 'sujon', 'b' => 'ahmed', 'c' => 'riman'];
    $b = ['d' => 'alamin','toukir'];
     
    $newArray = array_merge($a,$b);

    echo"<pre>";
    print_r($newArray);
    echo"</pre>";
    
?>