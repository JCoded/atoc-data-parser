<?php
namespace JCoded\AtocDataParser\File\Fare;

use JCoded\AtocDataParser\File\AbstractFileParser;

/**
 * TicketValidity Class
 */
class TicketValidity extends AbstractFileParser
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
            'VALIDITY_CODE' => 2,
            'END_DATE' => 8,
            'START_DATE' => 8,
            'DESCRIPTION' => 20,
            'OUT_DAYS' => 2,
            'OUT_MONTHS' => 2,
            'RET_DAYS' => 2,
            'RET_MONTHS' => 2,
            'RET_AFTER_DAYS' => 2,
            'RET_AFTER_MONTHS' => 2,
            'RET_AFTER_DAY' => 2,
            'BREAK_OUT' => 1,
            'BREAK_RTN' => 1,
            'OUT_DESCRIPTION' => 14,
            'RTN_DESCRIPTION' => 14,
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
        return 'TVL';
    }
}
