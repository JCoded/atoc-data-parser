<?php
namespace JCoded\ATOCFeedParser\File\Fare;

use JCoded\ATOCFeedParser\File\AbstractMultiRecordFileParser;

/**
 * PrintFormats Class
 */
class PrintFormats extends AbstractMultiRecordFileParser
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
        return substr($line, 1, 1);
    }
    
    /**
     * Get the map for the file
     * 
     * @return array
     */
    protected function getMap()
    {
        return [
            'P' => [
                'RECORD_IDENTITY' => 'TPNP',
                'DATA_MAP' => [
                    'UPDATE_MARKER' => 1,
                    'RECORD_TYPE' => 1,
                    'SUPPLEMENT_CODE' => 3,
                    'RAILCARD_CODE' => 3,
                    'REV_CODE' => 3,
                    'NON_REV_CODE' => 3,
                    'TEXT_CODE_1' => 3,
                    'TEXT_CODE_2' => 3,
                    'TEXT_CODE_3' => 3,
                    'TEXT_CODE_4' => 3,
                    'TEXT_CODE_5' => 3
                ]
            ],
            'T' => [
                'RECORD_IDENTITY' => 'TPNT',
                'DATA_MAP' => [
                    'UPDATE_MARKER' => 1,
                    'RECORD_TYPE' => 1,
                    'TEXT_CODE' => 3,
                    'FREE_TEXT' => 72
                ]
            ],
        ];
    }
}
