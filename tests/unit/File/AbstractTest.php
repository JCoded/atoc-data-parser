<?php
namespace JCoded\AtocDataParser\Test\File;

use JCoded\AtocDataParser\IncompatibleLineException;

/**
 * AbstractTest Class
 */
abstract class AbstractTest extends \PHPUnit_Framework_TestCase
{
    abstract protected function getObject();
    
    abstract protected function getTestLines();
    
    abstract protected function getExceptionLines();
    
    public function testParseLine()
    {
        $obj = $this->getObject();
        
        foreach ($this->getTestLines() as $line) {
            $result = $obj->parseLine($line['line']);
            
            $this->assertEquals($line['expected'], $result);
        }
    }
    
    public function testLineException()
    {
        $obj = $this->getObject();
        
        foreach ($this->getExceptionLines() as $line) {
            $exceptionThrown = false;
            
            try {
                $obj->parseLine($line);
            } catch (IncompatibleLineException $ex) {
                $exceptionThrown = true;
            }
            
            $this->assertTrue($exceptionThrown);
        }
    }
}
