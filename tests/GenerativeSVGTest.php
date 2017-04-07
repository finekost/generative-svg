<?php

// Run tests on WIN: .\vendor\bin\phpunit tests

use PHPUnit\Framework\TestCase;
use \finekost\GenerativeSVG\GenerativeSVG;

class GenerativeSVGTest extends TestCase
{
  public function testPhpunit()
  {
    $SUT = new GenerativeSVG();
    $this->assertEquals(false, $SUT->test());
  }
}
