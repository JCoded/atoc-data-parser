<?php
namespace JCoded\AtocDataParser\Test\File\Fare;

use JCoded\AtocDataParser\Test\File\AbstractTest;

/**
 * TicketValidityTest Class
 */
class TicketValidityTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\AtocDataParser\File\Fare\TicketValidity();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => '023112299901031991THREE MONTHS        000000000000  YYTHREE MONTHS  THREE MONTHS  
',
                'expected' => [
                    'VALIDITY_CODE' => '02',
                    'END_DATE' => '31122999',
                    'START_DATE' => '01031991',
                    'DESCRIPTION' => 'THREE MONTHS        ',
                    'OUT_DAYS' => '00',
                    'OUT_MONTHS' => '00',
                    'RET_DAYS' => '00',
                    'RET_MONTHS' => '00',
                    'RET_AFTER_DAYS' => '00',
                    'RET_AFTER_MONTHS' => '00',
                    'RET_AFTER_DAY' => '  ',
                    'BREAK_OUT' => 'Y',
                    'BREAK_RTN' => 'Y',
                    'OUT_DESCRIPTION' => 'THREE MONTHS  ',
                    'RTN_DESCRIPTION' => 'THREE MONTHS  ',
                    'RECORD_IDENTITY' => 'TVL'
                ]
            ],
            [
                'line' => '983112299911022003AS ADVERTISED       010000010000SAYYAS ADVERTISED AS ADVERTISED ',
                'expected' => [
                    'VALIDITY_CODE' => '98',
                    'END_DATE' => '31122999',
                    'START_DATE' => '11022003',
                    'DESCRIPTION' => 'AS ADVERTISED       ',
                    'OUT_DAYS' => '01',
                    'OUT_MONTHS' => '00',
                    'RET_DAYS' => '00',
                    'RET_MONTHS' => '01',
                    'RET_AFTER_DAYS' => '00',
                    'RET_AFTER_MONTHS' => '00',
                    'RET_AFTER_DAY' => 'SA',
                    'BREAK_OUT' => 'Y',
                    'BREAK_RTN' => 'Y',
                    'OUT_DESCRIPTION' => 'AS ADVERTISED ',
                    'RTN_DESCRIPTION' => 'AS ADVERTISED ',
                    'RECORD_IDENTITY' => 'TVL'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            '952909201422042010ONE MONTH           000100000000  NNONE MONTH     INVALID      ',
            '933112299919122000AS ADVERTISED       010001000000  NNAS ADVERTISED AS ADVERTISED  '
        ];
    }
}
