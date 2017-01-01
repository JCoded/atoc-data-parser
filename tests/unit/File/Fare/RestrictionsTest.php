<?php
namespace JCoded\AtocDataParser\Test\File\Fare;

use JCoded\AtocDataParser\Test\File\AbstractTest;

/**
 * RestrictionsTest Class
 */
class RestrictionsTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\AtocDataParser\File\Fare\Restrictions(); //rst
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'RRDC0201201516052015',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'RD',
                    'CF_MKR' => 'C',
                    'START_DATE' => '02012015',
                    'END_DATE' => '16052015',
                    'RECORD_IDENTITY' => 'RSTRD'
                ]
            ],
            [
                'line' => 'RRHC1AOFF-PEAK FROM CAMBGE/NORWICH  NOT VALID ON CERTAIN TRAINS MON-FRI. PLEASE CHECK.NOT VALID ON CERTAIN TRAINS MON-FRI. PLEASE CHECK.NNY',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'RH',
                    'CF_MKR' => 'C',
                    'RESTRICTION_CODE' => '1A',
                    'DESCRIPTION' => 'OFF-PEAK FROM CAMBGE/NORWICH  ',
                    'DESC_OUT' => 'NOT VALID ON CERTAIN TRAINS MON-FRI. PLEASE CHECK.',
                    'DESC_RTN' => 'NOT VALID ON CERTAIN TRAINS MON-FRI. PLEASE CHECK.',
                    'TYPE_OUT' => 'N',
                    'TYPE_RTN' => 'N',
                    'CHANGE_IND' => 'Y',
                    'RECORD_IDENTITY' => 'RSTRH'
                ]
            ],
            [
                'line' => 'RHDC1A01020329YYYYYNN',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'HD',
                    'CF_MKR' => 'C',
                    'RESTRICTION_CODE' => '1A',
                    'DATE_FROM' => '0102',
                    'DATE_TO' => '0329',
                    'DAYS' => 'YYYYYNN',
                    'RECORD_IDENTITY' => 'RSTHD'
                ]
            ],
            [
                'line' => 'RHLCAB123',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'HL',
                    'CF_MKR' => 'C',
                    'RESTRICTION_CODE' => 'AB',
                    'LOCATION_CRS_CODE' => '123',
                    'RECORD_IDENTITY' => 'RSTHL'
                ]
            ],
            [
                'line' => 'RHCCABABC',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'HC',
                    'CF_MKR' => 'C',
                    'RESTRICTION_CODE' => 'AB',
                    'ALLOWED_CHANGE' => 'ABC',
                    'RECORD_IDENTITY' => 'RSTHC'
                ]
            ],
            [
                'line' => 'RHACABABABCABC',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'HA',
                    'CF_MKR' => 'C',
                    'RESTRICTION_CODE' => 'AB',
                    'ADDITIONAL_RESTRICTION' => 'AB',
                    'ORIGIN' => 'ABC',
                    'DESTINATION' => 'ABC',
                    'RECORD_IDENTITY' => 'RSTHA'
                ]
            ],
            [
                'line' => 'RTRC1A0001O00010822DBSETAN',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'TR',
                    'CF_MKR' => 'C',
                    'RESTRICTION_CODE' => '1A',
                    'SEQUENCE_NO' => '0001',
                    'OUT_RET' => 'O',
                    'TIME_FROM' => '0001',
                    'TIME_TO' => '0822',
                    'ARR_DEP_VIA' => 'D',
                    'LOCATION' => 'BSE',
                    'RSTR_TYPE' => 'T',
                    'TRAIN_TYPE' => 'A',
                    'MIN_FARE_FLAG' => 'N',
                    'RECORD_IDENTITY' => 'RSTTR'
                ]
            ],
            [
                'line' => 'RTDC1K0052R01050329NNNNYNN',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'TD',
                    'CF_MKR' => 'C',
                    'RESTRICTION_CODE' => '1K',
                    'SEQUENCE_NO' => '0052',
                    'OUT_RET' => 'R',
                    'DATE_FROM' => '0105',
                    'DATE_TO' => '0329',
                    'DAYS' => 'NNNNYNN',
                    'RECORD_IDENTITY' => 'RSTTD'
                ]
            ],
            [
                'line' => 'RTTFZ70013OHT',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'TT',
                    'CF_MKR' => 'F',
                    'RESTRICTION_CODE' => 'Z7',
                    'SEQUENCE_NO' => '0013',
                    'OUT_RET' => 'O',
                    'TOC_CODE' => 'HT',
                    'RECORD_IDENTITY' => 'RSTTT'
                ]
            ],
            [
                'line' => 'RTPCAB0123OSPYNABCABC',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'TP',
                    'CF_MKR' => 'C',
                    'RESTRICTION_CODE' => 'AB',
                    'SEQUENCE_NO' => '0123',
                    'OUT_RET' => 'O',
                    'BARRED_CLASS' => 'S',
                    'BARRED_TICKETS' => 'P',
                    'BARRED_SEASONS' => 'Y',
                    'BARRED_FIRST' => 'N',
                    'FROM_LOCATION' => 'ABC',
                    'TO_LOCATION' => 'ABC',
                    'RECORD_IDENTITY' => 'RSTTP'
                ]
            ],
            [
                'line' => 'RTECAB0123OE',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'TE',
                    'CF_MKR' => 'C',
                    'RESTRICTION_CODE' => 'AB',
                    'SEQUENCE_NO' => '0123',
                    'OUT_RET' => 'O',
                    'PASS_EXCEPTION' => 'E',
                    'RECORD_IDENTITY' => 'RSTTE'
                ]
            ],
            [
                'line' => 'RSRC1AP50750ONN',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'SR',
                    'CF_MKR' => 'C',
                    'RESTRICTION_CODE' => '1A',
                    'TRAIN_NO' => 'P50750',
                    'OUT_RET' => 'O',
                    'QUOTA_IND' => 'N',
                    'SLEEPER_IND' => 'N',
                    'RECORD_IDENTITY' => 'RSTSR'
                ]
            ],
            [
                'line' => 'RSDCABA01234O01230123YNYNYNY',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'SD',
                    'CF_MKR' => 'C',
                    'RESTRICTION_CODE' => 'AB',
                    'TRAIN_NO' => 'A01234',
                    'OUT_RET' => 'O',
                    'DATE_FROM' => '0123',
                    'DATE_TO' => '0123',
                    'DAYS' => 'YNYNYNY',
                    'RECORD_IDENTITY' => 'RSTSD'
                ]
            ],
            [
                'line' => 'RSQC1AY11180OBTP A',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'SQ',
                    'CF_MKR' => 'C',
                    'RESTRICTION_CODE' => '1A',
                    'TRAIN_NO' => 'Y11180',
                    'OUT_RET' => 'O',
                    'LOCATION' => 'BTP',
                    'QUOTA_IND' => ' ',
                    'ARR_DEP' => 'A',
                    'RECORD_IDENTITY' => 'RSTSQ'
                ]
            ],
            [
                'line' => 'RSPCABA01234OBOYNABCABC',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'SP',
                    'CF_MKR' => 'C',
                    'RESTRICTION_CODE' => 'AB',
                    'TRAIN_NO' => 'A01234',
                    'OUT_RET' => 'O',
                    'BARRED_CLASS' => 'B',
                    'BARRED_TICKETS' => 'O',
                    'BARRED_SEASONS' => 'Y',
                    'BARRED_FIRST' => 'N',
                    'FROM_LOCATION' => 'ABC',
                    'TO_LOCATION' => 'ABC',
                    'RECORD_IDENTITY' => 'RSTSP'
                ]
            ],
            [
                'line' => 'RSECABA01234OA',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'SE',
                    'CF_MKR' => 'C',
                    'RESTRICTION_CODE' => 'AB',
                    'TRAIN_NO' => 'A01234',
                    'OUT_RET' => 'O',
                    'PASS_EXCEPTION' => 'A',
                    'RECORD_IDENTITY' => 'RSTSE'
                ]
            ],
            [
                'line' => 'RRRC2TR0001           R9 ',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'RR',
                    'CF_MKR' => 'C',
                    'RAILCARD_CODE' => '2TR',
                    'SEQUENCE_NO' => '0001',
                    'TICKET_CODE' => '   ',
                    'ROUTE_CODE' => '     ',
                    'LOCATION' => '   ',
                    'RESTRICTION_CODE' => 'R9',
                    'TOTAL_BAN' => ' ',
                    'RECORD_IDENTITY' => 'RSTRR'
                ]
            ],
            [
                'line' => 'RECCAVALID IN SLEEPER ACCOMMODATION ONLY               ',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'EC',
                    'CF_MKR' => 'C',
                    'EXCEPTION_CODE' => 'A',
                    'DESCRIPTION' => 'VALID IN SLEEPER ACCOMMODATION ONLY               ',
                    'RECORD_IDENTITY' => 'RSTEC'
                ]
            ],
            [
                'line' => 'RCAC0BWI      03300405YYYYNNN',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'CA',
                    'CF_MKR' => 'C',
                    'TICKET_CODE' => '0BW',
                    'CAL_TYPE' => 'I',
                    'ROUTE_CODE' => '     ',
                    'COUNTRY_CODE' => ' ',
                    'DATE_FROM' => '0330',
                    'DATE_TO' => '0405',
                    'DAYS' => 'YYYYNNN',
                    'RECORD_IDENTITY' => 'RSTCA'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' '
        ];
    }
}
