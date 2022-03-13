<?php

namespace App\Tests\Basic;

use App\Base\BasicExample;
use PHPUnit\Framework\TestCase;

class BasicExampleTest extends TestCase
{
    public function testAnything(): void
    {
        $someTest = new BasicExample();

        $this->assertTrue(true);
        $this->assertEquals(1, $someTest->someTest());
    }
}
