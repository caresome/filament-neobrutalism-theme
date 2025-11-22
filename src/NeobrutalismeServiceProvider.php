<?php

namespace Caresome\FilamentNeobrutalism;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NeobrutalismeServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-neobrutalism';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('neobrutalism-theme', __DIR__.'/../resources/css/theme.css'),
        ], package: 'caresome/filament-neobrutalism-theme');
    }
}
