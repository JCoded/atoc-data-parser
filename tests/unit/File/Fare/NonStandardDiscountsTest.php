<?php
namespace JCoded\ATOCFeedParser\Test\File\Fare;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * NonStandardDiscountsTest Class
 */
class NonStandardDiscountsTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Fare\NonStandardDiscounts();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'R****0032*****   7TF3112299907022002070220020032 00000000NN        N',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'ORIGIN_CODE' => '****',
                    'DESTINATION_CODE' => '0032',
                    'ROUTE_CODE' => '*****',
                    'RAILCARD_CODE' => '   ',
                    'TICKET_CODE' => '7TF',
                    'END_DATE' => '31122999',
                    'START_DATE' => '07022002',
                    'QUOTE_DATE' => '07022002',
                    'USE_NLC' => '0032',
                    'ADULT_NODIS_FLAG' => ' ',
                    'ADULT_ADD_ON_AMOUNT' => '00000000',
                    'ADULT_REBOOK_FLAG' => 'N',
                    'CHILD_NODIS_FLAG' => 'N',
                    'CHILD_ADD_ON_AMOUNT' => '        ',
                    'CHILD_REBOOK_FLAG' => 'N',
                    'RECORD_IDENTITY' => 'FNS'
                ]
            ],
            [
                'line' => 'R****0035********FTP3112299923052007230520070035 00000000N 00000000N',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'ORIGIN_CODE' => '****',
                    'DESTINATION_CODE' => '0035',
                    'ROUTE_CODE' => '*****',
                    'RAILCARD_CODE' => '***',
                    'TICKET_CODE' => 'FTP',
                    'END_DATE' => '31122999',
                    'START_DATE' => '23052007',
                    'QUOTE_DATE' => '23052007',
                    'USE_NLC' => '0035',
                    'ADULT_NODIS_FLAG' => ' ',
                    'ADULT_ADD_ON_AMOUNT' => '00000000',
                    'ADULT_REBOOK_FLAG' => 'N',
                    'CHILD_NODIS_FLAG' => ' ',
                    'CHILD_ADD_ON_AMOUNT' => '00000000',
                    'CHILD_REBOOK_FLAG' => 'N',
                    'RECORD_IDENTITY' => 'FNS'
                ]
            ],
            [
                'line' => 'RN770****01004******311229991512201015122010    X        NX        N
',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'ORIGIN_CODE' => 'N770',
                    'DESTINATION_CODE' => '****',
                    'ROUTE_CODE' => '01004',
                    'RAILCARD_CODE' => '***',
                    'TICKET_CODE' => '***',
                    'END_DATE' => '31122999',
                    'START_DATE' => '15122010',
                    'QUOTE_DATE' => '15122010',
                    'USE_NLC' => '    ',
                    'ADULT_NODIS_FLAG' => 'X',
                    'ADULT_ADD_ON_AMOUNT' => '        ',
                    'ADULT_REBOOK_FLAG' => 'N',
                    'CHILD_NODIS_FLAG' => 'X',
                    'CHILD_ADD_ON_AMOUNT' => '        ',
                    'CHILD_REBOOK_FLAG' => 'N',
                    'RECORD_IDENTITY' => 'FNS'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            'RN770****01004******311229991512201015122010    X        NX        N ',
            'RN770****01004******311229991512201015122010    X        NX        '
        ];
    }
}
