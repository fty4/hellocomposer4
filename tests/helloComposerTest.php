<?php
use PHPUnit\Framework\TestCase;
use fty4\helloC\helloComposer;

require_once 'src/helloComposer.php';

/**
 * helloComposer test case.
 */
class helloComposerTest extends TestCase
{
    /**
     * Tests helloComposer::say()
     */
    public function testSay()
    {
        $this->assertEquals("hello composer", helloComposer::say());
    }
}

