<?php

namespace Sawirricardo\LaravelAmantelepower\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Sawirricardo\LaravelAmantelepower\LaravelAmantelepowerServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelAmantelepowerServiceProvider::class,
        ];
    }
}
