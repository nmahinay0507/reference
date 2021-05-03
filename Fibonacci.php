<?php

    $number = 10;

    //Recursive
    echo "<h3>Recursive</h3>";

    function fibonacciRecursive($number){

        if ($number == 0){

            return 0;
        }
        else if ($number == 1){

            return 1;
        }
        else {

            return (fibonacciRecursive($number - 1) + fibonacciRecursive($number - 2));
        }
    }

    for($counter = 0; $counter < $number; $counter++){

        echo fibonacciRecursive($counter) . "<br>";
    }

    //Iterative
    echo "<h3>Iterative</h3>";

    $first_number = 0;
    $second_number = 1;
    $counter = 0;

    while($counter < $number){

        echo $first_number . "<br>";
        $next_number = $first_number + $second_number;
        $first_number = $second_number;
        $second_number = $next_number;
        $counter += 1;
    }

