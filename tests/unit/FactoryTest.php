<?php
namespace JCoded\AtocDataParser\Test;

/**
 * FactoryTest Class
 */
class FactoryTest extends \PHPUnit_Framework_TestCase
{
    private $expectations = [
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\Flow',
            'extension' => 'ffl',
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\Flow',
            'extension' => 'ffl'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\StationCluster',
            'extension' => 'fsc'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\NonDeliverableFares',
            'extension' => 'ndf'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\NonDeliverableFaresOverride',
            'extension' => 'nfo'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\NonStandardDiscounts',
            'extension' => 'fns'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\TicketTypes',
            'extension' => 'tty'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\TicketValidity',
            'extension' => 'tvl'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\JourneySegments',
            'extension' => 'tjs'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\TicketPublication',
            'extension' => 'tpb'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\PrintFormats',
            'extension' => 'tpn'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\ClassLegends',
            'extension' => 'tcl'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\RailRovers',
            'extension' => 'trr'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\Package',
            'extension' => 'tpk'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\Suppliments',
            'extension' => 'sup'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\Railcards',
            'extension' => 'rlc'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\RailcardMinimumFare',
            'extension' => 'rcm'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\StatusDiscounts',
            'extension' => 'dis'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\RoundingRules',
            'extension' => 'frr'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\Restrictions',
            'extension' => 'rst'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\Locations',
            'extension' => 'loc'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\Routes',
            'extension' => 'rte'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\Tocs',
            'extension' => 'toc'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\TocSpecificTickets',
            'extension' => 'tsp'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Fare\AdvancePurchaseTickets',
            'extension' => 'tap'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Timetable\Full',
            'extension' => 'mca'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Timetable\Update',
            'extension' => 'cfa'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Timetable\ManualTrains',
            'extension' => 'ztr'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Timetable\FixedLinks',
            'extension' => 'flf'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Timetable\AdditionalFixedLinks',
            'extension' => 'alf'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Timetable\MasterStationNames',
            'extension' => 'msn'
        ],
        [
            'class' => 'JCoded\AtocDataParser\File\Timetable\TocSpecificInterchangeTime',
            'extension' => 'tsi'
        ]
    ];
    
    public function testGetParserFakeFile()
    {
        $obj = new \JCoded\AtocDataParser\Factory();
        
        $this->setExpectedException('JCoded\AtocDataParser\InvalidFileException');
        
        $obj->getParser('fakefile.txt');
    }
    
    public function testGetParser()
    {
        $obj = new \JCoded\AtocDataParser\Factory();
        
        foreach ($this->expectations as $expectation) {
            $expected = $expectation['class'];
            
            $filename = 'filename.' . $expectation['extension'];
            
            $resultLower = $obj->getParser(strtolower($filename));
            $resultUpper = $obj->getParser(strtoupper($filename));

            $this->assertEquals($expected, get_class($resultLower));
            $this->assertEquals($expected, get_class($resultUpper));
        }
    }
}
