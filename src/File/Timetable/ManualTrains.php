<?php

namespace JCoded\AtocDataParser\File\Timetable;

/**
 * ManualTrains Class
 */
class ManualTrains extends Cif
{
    /**
     * Get the map for the file
     * 
     * @return array
     */
    protected function getMap()
    {
        $prefix = 'ZTR';
        
        return $this->getPrefixedIdentityMap($prefix);
    }
}
