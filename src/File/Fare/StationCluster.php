<?php
namespace JCoded\AtocDataParser\File\Fare;

use JCoded\AtocDataParser\File\AbstractFileParser;

/**
 * StationCluster Class
 */
class StationCluster extends AbstractFileParser
{
    /**
     * Get the data map for the file
     * 
     * @param string $line
     * 
     * @return array
     */
    protected function dataMap($line)
    {
        return [
            'UPDATE_MARKER' => 1,
            'CLUSTER_ID' => 4,
            'CLUSTER_NLC' => 4,
            'END_DATE' => 8,
            'START_DATE' => 8
        ];
    }
    
    /**
     * Get the record identity for the line
     * 
     * @param string $line
     * 
     * @return string
     */
    protected function recordIdentity($line)
    {
        return 'FSC';
    }
}
