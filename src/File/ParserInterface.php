<?php
namespace JCoded\AtocDataParser\File;

use JCoded\AtocDataParser\IncompatibleLineException;

/**
 * ParserInterface
 */
interface ParserInterface
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
    public function parseLine($line);
}
