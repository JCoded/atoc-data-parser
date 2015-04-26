<?php
namespace JCoded\ATOCFeedParser\File\Timetable;

use JCoded\ATOCFeedParser\File\AbstractMultiRecordFileParser;

/**
 * MasterStationNames Class
 */
class MasterStationNames extends AbstractMultiRecordFileParser
{
    /**
     * Parse a line of data
     * 
     * @param string $line
     * 
     * @throws IncompatibleLineException
     * 
     * @return array
     */
    public function parseLine($line)
    {
        $data = parent::parseLine($line);
        
        //Remove all the space lines
        foreach ($data as $key => $value) {
            if (substr($key, 0, 6) == 'SPACES') {
                unset($data[$key]);
            }
        }
        
        return $data;
    }
    
    /**
     * Get the map for the file
     * 
     * @return array
     */
    protected function getMap()
    {
        return [
            'A' => [
                'RECORD_IDENTITY' => 'MSNA',
                'DATA_MAP' => [
                    'RECORD_TYPE' => 1,
                    'SPACES1' => 4,
                    'STATION_NAME' => 30,
                    'CATE_TYPE' => 1,
                    'TIPLOC_CODE' => 7,
                    'SUBSIDIARY_CODE' => 3,
                    'SPACES2' => 3,
                    'PRINCIPAL_STATION_CODE' => 3,
                    'EASTING' => 5,
                    'ESTIMATED' => 1,
                    'NORTHING' => 5,
                    'CHANGE_TIME' => 2,
                    'FOOTNOTE' => 2,
                    'SPACES3' => 11,
                    'REIGON' => 3,
                    'SPACES4' => 1
                ]
            ],
            'L' => [
                'RECORD_IDENTITY' => 'MSNL',
                'DATA_MAP' => [
                    'RECORD_TYPE' => 1,
                    'SPACES1' => 4,
                    'STATION_NAME' => 30,
                    'SPACES2' => 1,
                    'ALIAS_NAME' => 30,
                    'SPACES3' => 16
                ]
            ],
            'V' => [
                'RECORD_IDENTITY' => 'MSNV',
                'DATA_MAP' => [
                    'RECORD_TYPE' => 1,
                    'SPACES1' => 4,
                    'GROUP_NAME' => 30,
                    'SPACES2' => 1,
                    'STATION_01' => 3,
                    'SPACES3' => 1,
                    'STATION_02' => 3,
                    'SPACES4' => 1,
                    'STATION_03' => 3,
                    'SPACES5' => 1,
                    'STATION_04' => 3,
                    'SPACES6' => 1,
                    'STATION_05' => 3,
                    'SPACES7' => 1,
                    'STATION_06' => 3,
                    'SPACES8' => 1,
                    'STATION_07' => 3,
                    'SPACES9' => 1,
                    'STATION_08' => 3,
                    'SPACES10' => 1,
                    'STATION_09' => 3,
                    'SPACES11' => 1,
                    'STATION_10' => 3,
                    'SPACES12' => 7,
                ]
            ],
        ];
    }

    /**
     * Get the record type for the line
     * 
     * @param string $line
     * 
     * @return string
     */
    protected function recordType($line)
    {
        $type = substr($line, 0, 1);
        
        if ($type == 'A' && strlen(trim(substr($line, 1, 29))) == 0) {
            return '';
        }
        
        return $type;
    }

}
