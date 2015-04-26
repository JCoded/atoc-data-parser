<?php
namespace JCoded\ATOCFeedParser\Test\File\Fare;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * TocsTest Class
 */
class TocsTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Fare\Tocs();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'TWWWALES & WEST                          N
',
                'expected' => [
                    'RECORD_TYPE' => 'T',
                    'TOC_ID' => 'WW',
                    'TOC_NAME' => 'WALES & WEST                  ',
                    'RESERVATION_SYSTEM' => '        ',
                    'ACTIVE_INDICATOR' => 'N',
                    'RECORD_IDENTITY' => 'TOCT'
                ]
            ],
            [
                'line' => 'FGXRGXSOUTHERN GATWICK EXPRESS      ',
                'expected' => [
                    'RECORD_TYPE' => 'F',
                    'FARE_TOC_ID' => 'GXR',
                    'TOC_ID' => 'GX',
                    'FARE_TOC_NAME' => 'SOUTHERN GATWICK EXPRESS      ',
                    'RECORD_IDENTITY' => 'TOCF'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' ',
            'FPGM  GREATER MANCHESTER PTE       ',
            'TAMARRIVA TRAINS MERSEYSIDE'
        ];
    }
}
