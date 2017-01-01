<?php
namespace JCoded\AtocDataParser\Test\File\Fare;

use JCoded\AtocDataParser\Test\File\AbstractTest;

/**
 * RoundingRulesTest Class
 */
class RoundingRulesTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\AtocDataParser\File\Fare\RoundingRules();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => '033112299908051019990000000100000001
',
                'expected' => [
                    'RULE_NO' => '03',
                    'END_DATE' => '31122999',
                    'RULE_INDEX' => '08',
                    'START_DATE' => '05101999',
                    'MAX_AMOUNT' => '00000001',
                    'ROUND_AMOUNT' => '00000001',
                    'RECORD_IDENTITY' => 'FRR'
                ]
            ],
            [
                'line' => 'Z03112299901280919970000000100000001',
                'expected' => [
                    'RULE_NO' => 'Z0',
                    'END_DATE' => '31122999',
                    'RULE_INDEX' => '01',
                    'START_DATE' => '28091997',
                    'MAX_AMOUNT' => '00000001',
                    'ROUND_AMOUNT' => '00000001',
                    'RECORD_IDENTITY' => 'FRR'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            'X03112299908071119960000000100000001 ',
            'X0311229990807111996000000010000000'
        ];
    }
}
