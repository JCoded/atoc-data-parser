<?php
namespace JCoded\ATOCFeedParser\Test\File\Fare;

use JCoded\ATOCFeedParser\Test\File\AbstractTest;

/**
 * StatusDiscountsTest Class
 */
class StatusDiscountsTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\ATOCFeedParser\File\Fare\StatusDiscounts();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'S1981604201214032012GCCOMGCCOM00000000000000000000000000000000000000000000000000000000000000000YYYY',
                'expected' => [
                    'RECORD_TYPE' => 'S',
                    'STATUS_CODE' => '198',
                    'END_DATE' => '16042012',
                    'START_DATE' => '14032012',
                    'ATB_DESC' => 'GCCOM',
                    'CC_DESC' => 'GCCOM',
                    'UTS_CODE' => '0',
                    'FIRST_SINGLE_MAX_FLAT' => '00000000',
                    'FIRST_RETURN_MAX_FLAT' => '00000000',
                    'STD_SINGLE_MAX_FLAT' => '00000000',
                    'STD_RETURN_MAX_FLAT' => '00000000',
                    'FIRST_LOWER_MIN' => '00000000',
                    'FIRST_HIGHER_MIN' => '00000000',
                    'STD_LOWER_MIN' => '00000000',
                    'STD_HIGHER_MIN' => '00000000',
                    'FS_MKR' => 'Y',
                    'FR_MKR' => 'Y',
                    'SS_MKR' => 'Y',
                    'SR_MKR' => 'Y',
                    'RECORD_IDENTITY' => 'DISS'
                ]
            ],
            [
                'line' => 'D00021102014030000
',
                'expected' => [
                    'RECORD_TYPE' => 'D',
                    'STATUS_CODE' => '000',
                    'END_DATE' => '21102014',
                    'DISCOUNT_CATEGORY' => '03',
                    'DISCOUNT_INDICATOR' => '0',
                    'DISCOUNT_PERCENTAGE' => '000',
                    'RECORD_IDENTITY' => 'DISD'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' ',
            'D00021102014030000 ',
            'D0002110201403000'
        ];
    }
}
