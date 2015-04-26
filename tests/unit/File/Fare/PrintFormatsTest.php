<?php
namespace JCoded\ATOCFeedParser\Test\File\Fare;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * PrintFormatsTest Class
 */
class PrintFormatsTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Fare\PrintFormats();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'RP2HC***101151001            
',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'P',
                    'SUPPLEMENT_CODE' => '2HC',
                    'RAILCARD_CODE' => '***',
                    'REV_CODE' => '101',
                    'NON_REV_CODE' => '151',
                    'TEXT_CODE_1' => '001',
                    'TEXT_CODE_2' => '   ',
                    'TEXT_CODE_3' => '   ',
                    'TEXT_CODE_4' => '   ',
                    'TEXT_CODE_5' => '   ',
                    'RECORD_IDENTITY' => 'TPNP'
                ]
            ],
            [
                'line' => 'RP1PS***104154001            ',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'P',
                    'SUPPLEMENT_CODE' => '1PS',
                    'RAILCARD_CODE' => '***',
                    'REV_CODE' => '104',
                    'NON_REV_CODE' => '154',
                    'TEXT_CODE_1' => '001',
                    'TEXT_CODE_2' => '   ',
                    'TEXT_CODE_3' => '   ',
                    'TEXT_CODE_4' => '   ',
                    'TEXT_CODE_5' => '   ',
                    'RECORD_IDENTITY' => 'TPNP'
                ]
            ],
            [
                'line' => 'RT001.                                                                       ',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'T',
                    'TEXT_CODE' => '001',
                    'FREE_TEXT' => '.                                                                       ',
                    'RECORD_IDENTITY' => 'TPNT'
                ]
            ]
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' ',
            'RP1PS***104154001           ',
            'RP1PS***104154001             '
        ];
    }
}
