<?php

namespace Tests\Day1;

use HomeWork1\Revers;
use PHPUnit\Framework\TestCase;

class ReversedTest extends TestCase
{
    /** @var Revers */
    private $reverse;

    public function setUp()
    {
        $this->reverse = new Revers();
    }

    public function test_it_reverse_world()
    {
        $this->assertEquals('dlrow', $this->reverse->solution('world'));
    }

    public function test_it_reverse_hello_world()
    {
        $this->assertEquals('dlrow olleh', $this->reverse->solution('hello world'));
    }
}
