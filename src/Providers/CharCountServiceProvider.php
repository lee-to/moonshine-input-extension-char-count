<?php

declare(strict_types=1);

namespace Leeto\InputExtensionCharCount\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;

final class CharCountServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blade::anonymousComponentPath(__DIR__ . '/../../resources/views', 'char-count');
    }
}
