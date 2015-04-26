<?php
namespace JCoded\ATOCFeedParser\Test\File\Timetable;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * FixedLinksTest Class
 */
class FixedLinksTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Timetable\FixedLinks();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'ADDITIONAL LINK: BUS BETWEEN CDG AND ERW IN   9 MINUTES',
                'expected' => [
                    'LINK' => 'ADDITIONAL LINK: ',
                    'MODE' => 'BUS',
                    'BETWEEN' => ' BETWEEN ',
                    'ORIGIN' => 'CDG',
                    'AND' => ' AND ',
                    'DESTINATION' => 'ERW',
                    'IN' => ' IN ',
                    'TIME' => '  9',
                    'MINUTES' => ' MINUTES',
                    'RECORD_IDENTITY' => 'FLF'
                ]
            ],
            [
                'line' => 'ADDITIONAL LINK: WALK BETWEEN ABR AND ACY IN   3 MINUTES',
                'expected' => [
                    'LINK' => 'ADDITIONAL LINK: ',
                    'MODE' => 'WALK',
                    'BETWEEN' => ' BETWEEN ',
                    'ORIGIN' => 'ABR',
                    'AND' => ' AND ',
                    'DESTINATION' => 'ACY',
                    'IN' => ' IN ',
                    'TIME' => '  3',
                    'MINUTES' => ' MINUTES',
                    'RECORD_IDENTITY' => 'FLF'
                ]
            ],
            [
                'line' => 'ADDITIONAL LINK: METRO BETWEEN WFQ AND DSQ IN 100 MINUTES',
                'expected' => [
                    'LINK' => 'ADDITIONAL LINK: ',
                    'MODE' => 'METRO',
                    'BETWEEN' => ' BETWEEN ',
                    'ORIGIN' => 'WFQ',
                    'AND' => ' AND ',
                    'DESTINATION' => 'DSQ',
                    'IN' => ' IN ',
                    'TIME' => '100',
                    'MINUTES' => ' MINUTES',
                    'RECORD_IDENTITY' => 'FLF'
                ]
            ],
            [
                'line' => 'ADDITIONAL LINK: TRANSFER BETWEEN LIY AND TYJ IN 999 MINUTES',
                'expected' => [
                    'LINK' => 'ADDITIONAL LINK: ',
                    'MODE' => 'TRANSFER',
                    'BETWEEN' => ' BETWEEN ',
                    'ORIGIN' => 'LIY',
                    'AND' => ' AND ',
                    'DESTINATION' => 'TYJ',
                    'IN' => ' IN ',
                    'TIME' => '999',
                    'MINUTES' => ' MINUTES',
                    'RECORD_IDENTITY' => 'FLF'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' ',
            'END                                                                             '
        ];
    }
}
