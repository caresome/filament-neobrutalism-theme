<?php

namespace Caresome\FilamentNeobrutalism;

use Closure;
use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Facades\FilamentAsset;

class NeobrutalismeTheme implements Plugin
{
    protected array $customizations = [];

    public function getId(): string
    {
        return 'filament-neobrutalism';
    }

    public function customize(array|Closure $variables): static
    {
        $this->customizations[] = $variables;

        return $this;
    }

    protected function getCustomizations(): array
    {
        $variables = [];

        foreach ($this->customizations as $set) {
            $set = is_callable($set) ? $set() : $set;

            foreach ($set as $key => $value) {
                $cssVar = str_starts_with($key, '--') ? substr($key, 2) : "neo-{$key}";
                $variables[$cssVar] = $value;
            }
        }

        return $variables;
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([])
            ->pages([])
            ->widgets([]);
    }

    public function boot(Panel $panel): void
    {
        if ($customizations = $this->getCustomizations()) {
            FilamentAsset::registerCssVariables($customizations, 'caresome/filament-neobrutalism-theme');
        }
    }

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
