<?php

namespace JCoded\AtocDataParser\File\Fare;

/**
 * NonDeliverableFaresOverride Class
 */
class NonDeliverableFaresOverride extends NonDeliverableFares
{
    /**
     * Get the record identity for the line
     * 
     * @param string $line
     * 
     * @return string
     */
    protected function recordIdentity($line)
    {
        return 'NFO';
    }
}
