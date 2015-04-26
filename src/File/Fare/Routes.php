<?php
namespace JCoded\ATOCFeedParser\File\Fare;

use JCoded\ATOCFeedParser\File\AbstractMultiRecordFileParser;

/**
 * Routes Class
 */
class Routes extends AbstractMultiRecordFileParser
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
            'R' => [
                'RECORD_IDENTITY' => 'RTER',
                'DATA_MAP' => [
                    'UPDATE_MARKER' => 1,
                    'RECORD_TYPE' => 1,
                    'ROUTE_CODE' => 5,
                    'END_DATE' => 8,
                    'START_DATE' => 8,
                    'QUOTE_DATE' => 8,
                    'DESCRIPTION' => 16,
                    'ATB_DESC_1' => 35,
                    'ATB_DESC_2' => 35,
                    'ATB_DESC_3' => 35,
                    'ATB_DESC_4' => 35,
                    'CC_DESC' => 16,
                    'AAA-DESC' => 41,
                    'UTS_MODE' => 1,
                    'UTS_ZONE_1' => 1,
                    'UTS_ZONE_2' => 1,
                    'UTS_ZONE_3' => 1,
                    'UTS_ZONE_4' => 1,
                    'UTS_ZONE_5' => 1,
                    'UTS_ZONE_6' => 1,
                    'UTS_NORTH' => 3,
                    'UTS_EAST' => 3,
                    'UTS_SOUTH' => 3,
                    'UTS_WEST' => 3
                ]
            ],
            'L' => [
                'RECORD_IDENTITY' => 'RTEL',
                'DATA_MAP' => [
                    'UPDATE_MARKER' => 1,
                    'RECORD_TYPE' => 1,
                    'ROUTE_CODE' => 5,
                    'END_DATE' => 8,
                    'ADMIN_AREA_CODE' => 3,
                    'NLC_CODE' => 4,
                    'CRS_CODE' => 3,
                    'INCL_EXCL' => 1
                ]
            ],
        ];
    }
}
