<?php
    function registerUser($email){
        echo $email . ' registered';
    } 

    registerUser('Brad');
    echo '<br>';
    function sum($n1=2,$n2=4){
        return $n1+$n2;
    }
    $number =sum(2,2);
    echo $number;

    echo '<br>';
    $substract=function($n1,$n2){
        return $n1-$n2;
    };
    echo $substract(10,5);
    echo '<br>';
    $multiply=fn($n1,$n2)=>$n1*$n2;
    echo $multiply(9,9);
?>