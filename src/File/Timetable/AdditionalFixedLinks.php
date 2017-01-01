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
        
        if ($pairs === false || is_array($pairs) === false) {
            throw new IncompatibleLineException($line);
        }
        
        $keyValues = [];
        
        foreach ($pairs as $pair) {
            if (strlen($pair) <= 1) {
                throw new IncompatibleLineException($line);
            }
        
            $parts = explode('=', ltrim($pair), 2);
            
            if ($parts === false || is_array($parts) === false || count($parts) !== 2) {
                throw new IncompatibleLineException($line);
            }
        
            $keyValues[$parts[0]] = $parts[1];
        }
        
        $keyValues['RECORD_IDENTITY'] = 'ALF';
        
        return $keyValues;
    }
}
