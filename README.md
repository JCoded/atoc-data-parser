ATOC Data Parser
======

This package allows you to parse the timetable and fares files contained within the ATOC data download available at http://data.atoc.org/data-download

It does not parse files that are identified as not maintained in the ATOC specification document.

## Installation

You can install this package through Composer. Add the following line to your composer.json `require` object:

```
"jcoded/atoc-data-parser": "dev-master"
```

## Record identity

A field has been added to each record to help easily identify it, when using a Repository service for example. From the record identity it is possible to map the record to a table in your database. The record identity is constructed from the file extension followed by the `RECORD_TYPE` if present.

## Field naming

To create information that is easier to consume some field names vary from the specification to keep them uniform, the table below details the field name to expect from this parser and which field that relates to in the specification.

| Parser field   | Timetable data | Fares data | Description                                  |
|----------------|----------------|------------|----------------------------------------------|
|RECORD_TYPE     |Record identity |RECORD_TYPE |Optionally included in the data specification |
|RECORD_IDENTITY |                |            |The identity given by this parser             |


## Usage

To get a parser object use the Factory based on the filename being parsed:

```php
$filename = "RJFAF570.NDF";
$factory = new \JCoded\ATOCFeedParser\Factory();
$parser = $factory->getParser($filename);
```

Then use the parser object to loop through each of the lines of the file. 

```php
while (($line = fgets($stream)) !== false) {
    //Skip the comments
    if (strpos($line, '/!!') !== false) {
        continue;
    }

    //Get the data
    try {
        $data = $parser->parseLine($line);

        //Do something with the data

    } catch (\JCoded\ATOCFeedParser\IncompatibleLineException $ex) {
        //Handle exception
    }
}
```

The parser will return an associative array with a key equal to the field name in the specification document, see the example below. The specification documents can be found on the ATOC site.

```php
[
    'TICKET_CODE' => '0AW',
    'RESTRICTION_CODE' => 'SV',
    'RESTRICTION_FLAG' => '0',
    'TOC_ID' => 'SN',
    'END_DATE' => '31122999',
    'START_DATE' => '30042013',
    'CHECK_TYPE' => '2',
    'AP_DATA' => '00000001',
    'BOOKING_TIME' => '1800',
    'RECORD_IDENTITY' => 'TAP'
]
```

### Dependency injection

There are a some interfaces to use when injecting dependencies into your classes. 

The interface for the Factory:

```php
\JCoded\ATOCFeedParser\ParserFactoryInterface
```

The interface for the returned parser:

```php
\JCoded\ATOCFeedParser\File\ParserInterface
```
