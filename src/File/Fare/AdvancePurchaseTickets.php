<?php
namespace JCoded\AtocDataParser\File\Fare;

use JCoded\AtocDataParser\File\AbstractFileParser;

/**
 * AdvancePurchaseTickets Class
 */
class AdvancePurchaseTickets extends AbstractFileParser
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
            'TOC_ID' => 2,
            'END_DATE' => 8,
            'START_DATE' => 8,
            'CHECK_TYPE' => 1,
            'AP_DATA' => 8,
            'BOOKING_TIME' => 4,
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
        return 'TAP';
    }
}
