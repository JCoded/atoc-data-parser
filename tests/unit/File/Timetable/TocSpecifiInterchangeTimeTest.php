<?php
namespace JCoded\AtocDataParser\Test\File\Timetable;

use JCoded\AtocDataParser\Test\File\AbstractTest;

/**
 * TocSpecifiInterchangeTimeTest Class
 */
class TocSpecifiInterchangeTimeTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\AtocDataParser\File\Timetable\TocSpecificInterchangeTime();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'BAA,SN,SN,3,Barnham station (between Southern trains)',
                'expected' => [
                    'STATION_CODE' => 'BAA',
                    'ARRIVING_TRAIN_TOC' => 'SN',
                    'DEPARTING_TRAIN_TOC' => 'SN',
                    'MINIMUM_INTERCHANGE_TIME' => '3',
                    'COMMENTS' => 'Barnham station (between Southern trains)',
                    'RECORD_IDENTITY' => 'TSI'
                ]
            ],
            [
                'line' => 'SOU,SN,SW,4,Southampton Central (Southern > South West Trains)',
                'expected' => [
                    'STATION_CODE' => 'SOU',
                    'ARRIVING_TRAIN_TOC' => 'SN',
                    'DEPARTING_TRAIN_TOC' => 'SW',
                    'MINIMUM_INTERCHANGE_TIME' => '4',
                    'COMMENTS' => 'Southampton Central (Southern > South West Trains)',
                    'RECORD_IDENTITY' => 'TSI'
                ]
            ],
            [
                'line' => 'SOU,SW,SN,4, Southampton Central (South West Trains > Southern)',
                'expected' => [
                    'STATION_CODE' => 'SOU',
                    'ARRIVING_TRAIN_TOC' => 'SW',
                    'DEPARTING_TRAIN_TOC' => 'SN',
                    'MINIMUM_INTERCHANGE_TIME' => '4',
                    'COMMENTS' => ' Southampton Central (South West Trains > Southern)',
                    'RECORD_IDENTITY' => 'TSI'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' '
        ];
    }
}
