<?php
namespace JCoded\ATOCFeedParser\File\Fare;

use JCoded\ATOCFeedParser\File\AbstractFileParser;

/**
 * NonDeliverableFares Class
 */
class NonDeliverableFares extends AbstractFileParser
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
            'ORIGIN_CODE' => 4,
            'DESTINATION_CODE' => 4,
            'ROUTE_CODE' => 5,
            'RAILCARD_CODE' => 3,
            'TICKET_CODE' => 3,
            'ND_RECORD_TYPE' => 1,
            'END_DATE' => 8,
            'START_DATE' => 8,
            'QUOTE_DATE' => 8,
            'SUPPRESS_MKR' => 1,
            'ADULT_FARE' => 8,
            'CHILD_FARE' => 8,
            'RESTRICTION_CODE' => 2,
            'COMPOSITE_INDICATOR' => 1,
            'CROSS_LONDON_IND' => 1,
            'PS_IND' => 1
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
        return 'NDF';
    }
}
