<?php
namespace JCoded\ATOCFeedParser\Test\File\Fare;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * NonDeliverableFaresOverrideTest Class
 */
class NonDeliverableFaresOverrideTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Fare\NonDeliverableFaresOverride();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'R0035541600789PRV7TSO160520150201201514112014N0000202500000970  YNY
',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'ORIGIN_CODE' => '0035',
                    'DESTINATION_CODE' => '5416',
                    'ROUTE_CODE' => '00789',
                    'RAILCARD_CODE' => 'PRV',
                    'TICKET_CODE' => '7TS',
                    'ND_RECORD_TYPE' => 'O',
                    'END_DATE' => '16052015',
                    'START_DATE' => '02012015',
                    'QUOTE_DATE' => '14112014',
                    'SUPPRESS_MKR' => 'N',
                    'ADULT_FARE' => '00002025',
                    'CHILD_FARE' => '00000970',
                    'RESTRICTION_CODE' => '  ',
                    'COMPOSITE_INDICATOR' => 'Y',
                    'CROSS_LONDON_IND' => 'N',
                    'PS_IND' => 'Y',
                    'RECORD_IDENTITY' => 'NFO'
                ]
            ],
            [
                'line' => 'RJ426779100000   BDRO311229990112201425072014N0000068099999999  YNN',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'ORIGIN_CODE' => 'J426',
                    'DESTINATION_CODE' => '7791',
                    'ROUTE_CODE' => '00000',
                    'RAILCARD_CODE' => '   ',
                    'TICKET_CODE' => 'BDR',
                    'ND_RECORD_TYPE' => 'O',
                    'END_DATE' => '31122999',
                    'START_DATE' => '01122014',
                    'QUOTE_DATE' => '25072014',
                    'SUPPRESS_MKR' => 'N',
                    'ADULT_FARE' => '00000680',
                    'CHILD_FARE' => '99999999',
                    'RESTRICTION_CODE' => '  ',
                    'COMPOSITE_INDICATOR' => 'Y',
                    'CROSS_LONDON_IND' => 'N',
                    'PS_IND' => 'N',
                    'RECORD_IDENTITY' => 'NFO'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            'RJ426779100000   BDRO311229990112201425072014N0000068099999999  YNN ',
            'RJ426779100000   BDRO311229990112201425072014N0000068099999999  YN'
        ];
    }
}
