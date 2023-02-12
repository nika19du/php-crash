<?php

    $fruits=['apple','orange','pear'];
    //Get length
    echo count($fruits).'<br>';

    //Search array
    var_dump(in_array('apple',$fruits)).'<br>';

    //Add to Array
    $fruits[]='grape';
    array_push($fruits,'blueberry','strawberry');

    //to add in front we use unshift
    array_unshift($fruits,'mango');

    //remove from array
        //from back
        array_pop($fruits);
        //from front
        array_shift($fruits);
        //remove specific index, removes also the index
       // unset($fruits[2]);
        //Split into 2 chunks
        $chunked_array=array_chunk($fruits,2);

    print_r($chunked_array);
?>