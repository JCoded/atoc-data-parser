<?php
namespace JCoded\ATOCFeedParser\File\Fare;

use JCoded\ATOCFeedParser\File\AbstractFileParser;

/**
 * Railcards Class
 */
class Railcards extends AbstractFileParser
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
            'END_DATE' => 8,
            'START_DATE' => 8,
            'QUOTE_DATE' => 8,
            'HOLDER_TYPE' => 1,
            'DESCRIPTION' => 20,
            'RESTRICTED_BY_ISSUE' => 1,
            'RESTRICTED_BY_AREA' => 1,
            'RESTRICTED_BY_TRAIN' => 1,
            'RESTRICTED_BY_DATE' => 1,
            'MASTER_CODE' => 3,
            'DISPLAY_FLAG' => 1,
            'MAX_PASSENGERS' => 3,
            'MIN_PASSENGERS' => 3,
            'MAX_HOLDERS' => 3,
            'MIN_HOLDERS' => 3,
            'MAX_ACC_ADULTS' => 3,
            'MIN_ACC_ADULTS' => 3,
            'MAX_ADULTS' => 3,
            'MIN_ADULTS' => 3,
            'MAX_CHILDREN' => 3,
            'MIN_CHILDREN' => 3,
            'PRICE' => 8,
            'DISCOUNT_PRICE' => 8,
            'VALIDITY_PERIOD' => 4,
            'LAST_VALID_DATE' => 8,
            'PHYSICAL_CARD' => 1,
            'CAPRI_TICKET_TYPE' => 3,
            'ADULT_STATUS' => 3,
            'CHILD_STATUS' => 3,
            'AAA_STATUS' => 3,
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
        return 'RLC';
    }
}
