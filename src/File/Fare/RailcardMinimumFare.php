<?php
namespace JCoded\AtocDataParser\File\Fare;

use JCoded\AtocDataParser\File\AbstractFileParser;

/**
 * RailcardMinimumFare Class
 */
class RailcardMinimumFare extends AbstractFileParser
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
            'RAILCARD_CODE' => 3,
            'TICKET_CODE' => 3,
            'END_DATE' => 8,
            'START_DATE' => 8,
            'MINIMUM_FARE' => 8,
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
        return 'RCM';
    }
}
