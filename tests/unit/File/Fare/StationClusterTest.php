<?php
namespace JCoded\AtocDataParser\Test\File\Fare;

use JCoded\AtocDataParser\Test\File\AbstractTest;

/**
 * StationClusterTest Class
 */
class StationClusterTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\AtocDataParser\File\Fare\StationCluster();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'RGL0488753112299928072009
',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'CLUSTER_ID' => 'GL04',
                    'CLUSTER_NLC' => '8875',
                    'END_DATE' => '31122999',
                    'START_DATE' => '28072009',
                    'RECORD_IDENTITY' => 'FSC'
                ]
            ],
            [
                'line' => 'RZ23407113112299926072000',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'CLUSTER_ID' => 'Z234',
                    'CLUSTER_NLC' => '0711',
                    'END_DATE' => '31122999',
                    'START_DATE' => '26072000',
                    'RECORD_IDENTITY' => 'FSC'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            'RZ23106133112299926072000 ',
            'RZ2310613311229992607200'
        ];
    }
}
