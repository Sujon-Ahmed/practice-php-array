
<!-- Replace the values of the first array ($a1) with the values from the second array ($a2): -->
<?php
    // array_replace() function replace with index or key
    // $a = ['apple', 'a' => 'orange'];
    // $b = ['red', 'a' => 'green', 'blue'];
    // echo"<pre>";
    // print_r(array_replace($a,$b));
    // echo"<pre>";

    // array_replace_recursive() function replace with multidimensional array index or key
    $first = [
        'a'=> ['red','green'],
        'b'=> ['blue','apple']
    ];
    $second = [
        'a'=> ['purple','yellow'],
        'b'=> ['pink','white']
    ];

    echo '<pre>';
    print_r(array_replace_recursive($first,$second));
    echo '<pre>';



?>