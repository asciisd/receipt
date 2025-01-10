<?php

namespace Asciisd\Receipt\Providers;

use Illuminate\Support\ServiceProvider;

class ReceiptServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                commands: [
                    // Commands\ReceiptCommand::class,
                ],
            );
        }
    }
}