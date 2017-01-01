<?php
namespace JCoded\AtocDataParser\File\Fare;

use JCoded\AtocDataParser\File\AbstractFileParser;

/**
 * TicketTypes Class
 */
class TicketTypes extends AbstractFileParser
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
            'UPDATE_MARKER' => 1,
            'TICKET_CODE' => 3,
            'END_DATE' => 8,
            'START_DATE' => 8,
            'QUOTE_DATE' => 8,
            'DESCRIPTION' => 15,
            'TKT_CLASS' => 1,
            'TKT_TYPE' => 1,
            'TKT_GROUP' => 1,
            'LAST_VALID_DAY' => 8,
            'MAX_PASSENGERS' => 3,
            'MIN_PASSENGERS' => 3,
            'MAX_ADULTS' => 3,
            'MIN_ADULTS' => 3,
            'MAX_CHILDREN' => 3,
            'MIN_CHILDREN' => 3,
            'RESTRICTED_BY_DATE' => 1,
            'RESTRICTED_BY_TRAIN' => 1,
            'RESTRICTED_BY_AREA' => 1,
            'VALIDITY_CODE' => 2,
            'ATB_DESCRIPTION' => 20,
            'LUL_XLONDON_ISSUE' => 1,
            'RESERVATION_REQUIRED' => 1,
            'CAPRI_CODE' => 3,
            'LUL_93' => 1,
            'UTS_CODE' => 2,
            'TIME_RESTRICTION' => 1,
            'FREE_PASS_LUL' => 1,
            'PACKAGE_MKR' => 1,
            'FARE_MULTIPLIER' => 3,
            'DISCOUNT_CATEGORY' => 2,
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
        return 'TTY';
    }
}
