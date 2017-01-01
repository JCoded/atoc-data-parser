<?php
namespace JCoded\AtocDataParser\File;

/**
 * AbstractMultiRecordFileParser Class
 */
abstract class AbstractMultiRecordFileParser extends AbstractFileParser
{
    /**
     * Get the record type for the line
     * 
     * @param string $line
     * 
     * @return string
     */
    abstract protected function recordType($line);
    
    /**
     * Get the map for the file
     * 
     * @return array
     */
    abstract protected function getMap();
    
    /**
     * Get the record identity for the line
     * 
     * @param string $line
     * 
     * @return string
     */
    protected function recordIdentity($line)
    {
        return $this->getFromMap('RECORD_IDENTITY', $line);
    }
    
    /**
     * Get the data map for the file
     * 
     * @param string $line
     * 
     * @return array
     */
    protected function dataMap($line)
    {
        return $this->getFromMap('DATA_MAP', $line);
    }
    
    /**
     * Get data from the map
     * 
     * @param string $dataKey
     * @param string $line
     * 
     * @return mixed
     */
    private function getFromMap($dataKey, $line)
    {
        $recordType = $this->recordType($line);
        
        if (!$recordType) {
            return '';
        }
        
        $map = $this->getMap();
        
        if (array_key_exists($recordType, $map)) {
            return $map[$recordType][$dataKey];
        }
        
        return '';
    }
}
