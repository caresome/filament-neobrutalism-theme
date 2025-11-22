# Filament Neobrutalism Theme

A neobrutalism theme for FilamentPHP admin panels.

## Installation

Install the package via Composer:

```bash
composer require caresome/filament-neobrutalism-theme
```

## Usage

Register the plugin in your Filament panel provider:

```php
use Caresome\FilamentNeobrutalism\NeobrutalismePlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugin(NeobrutalismePlugin::make());
}
```

Publish the theme assets:

```bash
php artisan filament:assets
```

The neobrutalism theme will now be active on your Filament admin panel.

## License

MIT. See [LICENSE.md](LICENSE.md) for details.