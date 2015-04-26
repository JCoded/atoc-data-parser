<?php
namespace JCoded\ATOCFeedParser\Test;

/**
 * FactoryTest Class
 */
class FactoryTest extends \PHPUnit_Framework_TestCase
{
    private $expectations = [
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\Flow',
            'extension' => 'ffl',
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\Flow',
            'extension' => 'ffl'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\StationCluster',
            'extension' => 'fsc'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\NonDeliverableFares',
            'extension' => 'ndf'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\NonDeliverableFaresOverride',
            'extension' => 'nfo'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\NonStandardDiscounts',
            'extension' => 'fns'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\TicketTypes',
            'extension' => 'tty'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\TicketValidity',
            'extension' => 'tvl'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\JourneySegments',
            'extension' => 'tjs'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\TicketPublication',
            'extension' => 'tpb'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\PrintFormats',
            'extension' => 'tpn'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\ClassLegends',
            'extension' => 'tcl'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\RailRovers',
            'extension' => 'trr'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\Package',
            'extension' => 'tpk'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\Suppliments',
            'extension' => 'sup'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\Railcards',
            'extension' => 'rlc'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\RailcardMinimumFare',
            'extension' => 'rcm'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\StatusDiscounts',
            'extension' => 'dis'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\RoundingRules',
            'extension' => 'frr'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\Restrictions',
            'extension' => 'rst'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\Locations',
            'extension' => 'loc'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\Routes',
            'extension' => 'rte'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\Tocs',
            'extension' => 'toc'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\TocSpecificTickets',
            'extension' => 'tsp'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Fare\AdvancePurchaseTickets',
            'extension' => 'tap'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Timetable\Full',
            'extension' => 'mca'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Timetable\Update',
            'extension' => 'cfa'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Timetable\ManualTrains',
            'extension' => 'ztr'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Timetable\FixedLinks',
            'extension' => 'flf'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Timetable\AdditionalFixedLinks',
            'extension' => 'alf'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Timetable\MasterStationNames',
            'extension' => 'msn'
        ],
        [
            'class' => 'JCoded\ATOCFeedParser\File\Timetable\TocSpecificInterchangeTime',
            'extension' => 'tsi'
        ]
    ];
    
    public function testGetParserFakeFile()
    {
        $obj = new \JCoded\ATOCFeedParser\Factory();
        
        $this->setExpectedException('JCoded\ATOCFeedParser\InvalidFileException');
        
        $obj->getParser('fakefile.txt');
    }
    
    public function testGetParser()
    {
        $obj = new \JCoded\ATOCFeedParser\Factory();
        
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
