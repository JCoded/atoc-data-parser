<?php
namespace JCoded\AtocDataParser\Test\File\Fare;

use JCoded\AtocDataParser\Test\File\AbstractTest;

/**
 * LocationsTest Class
 */
class LocationsTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\AtocDataParser\File\Fare\Locations();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'RL100001031122999010119911411201410     PASILA          60600010     000100                                                                                                                                                                                                                      ',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'L',
                    'UIC_CODE' => '1000010',
                    'END_DATE' => '31122999',
                    'START_DATE' => '01011991',
                    'QUOTE_DATE' => '14112014',
                    'ADMIN_AREA_CODE' => '10 ',
                    'NLC_CODE' => '    ',
                    'DESCRIPTION' => 'PASILA          ',
                    'CRS_CODE' => '606',
                    'RESV_CODE' => '00010',
                    'ERS_COUNTRY' => '  ',
                    'ERS_CODE' => '   ',
                    'FARE_GROUP' => '000100',
                    'COUNTY' => '  ',
                    'PTE_CODE' => '  ',
                    'ZONE_NO' => '    ',
                    'ZONE_IND' => '  ',
                    'REGION' => ' ',
                    'HIERARCHY' => ' ',
                    'CC_DESC_OUT' => '                                         ',
                    'CC_DESC_RTN' => '                ',
                    'ATB_DESC_OUT' => '                                                            ',
                    'ATB_DESC_RTN' => '                              ',
                    'SPECIAL_FACILITIES' => '                          ',
                    'LUL_DIRECTION_IND' => ' ',
                    'LUL_UTS_MODE' => ' ',
                    'LUL_ZONE_1' => ' ',
                    'LUL_ZONE_2' => ' ',
                    'LUL_ZONE_3' => ' ',
                    'LUL_ZONE_4' => ' ',
                    'LUL_ZONE_5' => ' ',
                    'LUL_ZONE_6' => ' ',
                    'LUL_UTS_LONDON_STN' => ' ',
                    'UTS_CODE' => '   ',
                    'UTS_A_CODE' => '   ',
                    'UTS_PTR_BIAS' => ' ',
                    'UTS_OFFSET' => ' ',
                    'UTS_NORTH' => '   ',
                    'UTS_EAST' => '   ',
                    'UTS_SOUTH' => '   ',
                    'UTS_WEST' => '   ',
                    'RECORD_IDENTITY' => 'LOCL'
                ]
            ],
            [
                'line' => 'RL701023001012015020120131002201070 1023HOXTON          HOX00000     1023  01GL00282 0BHOXTON                                   HOXTON          HOXTON                                                      HOXTON                                                  0 NNNNNN0009009S0000000000000',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'L',
                    'UIC_CODE' => '7010230',
                    'END_DATE' => '01012015',
                    'START_DATE' => '02012013',
                    'QUOTE_DATE' => '10022010',
                    'ADMIN_AREA_CODE' => '70 ',
                    'NLC_CODE' => '1023',
                    'DESCRIPTION' => 'HOXTON          ',
                    'CRS_CODE' => 'HOX',
                    'RESV_CODE' => '00000',
                    'ERS_COUNTRY' => '  ',
                    'ERS_CODE' => '   ',
                    'FARE_GROUP' => '1023  ',
                    'COUNTY' => '01',
                    'PTE_CODE' => 'GL',
                    'ZONE_NO' => '0028',
                    'ZONE_IND' => '2 ',
                    'REGION' => '0',
                    'HIERARCHY' => 'B',
                    'CC_DESC_OUT' => 'HOXTON                                   ',
                    'CC_DESC_RTN' => 'HOXTON          ',
                    'ATB_DESC_OUT' => 'HOXTON                                                      ',
                    'ATB_DESC_RTN' => 'HOXTON                        ',
                    'SPECIAL_FACILITIES' => '                          ',
                    'LUL_DIRECTION_IND' => '0',
                    'LUL_UTS_MODE' => ' ',
                    'LUL_ZONE_1' => 'N',
                    'LUL_ZONE_2' => 'N',
                    'LUL_ZONE_3' => 'N',
                    'LUL_ZONE_4' => 'N',
                    'LUL_ZONE_5' => 'N',
                    'LUL_ZONE_6' => 'N',
                    'LUL_UTS_LONDON_STN' => '0',
                    'UTS_CODE' => '009',
                    'UTS_A_CODE' => '009',
                    'UTS_PTR_BIAS' => 'S',
                    'UTS_OFFSET' => '0',
                    'UTS_NORTH' => '000',
                    'UTS_EAST' => '000',
                    'UTS_SOUTH' => '000',
                    'UTS_WEST' => '000',
                    'RECORD_IDENTITY' => 'LOCL'
                ]
            ],
            [
                'line' => 'RA1234567010120017654321ABC',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'A',
                    'UIC_CODE' => '1234567',
                    'END_DATE' => '01012001',
                    'ASSOC_UIC_CODE' => '7654321',
                    'ASSOC_CRS_CODE' => 'ABC',
                    'RECORD_IDENTITY' => 'LOCA'
                ]
            ],
            [
                'line' => 'RR7000270LUR31122999',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'R',
                    'UIC_CODE' => '7000270',
                    'RAILCARD_CODE' => 'LUR',
                    'END_DATE' => '31122999',
                    'RECORD_IDENTITY' => 'LOCR'
                ]
            ],
            [
                'line' => 'RG7000320311229990101199119112014LONDON ZONES 1-2     ',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'G',
                    'GROUP_UIC_CODE' => '7000320',
                    'END_DATE' => '31122999',
                    'START_DATE' => '01011991',
                    'QUOTE_DATE' => '19112014',
                    'DESCRIPTION' => 'LONDON ZONES 1-2',
                    'ERS_COUNTRY' => '  ',
                    'ERS_CODE' => '   ',
                    'RECORD_IDENTITY' => 'LOCG'
                ]
            ],
            [
                'line' => 'RM7000320311229997014440EUS',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'M',
                    'GROUP_UIC_CODE' => '7000320',
                    'END_DATE' => '31122999',
                    'MEMBER_UIC_CODE' => '7014440',
                    'MEMBER_CRS_CODE' => 'EUS',
                    'RECORD_IDENTITY' => 'LOCM'
                ]
            ],
            [
                'line' => 'RS88920073112299901011991GENT ST.PIETERS ',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'S',
                    'UIC_CODE' => '8892007',
                    'END_DATE' => '31122999',
                    'START_DATE' => '01011991',
                    'DESCRIPTION' => 'GENT ST.PIETERS ',
                    'RECORD_IDENTITY' => 'LOCS'
                ]
            ],
            [
                'line' => 'RS94980043112299901011991LISBOA T. DO PAC
',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'S',
                    'UIC_CODE' => '9498004',
                    'END_DATE' => '31122999',
                    'START_DATE' => '01011991',
                    'DESCRIPTION' => 'LISBOA T. DO PAC',
                    'RECORD_IDENTITY' => 'LOCS'
                ]
            ],
            
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' ',
            'RS94980043112299901011991LISBOA T. DO PA',
            'RS94980043112299901011991LISBOA T. DO PAC '
        ];
    }
}
