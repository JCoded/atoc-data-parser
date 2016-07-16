<?php
namespace JCoded\ATOCFeedParser\File\Timetable;

use JCoded\ATOCFeedParser\File\AbstractFileParser;

/**
 * FixedLinks Class
 */
class FixedLinks extends AbstractFileParser
{
    private $map3 = [
        'LINK' => 17,
        'MODE' => 3,
        'BETWEEN' => 9,
        'ORIGIN' => 3,
        'AND' => 5,
        'DESTINATION' => 3,
        'IN' => 4,
        'TIME' => 3,
        'MINUTES' => 8,
    ];
    
    private $map4 = [
        'LINK' => 17,
        'MODE' => 4,
        'BETWEEN' => 9,
        'ORIGIN' => 3,
        'AND' => 5,
        'DESTINATION' => 3,
        'IN' => 4,
        'TIME' => 3,
        'MINUTES' => 8,
    ];
    
    private $map5 = [
        'LINK' => 17,
        'MODE' => 5,
        'BETWEEN' => 9,
        'ORIGIN' => 3,
        'AND' => 5,
        'DESTINATION' => 3,
        'IN' => 4,
        'TIME' => 3,
        'MINUTES' => 8,
    ];
    
    private $map8 = [
        'LINK' => 17,
        'MODE' => 8,
        'BETWEEN' => 9,
        'ORIGIN' => 3,
        'AND' => 5,
        'DESTINATION' => 3,
        'IN' => 4,
        'TIME' => 3,
        'MINUTES' => 8,
    ];
    
    /**
     * Get the record identity for the line
     * 
     * @param string $line
     * 
     * @return string
     */
    protected function recordIdentity($line)
    {
        return 'FLF';
    }
    
    /**
     * Get the data map for the line
     * 
     * @param string $line
     * 
     * @return array
     */
    protected function dataMap($line)
    {
        $lineParts = explode(' ', substr($line, 17, 8));
        $mode = reset($lineParts);
        $modeLength = strlen($mode);
        
        $map = 'map'.$modeLength;
        
        if (!property_exists($this, $map)) {
            return '';
        }
        
        return $this->$map;
    }
}
