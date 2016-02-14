<?php

namespace Cli;

class Test
{
    private $test = "";

    function __construct($test = null)
    {
        $this->test = $test;
    }

    public function echoTest()
    {
        echo $this->test . "\n\n";
    }

}



$test = new Test("Hello world from CLI");

$test->echoTest();