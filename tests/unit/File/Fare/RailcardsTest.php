<?php
namespace JCoded\AtocDataParser\Test\File\Fare;

use JCoded\AtocDataParser\Test\File\AbstractTest;

/**
 * RailcardsTest Class
 */
class RailcardsTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\AtocDataParser\File\Fare\Railcards();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'YTH101220141809201411122014CBRITRAIL YOUTH      NNNNYTHY0010010010010010000000000010000000000000000000    31122999NZZZ054055056
',
                'expected' => [
                    'RAILCARD_CODE' => 'YTH',
                    'END_DATE' => '10122014',
                    'START_DATE' => '18092014',
                    'QUOTE_DATE' => '11122014',
                    'HOLDER_TYPE' => 'C',
                    'DESCRIPTION' => 'BRITRAIL YOUTH      ',
                    'RESTRICTED_BY_ISSUE' => 'N',
                    'RESTRICTED_BY_AREA' => 'N',
                    'RESTRICTED_BY_TRAIN' => 'N',
                    'RESTRICTED_BY_DATE' => 'N',
                    'MASTER_CODE' => 'YTH',
                    'DISPLAY_FLAG' => 'Y',
                    'MAX_PASSENGERS' => '001',
                    'MIN_PASSENGERS' => '001',
                    'MAX_HOLDERS' => '001',
                    'MIN_HOLDERS' => '001',
                    'MAX_ACC_ADULTS' => '001',
                    'MIN_ACC_ADULTS' => '000',
                    'MAX_ADULTS' => '000',
                    'MIN_ADULTS' => '000',
                    'MAX_CHILDREN' => '001',
                    'MIN_CHILDREN' => '000',
                    'PRICE' => '00000000',
                    'DISCOUNT_PRICE' => '00000000',
                    'VALIDITY_PERIOD' => '    ',
                    'LAST_VALID_DATE' => '31122999',
                    'PHYSICAL_CARD' => 'N',
                    'CAPRI_TICKET_TYPE' => 'ZZZ',
                    'ADULT_STATUS' => '054',
                    'CHILD_STATUS' => '055',
                    'AAA_STATUS' => '056',
                    'RECORD_IDENTITY' => 'RLC'
                ]
            ],
            [
                'line' => '2TS311229990201201514112014ATWO TOGETHER RCD AGCNNNN2TSY00100100100100000000100100000000001000000000001200        YZPCXXXXXXXXX',
                'expected' => [
                    'RAILCARD_CODE' => '2TS',
                    'END_DATE' => '31122999',
                    'START_DATE' => '02012015',
                    'QUOTE_DATE' => '14112014',
                    'HOLDER_TYPE' => 'A',
                    'DESCRIPTION' => 'TWO TOGETHER RCD AGC',
                    'RESTRICTED_BY_ISSUE' => 'N',
                    'RESTRICTED_BY_AREA' => 'N',
                    'RESTRICTED_BY_TRAIN' => 'N',
                    'RESTRICTED_BY_DATE' => 'N',
                    'MASTER_CODE' => '2TS',
                    'DISPLAY_FLAG' => 'Y',
                    'MAX_PASSENGERS' => '001',
                    'MIN_PASSENGERS' => '001',
                    'MAX_HOLDERS' => '001',
                    'MIN_HOLDERS' => '001',
                    'MAX_ACC_ADULTS' => '000',
                    'MIN_ACC_ADULTS' => '000',
                    'MAX_ADULTS' => '001',
                    'MIN_ADULTS' => '001',
                    'MAX_CHILDREN' => '000',
                    'MIN_CHILDREN' => '000',
                    'PRICE' => '00001000',
                    'DISCOUNT_PRICE' => '00000000',
                    'VALIDITY_PERIOD' => '1200',
                    'LAST_VALID_DATE' => '        ',
                    'PHYSICAL_CARD' => 'Y',
                    'CAPRI_TICKET_TYPE' => 'ZPC',
                    'ADULT_STATUS' => 'XXX',
                    'CHILD_STATUS' => 'XXX',
                    'AAA_STATUS' => 'XXX',
                    'RECORD_IDENTITY' => 'RLC'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            '2TS311229990201201514112014ATWO TOGETHER RCD AGCNNNN2TSY00100100100100000000100100000000001000000000001200        YZPCXXXXXXXX',
            '2TS311229990201201514112014ATWO TOGETHER RCD AGCNNNN2TSY00100100100100000000100100000000001000000000001200        YZPCXXXXXXXXX '
        ];
    }
}
