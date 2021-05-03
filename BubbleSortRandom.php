<?php

    $number_array = array();
    $temp = 0;

    //random number array
    for($counter = 0; $counter < 10; $counter++){

        $number_array[$counter] = rand(0, 1000);
    }

    //bubble sort *ascending
    for($out_count = 0; $out_count < count($number_array); $out_count++){

        for($in_count = 0; $in_count < count($number_array) - 1; $in_count++){

            if($number_array[$in_count] > $number_array[$in_count + 1]){

                $temp = $number_array[$in_count];
                $number_array[$in_count] = $number_array[$in_count + 1];
                $number_array[$in_count + 1] = $temp;
            }
        }
    }

    //show random number
    for($show_count = 0; $show_count < count($number_array); $show_count++){

        echo $number_array[$show_count]. "<br>";
    }
