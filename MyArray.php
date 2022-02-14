<?php

class MyArray {

    public $elements;

    function __construct($elements = []){
        $this->elements = $elements;
    }


    // Returns the sum of the array numbers
    public function sum(){
        $sum = array_sum($this->elements);
        return $sum;
    }

    // Multiply each number in the array
    public function double(){
        function multiply($item){
            return $item *= 2;
        }

        array_walk($this->elements, "multiply");
    }

    // Merging two arrays
    public function merge($new_array){
        // The second item is an object so we had to access the array property
        var_dump($new_array->elements);
        $after_merge = array_merge($this->elements, $new_array->elements); 
        var_dump($after_merge);
        return $after_merge;

    }

}