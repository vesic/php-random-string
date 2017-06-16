<?php

use PHPUnit\Framework\TestCase;

use \Vesic\RandomString\RandomString;

class RandomStringTest extends TestCase {
    
    public function testStringIsEmpty() {
        $randomString = RandomString::getChars();
        
        $this->assertNotEmpty($randomString);
    }
        
    public function testDefaultStringLength() {
        $randomString = RandomString::getChars();
        
        $this->assertEquals(32, strlen($randomString));
    }
    
    public function testProvidedStringLength() {
        $randomString = RandomString::getChars(64);
        
        $this->assertEquals(64, strlen($randomString));
    }
    
}