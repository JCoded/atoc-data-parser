<?php
namespace JCoded\ATOCFeedParser\Test\File\Fare;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * NonDeliverableFaresTest Class
 */
class NonDeliverableFaresTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Fare\NonDeliverableFares();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'R0027003200000   0CAN010120150709201425072014N0000090000000450  NNN',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'ORIGIN_CODE' => '0027',
                    'DESTINATION_CODE' => '0032',
                    'ROUTE_CODE' => '00000',
                    'RAILCARD_CODE' => '   ',
                    'TICKET_CODE' => '0CA',
                    'ND_RECORD_TYPE' => 'N',
                    'END_DATE' => '01012015',
                    'START_DATE' => '07092014',
                    'QUOTE_DATE' => '25072014',
                    'SUPPRESS_MKR' => 'N',
                    'ADULT_FARE' => '00000900',
                    'CHILD_FARE' => '00000450',
                    'RESTRICTION_CODE' => '  ',
                    'COMPOSITE_INDICATOR' => 'N',
                    'CROSS_LONDON_IND' => 'N',
                    'PS_IND' => 'N',
                    'RECORD_IDENTITY' => 'NDF'
                ]
            ],
            [
                'line' => 'RN010407600985   ZPON311229990201201514112014N0000050000000300  YNY
',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'ORIGIN_CODE' => 'N010',
                    'DESTINATION_CODE' => '4076',
                    'ROUTE_CODE' => '00985',
                    'RAILCARD_CODE' => '   ',
                    'TICKET_CODE' => 'ZPO',
                    'ND_RECORD_TYPE' => 'N',
                    'END_DATE' => '31122999',
                    'START_DATE' => '02012015',
                    'QUOTE_DATE' => '14112014',
                    'SUPPRESS_MKR' => 'N',
                    'ADULT_FARE' => '00000500',
                    'CHILD_FARE' => '00000300',
                    'RESTRICTION_CODE' => '  ',
                    'COMPOSITE_INDICATOR' => 'Y',
                    'CROSS_LONDON_IND' => 'N',
                    'PS_IND' => 'Y',
                    'RECORD_IDENTITY' => 'NDF'
                ]
            ],
            [
                'line' => 'R0027003500000YNGODTN010120160201201514112014N0000079000000600B1YNN',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'ORIGIN_CODE' => '0027',
                    'DESTINATION_CODE' => '0035',
                    'ROUTE_CODE' => '00000',
                    'RAILCARD_CODE' => 'YNG',
                    'TICKET_CODE' => 'ODT',
                    'ND_RECORD_TYPE' => 'N',
                    'END_DATE' => '01012016',
                    'START_DATE' => '02012015',
                    'QUOTE_DATE' => '14112014',
                    'SUPPRESS_MKR' => 'N',
                    'ADULT_FARE' => '00000790',
                    'CHILD_FARE' => '00000600',
                    'RESTRICTION_CODE' => 'B1',
                    'COMPOSITE_INDICATOR' => 'Y',
                    'CROSS_LONDON_IND' => 'N',
                    'PS_IND' => 'N',
                    'RECORD_IDENTITY' => 'NDF'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            'R0027003500000YNGODTN010120160201201514112014N0000079000000600B1YNN ',
            'R0027003500000YNGODTN010120160201201514112014N0000079000000600B1YN'
        ];
    }
}
