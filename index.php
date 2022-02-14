<?php

    require_once "./MyArray.php";

    // Testing Array methods
    $array1 = new MyArray(['apple', 'orange', 'peach']);
    $array2 = new MyArray([1, 2, 3]);

    $array2->double();


    // Merging arrays
    $array3 = new MyArray(['apple', 'orange', 'peach']);
    $array4 = new MyArray(['pear', 'banana']);

    $array3->merge($array4);


