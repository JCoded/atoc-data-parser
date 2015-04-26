<?php
namespace JCoded\ATOCFeedParser\File\Fare;

use JCoded\ATOCFeedParser\File\AbstractMultiRecordFileParser;

/**
 * Package Class
 */
class Package extends AbstractMultiRecordFileParser
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
            'P' => [
                'RECORD_IDENTITY' => 'TPKP',
                'DATA_MAP' => [
                    'RECORD_TYPE' => 1,
                    'PACKAGE_CODE' => 3,
                    'END_DATE' => 8,
                    'START_DATE' => 8,
                    'QUOTE_DATE' => 8,
                    'RESTRICTION_CODE' => 2,
                    'ORIGIN_FACILITIES' => 26,
                    'DESTINATION_FACILITIES' => 26
                ]
            ],
            'S' => [
                'RECORD_IDENTITY' => 'TPKS',
                'DATA_MAP' => [
                    'RECORD_TYPE' => 1,
                    'PACKAGE_CODE' => 3,
                    'END_DATE' => 8,
                    'SUPPLEMENT_CODE' => 3,
                    'DIRECTION' => 1,
                    'PACK_NUMBER' => 3,
                    'ORIGIN_FACILITY' => 1,
                    'DEST_FACILITY' => 1
                ]
            ],
        ];
    }
}
