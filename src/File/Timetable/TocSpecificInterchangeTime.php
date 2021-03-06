<?php
namespace JCoded\AtocDataParser\File\Timetable;

use JCoded\AtocDataParser\File\ParserInterface;
use JCoded\AtocDataParser\IncompatibleLineException;

/**
 * TocSpecificInterchangeTime Class
 */
class TocSpecificInterchangeTime implements ParserInterface
{
    private $map = [
        'STATION_CODE',
        'ARRIVING_TRAIN_TOC',
        'DEPARTING_TRAIN_TOC',
        'MINIMUM_INTERCHANGE_TIME',
        'COMMENTS'
    ];
    
    /**
     * Parse a line of data
     * 
     * @param string $line
     * 
     * @throws IncompatibleLineException
     * 
     * @return array
     */
    public function parseLine($line)
    {
        $values = explode(',', $line, 5);
        
        if ($values === false || is_array($values) === false || count($values) !== 5) {
            throw new IncompatibleLineException($line);
        }
        
        $keyValues = [];
        
        foreach ($this->map as $index => $key) {
        
            $keyValues[$key] = $values[$index];
        }
        
        $keyValues['RECORD_IDENTITY'] = 'TSI';
        
        return $keyValues;
    }
}
