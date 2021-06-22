<!-- 
array_merge() -> index or associative array
array_merge_recursive() => multidimensional array
array_combine() -> index array 
-->
<?php
    //array_merge() use for add two or many array
    // $a = ['a' => 'sujon', 'b' => 'ahmed', 'c' => 'riman'];
    // $b = ['d' => 'alamin','toukir'];
     
    // $newArray = array_merge($a,$b);

    // echo"<pre>";
    // print_r($newArray);
    // echo"</pre>";

     // array_merge_recursive() use for add two or many multidimensional array
     // if have any common index or key it's make multidimensional array

    // $a = ['a'=>'sujon','b'=>'ahmed','c'=>'riman'];
    // $b = ['b'=> ['color'=>['red','green']],'sumon'];
    // $newArray = array_merge_recursive($a,$b);

    // echo"<pre>";
    // print_r($newArray);
    // echo"</pre>";

    // array_combine() use for as a first array would be key and second array would be value;
    $name = ['sujon','riman','toukir','alamin'];
    $age = [21,22,23,24];
    $newArray = array_combine($name,$age);
    echo"<pre>";
    print_r($newArray);
    echo"</pre>";
    



?>