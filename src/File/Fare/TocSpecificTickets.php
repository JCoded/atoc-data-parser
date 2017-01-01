<?php
namespace JCoded\AtocDataParser\File\Fare;

use JCoded\AtocDataParser\File\AbstractFileParser;

/**
 * TocSpecificTickets Class
 */
class TocSpecificTickets extends AbstractFileParser
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
            'TICKET_CODE' => 3,
            'RESTRICTION_CODE' => 2,
            'RESTRICTION_FLAG' => 1,
            'DIRECTION' => 1,
            'TOC_ID' => 2,
            'TOC_TYPE' => 1,
            'END_DATE' => 8,
            'START_DATE' => 8,
            'SLEEPER_MKR' => 1,
            'INC_EXC_STOCK' => 1,
            'STOCK_LIST' => 40,
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
        return 'TSP';
    }
}
