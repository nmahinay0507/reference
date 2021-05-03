<?php

    //Get random word
    $url = "https://random-word-api.herokuapp.com/word?number=1";
    $curl = curl_init();

    curl_setopt_array($curl, array(

        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => TRUE
    ));

    $response = json_decode(curl_exec($curl));

    if(curl_errno($curl)){

        $response_message = curl_error($curl);
    }

    curl_close($curl);

    if(isset($response_message)){

        echo $response_message;
    }
    else{

        //Check is palindrome without string functions
        echo "Check if word is palindrome<br><br>";

        $word = $response[0];
        $word_reverse = "";
        $index = 0;

        while(isset($word[$index])){

            $word_reverse = $word[$index].$word_reverse;
            $index += 1;
        }

        echo "Word: ". $word;

        echo "<br>";
        echo "<br>";

        echo "Reverse word: ". $word_reverse;

        echo "<br>";
        echo "<br>";

        if($word === $word_reverse){

            echo "Palindrome";
        }
        else{

            echo "Not Palindrome";
        }
    }

?>