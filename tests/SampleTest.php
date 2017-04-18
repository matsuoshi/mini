<?php
use PHPUnit\Framework\TestCase;
use MyApp\Sample;

class SampleTest extends TestCase
{
    public function testExample()
    {
        $sample = new Sample();
        $this->assertTrue($sample->example(false));
        $this->assertFalse($sample->example(true));
    }
}
