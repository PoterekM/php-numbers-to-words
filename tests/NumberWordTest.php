<?php
    require_once "src/NumberWord.php";
    class NumberWordTest extends PHPUnit_Framework_TestCase
    {

        function testStringLength()
        {
            $test_length_of_string = new NumberWord;
            $input = "666";

            $result = $test_length_of_string->stringLength($input);

            $this->assertEquals(3, $result);
        }
        function testNumberOnes()

        {
            $test_number_word = new NumberWord;
            $input = "1";

            $result = $test_number_word->oneToNine($input);

            $this->assertEquals("one", $result);
        }

        function testNumberTens()

        {
            $test_number_word = new NumberWord;
            $input = "15";

            $result = $test_number_word->tenToTwenty($input);

            $this->assertEquals("fifteen", $result);
        }

        function testNumberTwenty()
        {
            $test_number_word = new NumberWord;
            $input = "25";

            $result = $test_number_word->twentyToNinety($input);

            $this->assertEquals("twentyfive", $result);
        }





    }
?>
