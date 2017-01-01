<?php
namespace JCoded\AtocDataParser;

/**
 * ParserFactoryInterface
 */
interface ParserFactoryInterface
{
    /**
     * Get a parser instance for the file
     * 
     * @param string $filename
     * 
     * @return \JCoded\AtocDataParser\File\ParserInterface
     */
    public function getParser($filename);
}
