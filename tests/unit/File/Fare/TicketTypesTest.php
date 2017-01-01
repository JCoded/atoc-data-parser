<?php
namespace JCoded\AtocDataParser\Test\File\Fare;

use JCoded\AtocDataParser\Test\File\AbstractTest;

/**
 * TicketTypesTest Class
 */
class TicketTypesTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\AtocDataParser\File\Fare\TicketTypes();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'RZZY311229990405199914112014NOT FOR TRAVEL 2SE31122999001001001000001000NNN87NOT VALID FOR TRAVEL0NZZZN000NN00120
',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'TICKET_CODE' => 'ZZY',
                    'END_DATE' => '31122999',
                    'START_DATE' => '04051999',
                    'QUOTE_DATE' => '14112014',
                    'DESCRIPTION' => 'NOT FOR TRAVEL ',
                    'TKT_CLASS' => '2',
                    'TKT_TYPE' => 'S',
                    'TKT_GROUP' => 'E',
                    'LAST_VALID_DAY' => '31122999',
                    'MAX_PASSENGERS' => '001',
                    'MIN_PASSENGERS' => '001',
                    'MAX_ADULTS' => '001',
                    'MIN_ADULTS' => '000',
                    'MAX_CHILDREN' => '001',
                    'MIN_CHILDREN' => '000',
                    'RESTRICTED_BY_DATE' => 'N',
                    'RESTRICTED_BY_TRAIN' => 'N',
                    'RESTRICTED_BY_AREA' => 'N',
                    'VALIDITY_CODE' => '87',
                    'ATB_DESCRIPTION' => 'NOT VALID FOR TRAVEL',
                    'LUL_XLONDON_ISSUE' => '0',
                    'RESERVATION_REQUIRED' => 'N',
                    'CAPRI_CODE' => 'ZZZ',
                    'LUL_93' => 'N',
                    'UTS_CODE' => '00',
                    'TIME_RESTRICTION' => '0',
                    'FREE_PASS_LUL' => 'N',
                    'PACKAGE_MKR' => 'N',
                    'FARE_MULTIPLIER' => '001',
                    'DISCOUNT_CATEGORY' => '20',
                    'RECORD_IDENTITY' => 'TTY'
                ]
            ],
            [
                'line' => 'R0AB230420142211201314112014SMART TKR      2RS31122999001001000000001000NNY84SMART TKR           0NZZZN000NN00120',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'TICKET_CODE' => '0AB',
                    'END_DATE' => '23042014',
                    'START_DATE' => '22112013',
                    'QUOTE_DATE' => '14112014',
                    'DESCRIPTION' => 'SMART TKR      ',
                    'TKT_CLASS' => '2',
                    'TKT_TYPE' => 'R',
                    'TKT_GROUP' => 'S',
                    'LAST_VALID_DAY' => '31122999',
                    'MAX_PASSENGERS' => '001',
                    'MIN_PASSENGERS' => '001',
                    'MAX_ADULTS' => '000',
                    'MIN_ADULTS' => '000',
                    'MAX_CHILDREN' => '001',
                    'MIN_CHILDREN' => '000',
                    'RESTRICTED_BY_DATE' => 'N',
                    'RESTRICTED_BY_TRAIN' => 'N',
                    'RESTRICTED_BY_AREA' => 'Y',
                    'VALIDITY_CODE' => '84',
                    'ATB_DESCRIPTION' => 'SMART TKR           ',
                    'LUL_XLONDON_ISSUE' => '0',
                    'RESERVATION_REQUIRED' => 'N',
                    'CAPRI_CODE' => 'ZZZ',
                    'LUL_93' => 'N',
                    'UTS_CODE' => '00',
                    'TIME_RESTRICTION' => '0',
                    'FREE_PASS_LUL' => 'N',
                    'PACKAGE_MKR' => 'N',
                    'FARE_MULTIPLIER' => '001',
                    'DISCOUNT_CATEGORY' => '20',
                    'RECORD_IDENTITY' => 'TTY'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            'R0BJ240420141110201214112014SMART EB PSS   2NS24042014001001001000001000NNY00SMART EB PSS        0NMUEN980NN0010',
            'R0BL311229990502201314112014SMART SVR      2RS31122999001001001000001000NNY72SMART SVR           2NUFPY000NN00103R'
        ];
    }
}
