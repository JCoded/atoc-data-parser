<?php
namespace JCoded\ATOCFeedParser\File\Fare;

use JCoded\ATOCFeedParser\File\AbstractFileParser;

/**
 * RoundingRules Class
 */
class RoundingRules extends AbstractFileParser
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
            'RULE_NO' => 2,
            'END_DATE' => 8,
            'RULE_INDEX' => 2,
            'START_DATE' => 8,
            'MAX_AMOUNT' => 8,
            'ROUND_AMOUNT' => 8,
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
        return 'FRR';
    }
}
