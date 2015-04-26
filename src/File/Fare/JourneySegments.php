<?php
namespace JCoded\ATOCFeedParser\File\Fare;

use JCoded\ATOCFeedParser\File\AbstractFileParser;

/**
 * JourneySegments Class
 */
class JourneySegments extends AbstractFileParser
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
            'JS_CODE' => 3,
            'END_DATE' => 8,
            'START_DATE' => 8,
            'LINE' => 3,
            'START' => 2,
            'END' => 2,
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
        return 'TJS';
    }
}
