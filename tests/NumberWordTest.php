<?php
    require_once "src/NumberWord.php";
    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {

        function testNumberOnes()

        {
            $test_number_word = new NumberWord;
            $input = "1";

            $result = $test_number_word->NumberWord($input);

            $this->assertEquals("one", $result);
        }



    }
?>
