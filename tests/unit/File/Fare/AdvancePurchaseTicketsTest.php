<?php
namespace JCoded\ATOCFeedParser\Test\File\Fare;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * AdvancePurchaseTicketsTest Class
 */
class AdvancePurchaseTicketsTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Fare\AdvancePurchaseTickets();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => '0AWSV0SN31122999300420132000000011800',
                'expected' => [
                    'TICKET_CODE' => '0AW',
                    'RESTRICTION_CODE' => 'SV',
                    'RESTRICTION_FLAG' => '0',
                    'TOC_ID' => 'SN',
                    'END_DATE' => '31122999',
                    'START_DATE' => '30042013',
                    'CHECK_TYPE' => '2',
                    'AP_DATA' => '00000001',
                    'BOOKING_TIME' => '1800',
                    'RECORD_IDENTITY' => 'TAP'
                ]
            ],
            [
                'line' => '1CS  2  31122999060920052000000012359
',
                'expected' => [
                    'TICKET_CODE' => '1CS',
                    'RESTRICTION_CODE' => '  ',
                    'RESTRICTION_FLAG' => '2',
                    'TOC_ID' => '  ',
                    'END_DATE' => '31122999',
                    'START_DATE' => '06092005',
                    'CHECK_TYPE' => '2',
                    'AP_DATA' => '00000001',
                    'BOOKING_TIME' => '2359',
                    'RECORD_IDENTITY' => 'TAP'
                ]
            ],
            [
                'line' => 'AXS  2Cs3112299921102014200000002    ',
                'expected' => [
                    'TICKET_CODE' => 'AXS',
                    'RESTRICTION_CODE' => '  ',
                    'RESTRICTION_FLAG' => '2',
                    'TOC_ID' => 'Cs',
                    'END_DATE' => '31122999',
                    'START_DATE' => '21102014',
                    'CHECK_TYPE' => '2',
                    'AP_DATA' => '00000002',
                    'BOOKING_TIME' => '    ',
                    'RECORD_IDENTITY' => 'TAP'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            'AXS  2Cs3112299921102014200000002',
            '0AWSV0SN31122999300420132000000011800L',
            '0AWSV0SN3112299930042013200000001180'
        ];
    }
}
