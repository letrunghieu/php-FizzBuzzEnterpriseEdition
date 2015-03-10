<?php
require_once __DIR__ . '/FizzBuzz.php';
use Acme\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function testNew()
    {
        $fb = new FizzBuzz(1,1,1);
        $this->assertInstanceOf("Acme\\FizzBuzz", $fb);
    }

    public function testRun1()
    {
        $fb = new FizzBuzz(1,3,5);
        $ret = $fb->run(1);
        $this->assertEquals("1\n", $ret);
    }
}
