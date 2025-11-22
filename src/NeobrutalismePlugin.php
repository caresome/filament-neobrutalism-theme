<?php

namespace Caresome\FilamentNeobrutalism;

use Filament\Contracts\Plugin;
use Filament\Panel;

class NeobrutalismePlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-neobrutalism';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([])
            ->pages([])
            ->widgets([]);
    }

    public function boot(Panel $panel): void {}

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static */
        return filament(app(static::class)->getId());
    }
}
