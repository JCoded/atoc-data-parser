<?php
namespace JCoded\AtocDataParser\File\Fare;

use JCoded\AtocDataParser\File\AbstractMultiRecordFileParser;

/**
 * Suppliments Class
 */
class Suppliments extends AbstractMultiRecordFileParser
{
    /**
     * Get the record type for the line
     * 
     * @param string $line
     * 
     * @return string
     */
    protected function recordType($line)
    {
        return substr($line, 1, 1);
    }
    
    /**
     * Get the map for the file
     * 
     * @return array
     */
    protected function getMap()
    {
        return [
            'R' => [
                'RECORD_IDENTITY' => 'SUPR',
                'DATA_MAP' => [
                    'UPDATE_MARKER' => 1,
                    'RECORD_TYPE' => 1,
                    'RULE_NUMBER' => 3,
                    'END_DATE' => 8,
                    'START_DATE' => 8,
                    'QUOTE_DATE' => 8,
                    'TRAIN_UID' => 7,
                    'TRAIN_UID_DESC' => 39,
                    'FARE_CLASS' => 1,
                    'QUOTA' => 1,
                    'WEEKEND_FIRST' => 1,
                    'SILVER_STANDARD' => 1,
                    'RAILCARD' => 1,
                    'CATERING_CODE' => 1,
                    'SLEEPER' => 1,
                    'ACCOM_CLASS' => 1,
                    'STATUS' => 1,
                    'RESERVATION_STATUS' => 3,
                    'SECTORS' => 3
                ]
            ],
            'A' => [
                'RECORD_IDENTITY' => 'SUPA',
                'DATA_MAP' => [
                    'UPDATE_MARKER' => 1,
                    'RECORD_TYPE' => 1,
                    'RULE_NUMBER' => 3,
                    'END_DATE' => 8,
                    'IE_MARKER' => 1,
                    'CONDITION_TYPE' => 1,
                    'IE_CODE' => 3
                ]
            ],
            'M' => [
                'RECORD_IDENTITY' => 'SUPM',
                'DATA_MAP' => [
                    'UPDATE_MARKER' => 1,
                    'RECORD_TYPE' => 1,
                    'RULE_NUMBER' => 3,
                    'END_DATE' => 8,
                    'SUPPLEMENT_CODE' => 3,
                    'OM_FLAG' => 1
                ]
            ],
            'S' => [
                'RECORD_IDENTITY' => 'SUPS',
                'DATA_MAP' => [
                    'UPDATE_MARKER' => 1,
                    'RECORD_TYPE' => 1,
                    'SUPPLEMENT_CODE' => 3,
                    'END_DATE' => 8,
                    'START_DATE' => 8,
                    'QUOTE_DATE' => 8,
                    'DESCRIPTION' => 20,
                    'SHORT_DESC' => 12,
                    'SUPPL_TYPE' => 3,
                    'PRICE' => 5,
                    'CPF_TICKET_TYPE' => 5,
                    'MIN_GROUP_SIZE' => 1,
                    'MAX_GROUP_SIZE' => 1,
                    'PER_LEG_OR_DIR' => 1,
                    'CLASS_TYPE' => 1,
                    'CAPRI_CODE' => 3,
                    'SEP_TKT_IND' => 1,
                    'RESVN_TYPE' => 2,
                    'SUNDRY_CODE' => 5
                ]
            ],
            'O' => [
                'RECORD_IDENTITY' => 'SUPO',
                'DATA_MAP' => [
                    'UPDATE_MARKER' => 1,
                    'RECORD_TYPE' => 1,
                    'SUPPLEMENT_CODE' => 3,
                    'END_DATE' => 8,
                    'OVERRIDDEN_SUPPLEMENT' => 3
                ]
            ],
        ];
    }
}
