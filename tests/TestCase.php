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
        $token = '';
        $this->testUser = '';
        $app = new Notice($token);
        $this->app = $app;
    }
}
