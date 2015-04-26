<?php
namespace JCoded\ATOCFeedParser\Test\File\Fare;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * FlowTest Class
 */
class FlowTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Fare\Flow();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'RF0028H81100121000AS3112299902012015ATO01Y0000030',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'F',
                    'ORIGIN_CODE' => '0028',
                    'DESTINATION_CODE' => 'H811',
                    'ROUTE_CODE' => '00121',
                    'STATUS_CODE' => '000',
                    'USAGE_CODE' => 'A',
                    'DIRECTION' => 'S',
                    'END_DATE' => '31122999',
                    'START_DATE' => '02012015',
                    'TOC' => 'ATO',
                    'CROSS_LONDON_IND' => '0',
                    'NS_DISC_IND' => '1',
                    'PUBLICATON_IND' => 'Y',
                    'FLOW_ID' => '0000030',
                    'RECORD_IDENTITY' => 'FFLF'
                ]
            ],
            [
                'line' => 'RT1104195SVR000032904B
',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'T',
                    'FLOW_ID' => '1104195',
                    'TICKET_CODE' => 'SVR',
                    'FARE' => '00003290',
                    'RESTRICTION_CODE' => '4B',
                    'RECORD_IDENTITY' => 'FFLT'
                ]
            ],
            [
                'line' => 'RT11041960AC00007050  ',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'T',
                    'FLOW_ID' => '1104196',
                    'TICKET_CODE' => '0AC',
                    'FARE' => '00007050',
                    'RESTRICTION_CODE' => '  ',
                    'RECORD_IDENTITY' => 'FFLT'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' ',
            'RF0030H81100121000AS3112299902012015ATO01Y0000076 ',
            'RT1104196FDR00007050',
            'RT1104196CDR00002470C'
        ];
    }
}
