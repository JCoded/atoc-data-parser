<?php
namespace JCoded\ATOCFeedParser\File;

use JCoded\ATOCFeedParser\IncompatibleLineException;

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
