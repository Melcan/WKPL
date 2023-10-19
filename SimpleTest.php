<?php
use PHPUnit\Framework\TestCase;

require_once "WordCount.php";
class SimpleTest extends TestCase{
    public function testCountWords(){
       
        $Wc = new WordCount();

        $TestSentence = "My name is joko"; 
        $WordCount = $Wc->countWords($TestSentence);

        $this->assertEquals(2, $WordCount);
    }
}
?>
