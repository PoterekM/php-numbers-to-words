<?php

    class NumberWord

    {

        function stringLength($input)
        {
            $length_of_string = strlen($input);
            if ($length_of_string == 1) {
                $ones = $length_of_string;
            }
            return $length_of_string;
        }




        function oneToNine($ones)
        {
            if ($ones == "1") {
                return "one";
            } elseif ($ones == "2" ) {
                return "two";
            } elseif ($ones == "3" ) {
                return "three";
            } elseif ($ones == "4" ) {
                return "four";
            } elseif ($ones == "5" ) {
                return "five";
            } elseif ($ones == "6" ) {
                return "six";
            } elseif ($ones == "7" ) {
                return "seven";
            } elseif ($ones == "8" ) {
                return "eight";
            } elseif ($ones == "9" ) {
                return "nine";
            }
        }



    }

 ?>
