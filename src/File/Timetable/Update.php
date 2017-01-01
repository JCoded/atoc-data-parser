<?php
namespace JCoded\AtocDataParser\File\Timetable;

/**
 * Update Class
 */
class Update extends Cif
{
    /**
     * Get the map for the file
     * 
     * @return array
     */
    protected function getMap()
    {
        $prefix = 'CFA';
        
        return $this->getPrefixedIdentityMap($prefix);
    }
}
