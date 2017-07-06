<?php

    class NumberWord

    {

        function stringLength($input)
        {
            $length_of_string = strlen($input);
            return $length_of_string;
        }




        function oneToNine($input)
        {
            if ($input == "1") {
                return "one";
            } elseif ($input == "2" ) {
                return "two";
            } elseif ($input == "3" ) {
                return "three";
            } elseif ($input == "4" ) {
                return "four";
            } elseif ($input == "5" ) {
                return "five";
            } elseif ($input == "6" ) {
                return "six";
            } elseif ($input == "7" ) {
                return "seven";
            } elseif ($input == "8" ) {
                return "eight";
            } elseif ($input == "9" ) {
                return "nine";
            }
        }



    }

 ?>
