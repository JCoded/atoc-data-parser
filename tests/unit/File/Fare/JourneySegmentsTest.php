<?php
namespace JCoded\ATOCFeedParser\Test\File\Fare;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * JourneySegmentsTest Class
 */
class JourneySegmentsTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Fare\JourneySegments();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => '00231122999010119910000000',
                'expected' => [
                    'JS_CODE' => '002',
                    'END_DATE' => '31122999',
                    'START_DATE' => '01011991',
                    'LINE' => '000',
                    'START' => '00',
                    'END' => '00',
                    'RECORD_IDENTITY' => 'TJS'
                ]
            ],
            [
                'line' => '07931122999090120000260607
',
                'expected' => [
                    'JS_CODE' => '079',
                    'END_DATE' => '31122999',
                    'START_DATE' => '09012000',
                    'LINE' => '026',
                    'START' => '06',
                    'END' => '07',
                    'RECORD_IDENTITY' => 'TJS'
                ]
            ],
            [
                'line' => '19802032014100920121230808',
                'expected' => [
                    'JS_CODE' => '198',
                    'END_DATE' => '02032014',
                    'START_DATE' => '10092012',
                    'LINE' => '123',
                    'START' => '08',
                    'END' => '08',
                    'RECORD_IDENTITY' => 'TJS'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            '19831122999030320141230320 ',
            '1963112299923052004121030'
        ];
    }
}
