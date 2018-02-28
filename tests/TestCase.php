<?php

namespace Draguo\Ding\Tests;

use Draguo\Ding\Notice;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCase extends PHPUnitTestCase
{
    protected $app;
    protected $testUser;

    public function __construct()
    {
        $token = '4dc5ab05357974596a70ea5b34f62bb05b62ead9f299de556f02eeb7fca9c37c';
        $this->testUser = '18888888888';
        $app = new Notice($token);
        $this->app = $app;
    }
}
