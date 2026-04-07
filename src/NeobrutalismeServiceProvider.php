<?php

declare(strict_types=1);

namespace Caresome\FilamentNeobrutalism;

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

    public function packageBooted(): void {}
}
