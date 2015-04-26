<?php
namespace JCoded\ATOCFeedParser\File\Timetable;

/**
 * Full Class
 */
class Full extends Cif
{
    /**
     * Get the map for the file
     * 
     * @return array
     */
    protected function getMap()
    {
        $prefix = 'MCA';
        
        return $this->getPrefixedIdentityMap($prefix);
    }
}
