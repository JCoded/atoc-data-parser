<?php
namespace JCoded\ATOCFeedParser\File\Fare;

use JCoded\ATOCFeedParser\File\AbstractMultiRecordFileParser;

/**
 * Tocs Class
 */
class Tocs extends AbstractMultiRecordFileParser
{
    /**
     * Get the record type for the line
     * 
     * @param string $line
     * 
     * @return string
     */
    protected function recordType($line)
    {
        return substr($line, 0, 1);
    }
    
    /**
     * Get the map for the file
     * 
     * @return array
     */
    protected function getMap()
    {
        return [
            'T' => [
                'RECORD_IDENTITY' => 'TOCT',
                'DATA_MAP' => [
                    'RECORD_TYPE' => 1,
                    'TOC_ID' => 2,
                    'TOC_NAME' => 30,
                    'RESERVATION_SYSTEM' => 8,
                    'ACTIVE_INDICATOR' => 1
                ]
            ],
            'F' => [
                'RECORD_IDENTITY' => 'TOCF',
                'DATA_MAP' => [
                    'RECORD_TYPE' => 1,
                    'FARE_TOC_ID' => 3,
                    'TOC_ID' => 2,
                    'FARE_TOC_NAME' => 30
                ]
            ],
        ];
    }
}
