<?php
    require_once "src/NumberWord.php";
    class NumberWordTest extends PHPUnit_Framework_TestCase
    {

        function testNumberOnes()

        {
            $test_number_word = new NumberWord;
            $input = "9";

            $result = $test_number_word->oneToNine($input);

            $this->assertEquals("nine", $result);
        }

        function testStringLength()
        {
            $test_length_of_string = new NumberWord;
            $input = "333";

            $result = $test_length_of_string->stringLength($input);

            $this->assertEquals(3, $result);

        }



    }
?>
