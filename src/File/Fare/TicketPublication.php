<?php
namespace JCoded\AtocDataParser\File\Fare;

use JCoded\AtocDataParser\File\AbstractFileParser;

/**
 * TicketPublication Class
 */
class TicketPublication extends AbstractFileParser
{
    /**
     * Get the data map for the file
     * 
     * @param string $line
     * 
     * @return array
     */
    protected function dataMap($line)
    {
        return [
            'TICKET_CODE' => 3,
            'PUBLICATION_SEQUENCE' => 3,
        ];
    }
    
    /**
     * Get the record identity for the line
     * 
     * @param string $line
     * 
     * @return string
     */
    protected function recordIdentity($line)
    {
        return 'TPB';
    }
}
