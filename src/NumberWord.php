<?php

    class NumberWord

    {

        function stringLength($input)
        {
            $length_of_string = strlen($input);
            if ($length_of_string == 1) {
                $ones = $length_of_string;
            } elseif ($length_of_string == 2) {
                $tens = $length_of_string;
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
        function tenToTwenty($tens)
        {
            if ($tens == "10") {
                return "ten";
            } elseif ($tens == "11" ) {
                return "eleven";
            } elseif ($tens == "12" ) {
                return "twelve";
            } elseif ($tens == "13" ) {
                return "thirteen";
            } elseif ($tens == "14" ) {
                return "fourteen";
            } elseif ($tens == "15" ) {
                return "fifteen";
            } elseif ($tens == "16" ) {
                return "sixteen";
            } elseif ($tens == "17" ) {
                return "seventeen";
            } elseif ($tens == "18" ) {
                return "eighteen";
            } elseif ($tens == "19" ) {
                return "nineteen";
            }
        }

        function twentyToNinety($tens)
        {
            if ($tens == "20" && $tens <= "30")
            return "twenty" . "$ones";
        }




    }

 ?>
