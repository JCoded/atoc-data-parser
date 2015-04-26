<?php
namespace JCoded\ATOCFeedParser;

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
     * @return \JCoded\ATOCFeedParser\File\ParserInterface
     */
    public function getParser($filename);
}
