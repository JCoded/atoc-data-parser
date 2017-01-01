<?php
namespace JCoded\AtocDataParser\Test\File\Timetable;

use JCoded\AtocDataParser\Test\File\AbstractTest;

/**
 * UpdateTest Class
 */
class UpdateTest extends AbstractTest
{
    protected function getObject()
    {
        return new \JCoded\AtocDataParser\File\Timetable\Update();
    }
    
    protected function getTestLines()
    {
        return [
            [
                'line' => 'HDTPS.UCFCATE.PD1503060603152151DFTTISB       FA060315121215                    ',
                'expected' => [
                    'RECORD_TYPE' => 'HD',
                    'FILE_MAINFRAME_IDENTITY' => 'TPS.UCFCATE.PD150306',
                    'DATE_OF_EXTRACT' => '060315',
                    'TIME_OF_EXTRACT' => '2151',
                    'CURRENT_FILE_REF' => 'DFTTISB',
                    'LAST_FILE_REF' => '       ',
                    'BLEED_OFF_UPDATE_IND' => 'F',
                    'VERSION' => 'A',
                    'USER_EXTRACT_START_DATE' => '060315',
                    'USER_EXTRACT_END_DATE' => '121215',
                    'SPARE' => '                    ',
                    'RECORD_IDENTITY' => 'CFAHD'
                ]
            ],
            [
                'line' => 'BSNW217201512121512120000010 POO2R80    124605004 EMU    100      B S          P',
                'expected' => [
                    'RECORD_TYPE' => 'BS',
                    'TRANSACTION_TYPE' => 'N',
                    'UNIQUE_ID' => 'W21720',
                    'DATE_RUNS_FROM' => '151212',
                    'DATE_RUNS_TO' => '151212',
                    'DAYS' => '0000010',
                    'BHX' => ' ',
                    'STATUS' => 'P',
                    'CATEGORY' => 'OO',
                    'TRAIN_IDENITY' => '2R80',
                    'HEADCODE' => '    ',
                    'COURSE_IND' => '1',
                    'SERVICE_CODE' => '24605004',
                    'BUSSEC' => ' ',
                    'POWER_TYPE' => 'EMU',
                    'TIMING_LOAD' => '    ',
                    'SPEED' => '100',
                    'OPER_CHARS' => '      ',
                    'CLASS' => 'B',
                    'SLEEPERS' => ' ',
                    'RESERVATIONS' => 'S',
                    'CONNECT_IND' => ' ',
                    'CATERING' => '    ',
                    'SERVICE_BRAND' => '    ',
                    'SPARE' => ' ',
                    'STP_INDICATOR' => 'P',
                    'RECORD_IDENTITY' => 'CFABS'
                ]
            ],
            [
                'line' => 'BX         SEYSE026700                                                          ',
                'expected' => [
                    'RECORD_TYPE' => 'BX',
                    'PREF_TRACT' => '    ',
                    'UIC_CODE' => '     ',
                    'ATOC_CODE' => 'SE',
                    'ATS_CODE' => 'Y',
                    'RSID' => 'SE026700',
                    'DATA_SOURCE' => ' ',
                    'SPARE' => '                                                         ',
                    'RECORD_IDENTITY' => 'CFABX'
                ]
            ],
            [
                'line' => 'LOCHRX    2340 23404  FL     TB                                                 ',
                'expected' => [
                    'RECORD_TYPE' => 'LO',
                    'LOCATION' => 'CHRX    ',
                    'SCHED_DEP_TIME' => '2340 ',
                    'PUBLIC_DEP_TIME' => '2340',
                    'PLATFORM' => '4  ',
                    'LINE' => 'FL ',
                    'ENG_ALLOW' => '  ',
                    'PATH_TIME' => '  ',
                    'ACTIVITY' => 'TB          ',
                    'PERFORM_ALLOW' => '  ',
                    'SPARE' => '                                     ',
                    'RECORD_IDENTITY' => 'CFALO'
                ]
            ],
            [
                'line' => 'LIASHFKY  0101 0105      010101055        T -D                                  ',
                'expected' => [
                    'RECORD_TYPE' => 'LI',
                    'LOCATION' => 'ASHFKY  ',
                    'SCHED_ARR_TIME' => '0101 ',
                    'SCHED_DEP_TIME' => '0105 ',
                    'SCHED_PASS' => '     ',
                    'PUBLIC_ARR_TIME' => '0101',
                    'PUBLIC_DEP_TIME' => '0105',
                    'PLATFORM' => '5  ',
                    'LINE' => '   ',
                    'PATH' => '   ',
                    'ACTIVITY' => 'T -D        ',
                    'ENG_ALLOW' => '  ',
                    'PATH_TIME' => '  ',
                    'PERFORM_ALLOW' => '  ',
                    'SPARE' => '                    ',
                    'RECORD_IDENTITY' => 'CFALI'
                ]
            ],
            [
                'line' => 'CRWRGT    OO2F994907112299820 DMUS   075      S S                  NT490700     ',
                'expected' => [
                    'RECORD_TYPE' => 'CR',
                    'LOCATION' => 'WRGT    ',
                    'CATEGORY' => 'OO',
                    'TRAIN_IDENTITY' => '2F99',
                    'HEADCODE' => '4907',
                    'COURSE_IND' => '1',
                    'SERVICE_CODE' => '12299820',
                    'BUSSEC' => ' ',
                    'POWER_TYPE' => 'DMU',
                    'TIMING_LOAD' => 'S   ',
                    'SPEED' => '075',
                    'OPER_CHARS' => '      ',
                    'CLASS' => 'S',
                    'SLEEPERS' => ' ',
                    'RESERVATIONS' => 'S',
                    'CONNECT_IND' => ' ',
                    'CATERING' => '    ',
                    'SERVICE_BRAND' => '    ',
                    'PREF_TRACT' => '    ',
                    'UIC_CODE' => '     ',
                    'RSID' => 'NT490700',
                    'SPARE' => '     ',
                    'RECORD_IDENTITY' => 'CFACR'
                ]
            ],
            [
                'line' => 'LTDOVERP  0137 01373     TF                                                     ',
                'expected' => [
                    'RECORD_TYPE' => 'LT',
                    'LOCATION' => 'DOVERP  ',
                    'SCHED_ARR_TIME' => '0137 ',
                    'PUBLIC_ARR_TIME' => '0137',
                    'PLATFORM' => '3  ',
                    'PATH' => '   ',
                    'ACTIVITY' => 'TF          ',
                    'SPARE' => '                                           ',
                    'RECORD_IDENTITY' => 'CFALT'
                ]
            ],
            [
                'line' => 'TNA                                                                             ',
                'expected' => [
                    'RECORD_TYPE' => 'TN',
                    'NOTE_TYPE' => 'A',
                    'NOTE' => '                                                                             ',
                    'RECORD_IDENTITY' => 'CFATN'
                ]
            ],
            [
                'line' => 'LNA                                                                             ',
                'expected' => [
                    'RECORD_TYPE' => 'LN',
                    'NOTE_TYPE' => 'A',
                    'NOTE' => '                                                                             ',
                    'RECORD_IDENTITY' => 'CFALN'
                ]
            ],
            [
                'line' => 'AANC30182C313251412141505100000001JJSMCHYNLT  TP                               P',
                'expected' => [
                    'RECORD_TYPE' => 'AA',
                    'TRANSACTION_TYPE' => 'N',
                    'MAIN_TRAIN_UID' => 'C30182',
                    'ASSOCIATED_TRAIN_UID' => 'C31325',
                    'ASSOCIATION_START_DATE' => '141214',
                    'ASSOCIATION_END_DATE' => '150510',
                    'ASSOCIATION_DAYS' => '0000001',
                    'ASSOCIATION_CATEGORY' => 'JJ',
                    'ASSOCIATION_DATE_IND' => 'S',
                    'ASSOCIATION_LOCATION' => 'MCHYNLT',
                    'BASE_LOCATION_SUFFIX' => ' ',
                    'ASSOC_LOCATION_SUFFIX' => ' ',
                    'DIAGRAM_TYPE' => 'T',
                    'ASSOCIATION_TYPE' => 'P',
                    'SPARE' => '                               ',
                    'STP_INDICATOR' => 'P',
                    'RECORD_IDENTITY' => 'CFAAA'
                ]
            ],
            [
                'line' => 'TIABRGVNY00360200AABERGAVENNY               762513002AGVABERGAVENNY             ',
                'expected' => [
                    'RECORD_TYPE' => 'TI',
                    'TIPLOC_CODE' => 'ABRGVNY',
                    'CAPITALS_IDENTIFICATION' => '00',
                    'NALCO' => '360200',
                    'NLC_CHECK_CHARACTER' => 'A',
                    'TPS_DESCRIPTION' => 'ABERGAVENNY               ',
                    'STANOX' => '76251',
                    'PO_MCP_CODE' => '3002',
                    'CRS_CODE' => 'AGV',
                    'CAPRI_DESCRIPTION' => 'ABERGAVENNY     ',
                    'SPARE' => '        ',
                    'RECORD_IDENTITY' => 'CFATI'
                ]
            ],
            [
                'line' => 'TAABCDEFGABABCDEFA                          ABCDEABCDABC                ABCDEFG ',
                'expected' => [
                    'RECORD_TYPE' => 'TA',
                    'TIPLOC_CODE' => 'ABCDEFG',
                    'CAPITALS_IDENTIFICATION' => 'AB',
                    'NALCO' => 'ABCDEF',
                    'NLC_CHECK_CHARACTER' => 'A',
                    'TPS_DESCRIPTION' => '                          ',
                    'STANOX' => 'ABCDE',
                    'PO_MCP_CODE' => 'ABCD',
                    'CRS_CODE' => 'ABC',
                    'CAPRI_DESCRIPTION' => '                ',
                    'NEW_TIPLOC' => 'ABCDEFG',
                    'SPARE' => ' ',
                    'RECORD_IDENTITY' => 'CFATA'
                ]
            ],
            [
                'line' => 'TDABCDEFG                                                                       ',
                'expected' => [
                    'RECORD_TYPE' => 'TD',
                    'TIPLOC_CODE' => 'ABCDEFG',
                    'SPARE' => '                                                                       ',
                    'RECORD_IDENTITY' => 'CFATD'
                ]
            ],
            [
                'line' => 'ZZ                                                                              ',
                'expected' => [
                    'RECORD_TYPE' => 'ZZ',
                    'SPARE' => '                                                                              ',
                    'RECORD_IDENTITY' => 'CFAZZ'
                ]
            ],
        ];
    }
    
    protected function getExceptionLines()
    {
        return [
            ' ',
        ];
    }
}
