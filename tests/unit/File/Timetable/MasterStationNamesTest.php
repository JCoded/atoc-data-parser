<?php
namespace JCoded\ATOCFeedParser\Test\File\Timetable;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * MasterStationNamesTest Class
 */
class MasterStationNamesTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Timetable\MasterStationNames();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'A    ACHNASHEEN                    0ACHNSHNACN   ACN12164 68585 5             310 ',
                'expected' => [
                    'RECORD_TYPE' => 'A',
                    'STATION_NAME' => 'ACHNASHEEN                    ',
                    'CATE_TYPE' => '0',
                    'TIPLOC_CODE' => 'ACHNSHN',
                    'SUBSIDIARY_CODE' => 'ACN',
                    'PRINCIPAL_STATION_CODE' => 'ACN',
                    'EASTING' => '12164',
                    'ESTIMATED' => ' ',
                    'NORTHING' => '68585',
                    'CHANGE_TIME' => ' 5',
                    'FOOTNOTE' => '  ',
                    'REIGON' => '310',
                    'RECORD_IDENTITY' => 'MSNA'
                ]
            ],
            [
                'line' => 'L    RISCA & PONTYMISTER            PONTYMISTER                                   ',
                'expected' => [
                    'RECORD_TYPE' => 'L',
                    'STATION_NAME' => 'RISCA & PONTYMISTER           ',
                    'ALIAS_NAME' => 'PONTYMISTER                   ',
                    'RECORD_IDENTITY' => 'MSNL'
                ]
            ],
            [
                'line' => 'V    ZZZLONDON EXCLUDE D            PAD STP VXH VIC                               ',
                'expected' => [
                    'RECORD_TYPE' => 'V',
                    'GROUP_NAME' => 'ZZZLONDON EXCLUDE D           ',
                    'STATION_01' => 'PAD',
                    'STATION_02' => 'STP',
                    'STATION_03' => 'VXH',
                    'STATION_04' => 'VIC',
                    'STATION_05' => '   ',
                    'STATION_06' => '   ',
                    'STATION_07' => '   ',
                    'STATION_08' => '   ',
                    'STATION_09' => '   ',
                    'STATION_10' => '   ',
                    'RECORD_IDENTITY' => 'MSNV'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' ',
            'A                                        '
        ];
    }
}
