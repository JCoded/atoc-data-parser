<?php
namespace JCoded\ATOCFeedParser\Test\File\Fare;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * RoutesTest Class
 */
class RoutesTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Fare\Routes();//rte
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'RR40240311229990902201314112014AAA NETHERFIELD                                                                                                                                             AAA NETHERFIELD NETHERFIELD                               NNNNNN000000000000',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'R',
                    'ROUTE_CODE' => '40240',
                    'END_DATE' => '31122999',
                    'START_DATE' => '09022013',
                    'QUOTE_DATE' => '14112014',
                    'DESCRIPTION' => 'AAA NETHERFIELD ',
                    'ATB_DESC_1' => '                                   ',
                    'ATB_DESC_2' => '                                   ',
                    'ATB_DESC_3' => '                                   ',
                    'ATB_DESC_4' => '                                   ',
                    'CC_DESC' => 'AAA NETHERFIELD ',
                    'AAA-DESC' => 'NETHERFIELD                              ',
                    'UTS_MODE' => ' ',
                    'UTS_ZONE_1' => 'N',
                    'UTS_ZONE_2' => 'N',
                    'UTS_ZONE_3' => 'N',
                    'UTS_ZONE_4' => 'N',
                    'UTS_ZONE_5' => 'N',
                    'UTS_ZONE_6' => 'N',
                    'UTS_NORTH' => '000',
                    'UTS_EAST' => '000',
                    'UTS_SOUTH' => '000',
                    'UTS_WEST' => '000',
                    'RECORD_IDENTITY' => 'RTER'
                ]
            ],
            [
                'line' => 'RL000033112299970 6969SRAI',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'L',
                    'ROUTE_CODE' => '00003',
                    'END_DATE' => '31122999',
                    'ADMIN_AREA_CODE' => '70 ',
                    'NLC_CODE' => '6969',
                    'CRS_CODE' => 'SRA',
                    'INCL_EXCL' => 'I',
                    'RECORD_IDENTITY' => 'RTEL'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' ',
            'RL000003112299970 0362SHVE ',
            'RL000003112299970 0362SHV'
        ];
    }
}
