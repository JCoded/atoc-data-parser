<?php
namespace JCoded\ATOCFeedParser\Test\File\Fare;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * TicketPublicationTest Class
 */
class TicketPublicationTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Fare\TicketPublication();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => '0AH487',
                'expected' => [
                    'TICKET_CODE' => '0AH',
                    'PUBLICATION_SEQUENCE' => '487',
                    'RECORD_IDENTITY' => 'TPB'
                ]
            ],
            [
                'line' => 'XS5438',
                'expected' => [
                    'TICKET_CODE' => 'XS5',
                    'PUBLICATION_SEQUENCE' => '438',
                    'RECORD_IDENTITY' => 'TPB'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            'XS5438 ',
            'XS543'
        ];
    }
}
