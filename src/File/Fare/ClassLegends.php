<?php
namespace JCoded\ATOCFeedParser\File\Fare;

use JCoded\ATOCFeedParser\File\AbstractFileParser;

/**
 * ClassLegends Class
 */
class ClassLegends extends AbstractFileParser
{
    /**
     * Get the data map for the file
     * 
     * @param string $line
     * 
     * @return array
     */
    protected function dataMap($line)
    {
        return [
            'CLASS' => 1,
            'END_DATE' => 8,
            'START_DATE' => 8,
            'ATB_DESC' => 8,
            'CC_DESC' => 3,
        ];
    }
    
    /**
     * Get the record identity for the line
     * 
     * @param string $line
     * 
     * @return string
     */
    protected function recordIdentity($line)
    {
        return 'TCL';
    }
}
