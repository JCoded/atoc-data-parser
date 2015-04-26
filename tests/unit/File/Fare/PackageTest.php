<?php
namespace JCoded\ATOCFeedParser\Test\File\Fare;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * PackageTest Class
 */
class PackageTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Fare\Package();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'SXC231122999XP3E001  ',
                'expected' => [
                    'RECORD_TYPE' => 'S',
                    'PACKAGE_CODE' => 'XC2',
                    'END_DATE' => '31122999',
                    'SUPPLEMENT_CODE' => 'XP3',
                    'DIRECTION' => 'E',
                    'PACK_NUMBER' => '001',
                    'ORIGIN_FACILITY' => ' ',
                    'DEST_FACILITY' => ' ',
                    'RECORD_IDENTITY' => 'TPKS'
                ]
            ],
            [
                'line' => 'PXS8311229992309201314112014EZ                                                    
',
                'expected' => [
                    'RECORD_TYPE' => 'P',
                    'PACKAGE_CODE' => 'XS8',
                    'END_DATE' => '31122999',
                    'START_DATE' => '23092013',
                    'QUOTE_DATE' => '14112014',
                    'RESTRICTION_CODE' => 'EZ',
                    'ORIGIN_FACILITIES' => '                          ',
                    'DESTINATION_FACILITIES' => '                          ',
                    'RECORD_IDENTITY' => 'TPKP'
                ]
            ],
            [
                'line' => 'PZCR160920142210199914112014                                                      ',
                'expected' => [
                    'RECORD_TYPE' => 'P',
                    'PACKAGE_CODE' => 'ZCR',
                    'END_DATE' => '16092014',
                    'START_DATE' => '22101999',
                    'QUOTE_DATE' => '14112014',
                    'RESTRICTION_CODE' => '  ',
                    'ORIGIN_FACILITIES' => '                          ',
                    'DESTINATION_FACILITIES' => '                          ',
                    'RECORD_IDENTITY' => 'TPKP'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' ',
            'PXP2311229990201200714112014EP',
            'SXBR31122999FPEE001'
        ];
    }
}
