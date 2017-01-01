<?php
namespace JCoded\AtocDataParser\Test\File\Fare;

use JCoded\AtocDataParser\Test\File\AbstractTest;

/**
 * SupplimentsTest Class
 */
class SupplimentsTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\AtocDataParser\File\Fare\Suppliments();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'RR001211020143110199914112014                                              2****  BB   R  ',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'R',
                    'RULE_NUMBER' => '001',
                    'END_DATE' => '21102014',
                    'START_DATE' => '31101999',
                    'QUOTE_DATE' => '14112014',
                    'TRAIN_UID' => '       ',
                    'TRAIN_UID_DESC' => '                                       ',
                    'FARE_CLASS' => '2',
                    'QUOTA' => '*',
                    'WEEKEND_FIRST' => '*',
                    'SILVER_STANDARD' => '*',
                    'RAILCARD' => '*',
                    'CATERING_CODE' => ' ',
                    'SLEEPER' => ' ',
                    'ACCOM_CLASS' => 'B',
                    'STATUS' => 'B',
                    'RESERVATION_STATUS' => '   ',
                    'SECTORS' => 'R  ',
                    'RECORD_IDENTITY' => 'SUPR'
                ]
            ],
            [
                'line' => 'RA00131122999IICD*',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'A',
                    'RULE_NUMBER' => '001',
                    'END_DATE' => '31122999',
                    'IE_MARKER' => 'I',
                    'CONDITION_TYPE' => 'I',
                    'IE_CODE' => 'CD*',
                    'RECORD_IDENTITY' => 'SUPA'
                ]
            ],
            [
                'line' => 'RM00121102014WSGO',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'M',
                    'RULE_NUMBER' => '001',
                    'END_DATE' => '21102014',
                    'SUPPLEMENT_CODE' => 'WSG',
                    'OM_FLAG' => 'O',
                    'RECORD_IDENTITY' => 'SUPM'
                ]
            ],
            [
                'line' => 'RSZGW311229991202201325041997GWR SLEEPERSUPP RES.SLEEPER     SLE00000     11L1ZAJY00     ',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'S',
                    'SUPPLEMENT_CODE' => 'ZGW',
                    'END_DATE' => '31122999',
                    'START_DATE' => '12022013',
                    'QUOTE_DATE' => '25041997',
                    'DESCRIPTION' => 'GWR SLEEPERSUPP RES.',
                    'SHORT_DESC' => 'SLEEPER     ',
                    'SUPPL_TYPE' => 'SLE',
                    'PRICE' => '00000',
                    'CPF_TICKET_TYPE' => '     ',
                    'MIN_GROUP_SIZE' => '1',
                    'MAX_GROUP_SIZE' => '1',
                    'PER_LEG_OR_DIR' => 'L',
                    'CLASS_TYPE' => '1',
                    'CAPRI_CODE' => 'ZAJ',
                    'SEP_TKT_IND' => 'Y',
                    'RESVN_TYPE' => '00',
                    'SUNDRY_CODE' => '     ',
                    'RECORD_IDENTITY' => 'SUPS'
                ]
            ],
            [
                'line' => 'ROAZA31122999CON',
                'expected' => [
                    'UPDATE_MARKER' => 'R',
                    'RECORD_TYPE' => 'O',
                    'SUPPLEMENT_CODE' => 'AZA',
                    'END_DATE' => '31122999',
                    'OVERRIDDEN_SUPPLEMENT' => 'CON',
                    'RECORD_IDENTITY' => 'SUPO'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' ',
            'RM00121102014WSG',
            'ROAZA31122999CON '
        ];
    }
}
