# Filament Neobrutalism Theme

A neobrutalism theme for FilamentPHP admin panels.

![filament-neobrutalism-theme-thumbnail](https://github.com/user-attachments/assets/779408b3-83fa-41f4-99bd-e343e086f822)

## Installation

Install the package via Composer:

```bash
composer require caresome/filament-neobrutalism-theme
```

## Usage

Register the theme in your Filament panel provider:

```php
use Caresome\FilamentNeobrutalism\NeobrutalismeTheme;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugin(NeobrutalismeTheme::make());
}
```

Publish the theme assets:

```bash
php artisan filament:assets
```

The neobrutalism theme will now be active on your Filament admin panel.

## License

MIT. See [LICENSE.md](LICENSE.md) for details.
