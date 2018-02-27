<?php

use PHPUnit\Framework\TestCase;

/**
 * HttpTest.
 */
class HttpTest extends TestCase
{
    /**
     * Test check.
     *
     * @dataProvider urlsProvider
     */
    public function testCheck($url, $expected)
    {
        $httpChecker = new \Cowlab\Checker\Http();
        $this->assertEquals($httpChecker->check($url), $expected);
    }

    /**
     * urlsProvider.
     *
     * @return array
     */
    public function urlsProvider()
    {
        return [
            ['https://github.com/cowlab-lugo', true],
            ['https://sond3.com', true],
            ['https://nonexists.github.com/cowlab-lugo', false],
        ];
    }
}
