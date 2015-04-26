<?php
namespace JCoded\ATOCFeedParser\File;

use JCoded\ATOCFeedParser\IncompatibleLineException;

/**
 * AbstractFileParser Class
 */
abstract class AbstractFileParser implements ParserInterface
{
    /**
     * Get the record identity for the line
     * 
     * @param string $line
     * 
     * @return string
     */
    abstract protected function recordIdentity($line);
    
    /**
     * Get the data map for the line
     * 
     * @param string $line
     * 
     * @return array
     */
    abstract protected function dataMap($line);
    
    /**
     * Get the expected line length
     * 
     * @param string $line
     */
    protected function expectedLength($line)
    {
        $this->expectedLength = 0;
        
        foreach ($this->dataMap($line) as $elementLength) {
            $this->expectedLength += $elementLength;
        }
        
        return $this->expectedLength;
    }
    
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
        $line = trim($line, "\r\n");
        
        $dataMap = $this->dataMap($line);
        
        if ( empty($dataMap) || ($this->expectedLength($line) != strlen($line)) ) {
            throw new IncompatibleLineException($line);
        }
        
        $data = [];
        
        $data['RECORD_IDENTITY'] = $this->recordIdentity($line);
        
        $position = 0;
        
        foreach ($dataMap as $key => $length) {
            $data[$key] = substr($line, $position, $length);
            $position += $length;
        }
        
        return $data;
    }
}
