<?php
namespace JCoded\AtocDataParser\Test\File\Fare;

use JCoded\AtocDataParser\Test\File\AbstractTest;

/**
 * RailcardMinimumFareTest Class
 */
class RailcardMinimumFareTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\AtocDataParser\File\Fare\RailcardMinimumFare();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'HMF0BM300620140109201300001200',
                'expected' => [
                    'RAILCARD_CODE' => 'HMF',
                    'TICKET_CODE' => '0BM',
                    'END_DATE' => '30062014',
                    'START_DATE' => '01092013',
                    'MINIMUM_FARE' => '00001200',
                    'RECORD_IDENTITY' => 'RCM'
                ]
            ],
            [
                'line' => 'YNGSVS311229990109201400001200
',
                'expected' => [
                    'RAILCARD_CODE' => 'YNG',
                    'TICKET_CODE' => 'SVS',
                    'END_DATE' => '31122999',
                    'START_DATE' => '01092014',
                    'MINIMUM_FARE' => '00001200',
                    'RECORD_IDENTITY' => 'RCM'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            'HMF0BM3006201401092013000012000',
            'YNGSVS31122999010920140000120'
        ];
    }
}
