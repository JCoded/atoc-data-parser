<?php
namespace JCoded\ATOCFeedParser\Test\File\Fare;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * TocSpecificTicketsTest Class
 */
class TocSpecificTicketsTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Fare\TocSpecificTickets();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => '1AF  2BAWC3112299903011999NI                                        
',
                'expected' => [
                    'TICKET_CODE' => '1AF',
                    'RESTRICTION_CODE' => '  ',
                    'RESTRICTION_FLAG' => '2',
                    'DIRECTION' => 'B',
                    'TOC_ID' => 'AW',
                    'TOC_TYPE' => 'C',
                    'END_DATE' => '31122999',
                    'START_DATE' => '03011999',
                    'SLEEPER_MKR' => 'N',
                    'INC_EXC_STOCK' => 'I',
                    'STOCK_LIST' => '                                        ',
                    'RECORD_IDENTITY' => 'TSP'
                ]
            ],
            [
                'line' => 'XS5ET0BSRM3112299923012012NI                                        ',
                'expected' => [
                    'TICKET_CODE' => 'XS5',
                    'RESTRICTION_CODE' => 'ET',
                    'RESTRICTION_FLAG' => '0',
                    'DIRECTION' => 'B',
                    'TOC_ID' => 'SR',
                    'TOC_TYPE' => 'M',
                    'END_DATE' => '31122999',
                    'START_DATE' => '23012012',
                    'SLEEPER_MKR' => 'N',
                    'INC_EXC_STOCK' => 'I',
                    'STOCK_LIST' => '                                        ',
                    'RECORD_IDENTITY' => 'TSP'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            '1ABAR0BEMM3112299920062013NI                                        1',
            'XS5ET0BCSM3112299922102014NI                                       '
        ];
    }
}
