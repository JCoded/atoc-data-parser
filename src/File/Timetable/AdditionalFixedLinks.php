<?php
namespace JCoded\AtocDataParser\File\Timetable;

use JCoded\AtocDataParser\File\ParserInterface;
use JCoded\AtocDataParser\IncompatibleLineException;

/**
 * AdditionalFixedLinks Class
 */
class AdditionalFixedLinks implements ParserInterface
{
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
        $pairs = explode(',', $line);
        
        if ($pairs === false || (count($pairs) === 1 && count($pairs[0] === 1)) ) {
            throw new IncompatibleLineException();
        }
        
        $keyValues = [];
        
        foreach ($pairs as $pair) {
            $parts = explode('=', ltrim($pair), 2);
            
            if ($parts === false || (count($parts) === 1 && count($parts[0] === 1)) ) {
                throw new IncompatibleLineException();
            }
        
            $keyValues[$parts[0]] = $parts[1];
        }
        
        $keyValues['RECORD_IDENTITY'] = 'ALF';
        
        return $keyValues;
    }
}
