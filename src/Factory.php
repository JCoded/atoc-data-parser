<?php
namespace JCoded\AtocDataParser;

use JCoded\AtocDataParser\InvalidFileException;

/**
 * Factory Class
 */
class Factory implements ParserFactoryInterface
{
    /**
     * File extensions mapped to parser class
     * 
     * @var array 
     */
    private $parserMap = [
        'ffl' => 'Fare\\Flow',
        'fsc' => 'Fare\\StationCluster',
        'ndf' => 'Fare\\NonDeliverableFares',
        'nfo' => 'Fare\\NonDeliverableFaresOverride',
        'fns' => 'Fare\\NonStandardDiscounts',
        'tty' => 'Fare\\TicketTypes',
        'tvl' => 'Fare\\TicketValidity',
        'tjs' => 'Fare\\JourneySegments',
        'tpb' => 'Fare\\TicketPublication',
        'tpn' => 'Fare\\PrintFormats',
        'tcl' => 'Fare\\ClassLegends',
        'trr' => 'Fare\\RailRovers',
        'tpk' => 'Fare\\Package',
        'sup' => 'Fare\\Suppliments',
        'rlc' => 'Fare\\Railcards',
        'rcm' => 'Fare\\RailcardMinimumFare',
        'dis' => 'Fare\\StatusDiscounts',
        'frr' => 'Fare\\RoundingRules',
        'rst' => 'Fare\\Restrictions',
        'loc' => 'Fare\\Locations',
        'rte' => 'Fare\\Routes',
        'toc' => 'Fare\\Tocs',
        'tsp' => 'Fare\\TocSpecificTickets',
        'tap' => 'Fare\\AdvancePurchaseTickets',
        'mca' => 'Timetable\\Full',
        'cfa' => 'Timetable\\Update',
        'ztr' => 'Timetable\\ManualTrains',
        'flf' => 'Timetable\\FixedLinks',
        'alf' => 'Timetable\\AdditionalFixedLinks',
        'msn' => 'Timetable\\MasterStationNames',
        'tsi' => 'Timetable\\TocSpecificInterchangeTime',
    ];
    
    /**
     * Get a parser instance for the file
     * 
     * @param string $filename
     * 
     * @throws \JCoded\AtocDataParser\InvalidFileException
     * 
     * @return \JCoded\AtocDataParser\File\ParserInterface
     */
    public function getParser($filename)
    {
        //Get the extension
        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        
        if ( !array_key_exists($extension, $this->parserMap) ) {
            throw new InvalidFileException('No parser for file: ' . $filename);
        }
        
        //Return a new instance
        $class = __NAMESPACE__ . '\\File\\' . $this->parserMap[$extension];
        
        return new $class();
    }
}
