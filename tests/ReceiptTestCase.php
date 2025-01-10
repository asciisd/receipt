<?php

namespace Asciisd\Receipt\Tests;

use Asciisd\Receipt\Providers\ReceiptServiceProvider;
use Orchestra\Testbench\TestCase;

class ReceiptTestCase extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            ReceiptServiceProvider::class,
        ];
    }
}