<?php
namespace JCoded\ATOCFeedParser\Test\File\Fare;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * RailRoversTest Class
 */
class RailRoversTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Fare\RailRovers();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'RWRS311229990201201414112014WHERRY LINE RANGER SENIOR     WHERRY SNR     BDJI4370010001
',
                'expected' => [
                    'RECORD_TYPE' => 'R',
                    'ROVER_CODE' => 'WRS',
                    'END_DATE' => '31122999',
                    'START_DATE' => '02012014',
                    'QUOTE_DATE' => '14112014',
                    'DESCRIPTION' => 'WHERRY LINE RANGER SENIOR     ',
                    'TICKET_DESC' => 'WHERRY SNR     ',
                    'CAPRI_TICKET_CODE' => 'BDJ',
                    'ROVER_ACCOUNTING_CODE' => 'I437',
                    'DAYS_TRAVEL' => '001',
                    'MONTHS_VALID' => '00',
                    'DAYS_VALID' => '01',
                    'RECORD_IDENTITY' => 'TRRR'
                ]
            ],
            [
                'line' => 'RTV1010120140201201314112014HADRIANS WALL COUNTRY LINE    DAY RANGER     BDYI2990010001',
                'expected' => [
                    'RECORD_TYPE' => 'R',
                    'ROVER_CODE' => 'TV1',
                    'END_DATE' => '01012014',
                    'START_DATE' => '02012013',
                    'QUOTE_DATE' => '14112014',
                    'DESCRIPTION' => 'HADRIANS WALL COUNTRY LINE    ',
                    'TICKET_DESC' => 'DAY RANGER     ',
                    'CAPRI_TICKET_CODE' => 'BDY',
                    'ROVER_ACCOUNTING_CODE' => 'I299',
                    'DAYS_TRAVEL' => '001',
                    'MONTHS_VALID' => '00',
                    'DAYS_VALID' => '01',
                    'RECORD_IDENTITY' => 'TRRR'
                ]
            ],
            [
                'line' => 'P14R31122999FAM20004778500013755AL
',
                'expected' => [
                    'RECORD_TYPE' => 'P',
                    'ROVER_CODE' => '14R',
                    'END_DATE' => '31122999',
                    'RAILCARD_CODE' => 'FAM',
                    'ROVER_CLASS' => '2',
                    'ADULT_FARE' => '00047785',
                    'CHILD_FARE' => '00013755',
                    'RESTRICTION_CODE' => 'AL',
                    'RECORD_IDENTITY' => 'TRRP'
                ]
            ],
            [
                'line' => 'P14R06032014   20007240000036200AL',
                'expected' => [
                    'RECORD_TYPE' => 'P',
                    'ROVER_CODE' => '14R',
                    'END_DATE' => '06032014',
                    'RAILCARD_CODE' => '   ',
                    'ROVER_CLASS' => '2',
                    'ADULT_FARE' => '00072400',
                    'CHILD_FARE' => '00036200',
                    'RESTRICTION_CODE' => 'AL',
                    'RECORD_IDENTITY' => 'TRRP'
                ]
            ]
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' ',
            'RWR7311229991905201314112014FOSS ROVER 8IN 15 DAYS        8 IN 15 ROVER  MRBI862008001',
            'P14R311229992TR10007299599999999AL '
        ];
    }
}
