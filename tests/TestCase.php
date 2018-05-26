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
        $token = getenv('token');
        $this->testUser = '18888888888';
        $app = new Notice($token);
        $this->app = $app;
    }
}
