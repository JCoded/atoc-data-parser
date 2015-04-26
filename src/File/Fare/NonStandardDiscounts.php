<?php
namespace JCoded\ATOCFeedParser\File\Fare;

use JCoded\ATOCFeedParser\File\AbstractFileParser;

/**
 * NonDeliverableFareOverride Class
 */
class NonStandardDiscounts extends AbstractFileParser
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
            'END_DATE' => 8,
            'START_DATE' => 8,
            'QUOTE_DATE' => 8,
            'USE_NLC' => 4,
            'ADULT_NODIS_FLAG' => 1,
            'ADULT_ADD_ON_AMOUNT' => 8,
            'ADULT_REBOOK_FLAG' => 1,
            'CHILD_NODIS_FLAG' => 1,
            'CHILD_ADD_ON_AMOUNT' => 8,
            'CHILD_REBOOK_FLAG' => 1
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
        return 'FNS';
    }
}
