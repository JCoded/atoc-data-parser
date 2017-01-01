<?php
namespace JCoded\AtocDataParser\Test\File\Fare;

use JCoded\AtocDataParser\Test\File\AbstractTest;

/**
 * ClassLegendsTest Class
 */
class ClassLegendsTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\AtocDataParser\File\Fare\ClassLegends();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => '33112299927091992NOT USEDXXX',
                'expected' => [
                    'CLASS' => '3',
                    'END_DATE' => '31122999',
                    'START_DATE' => '27091992',
                    'ATB_DESC' => 'NOT USED',
                    'CC_DESC' => 'XXX',
                    'RECORD_IDENTITY' => 'TCL'
                ]
            ],
            [
                'line' => '13112299910111991FIRST   1ST
',
                'expected' => [
                    'CLASS' => '1',
                    'END_DATE' => '31122999',
                    'START_DATE' => '10111991',
                    'ATB_DESC' => 'FIRST   ',
                    'CC_DESC' => '1ST',
                    'RECORD_IDENTITY' => 'TCL'
                ]
            ],
            [
                'line' => '23112299910111991STANDARDSTD',
                'expected' => [
                    'CLASS' => '2',
                    'END_DATE' => '31122999',
                    'START_DATE' => '10111991',
                    'ATB_DESC' => 'STANDARD',
                    'CC_DESC' => 'STD',
                    'RECORD_IDENTITY' => 'TCL'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            '23112299910111991STANDARDSTD ',
            '23112299910111991STANDARDST',
            '23112299910111991STANDARD  STD'
        ];
    }
}
