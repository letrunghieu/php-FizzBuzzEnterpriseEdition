<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Writer;

use DQNEO\FizzBuzzEnterpriseEdition\Value\StringValue;

class StderrWriter implements WriterInterface
{
    public function write($string)
    {
        fwrite(STDERR, $string);
    }

    public function writeln($string)
    {
        fwrite(STDERR, $string . StringValue::NEW_LINE);
    }
}
