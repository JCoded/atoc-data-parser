<?php
namespace JCoded\ATOCFeedParser\Test\File\Timetable;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * AdditionalFixedLinksTest Class
 */
class AdditionalFixedLinksTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Timetable\AdditionalFixedLinks();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'M=TUBE,O=EUS,D=LST,T=13,S=0530,E=2359,P=4,R=1111110',
                'expected' => [
                    'M' => 'TUBE',
                    'O' => 'EUS',
                    'D' => 'LST',
                    'T' => '13',
                    'S' => '0530',
                    'E' => '2359',
                    'P' => '4',
                    'R' => '1111110',
                    'RECORD_IDENTITY' => 'ALF'
                ]
            ],
            [
                'line' => 'M=METRO,O=MAN,D=MCV,T=8,S=0001,E=2359,P=5,F=07/01/2009,U=28/02/2009',
                'expected' => [
                    'M' => 'METRO',
                    'O' => 'MAN',
                    'D' => 'MCV',
                    'T' => '8',
                    'S' => '0001',
                    'E' => '2359',
                    'P' => '5',
                    'F' => '07/01/2009',
                    'U' => '28/02/2009',
                    'RECORD_IDENTITY' => 'ALF'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' ',
            'COMMA,SEPERATED,NO,EQUALS'
        ];
    }
}
