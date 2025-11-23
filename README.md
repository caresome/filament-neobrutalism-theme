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

## Customization

You can customize the theme's CSS variables using the `customize()` method:

```php
->plugin(
    NeobrutalismeTheme::make()
        ->customize([
            'border-width' => '6px',
            'border-width-thick' => '8px',
            'radius-md' => '1.5rem',
            'shadow-offset-lg' => '10px',
        ])
)
```

### Available CSS Variables

The theme provides the following customizable CSS variables (prefix `--neo-` is automatically added):

**Borders:**
- `border-width` - Default border width (default: `4px`)
- `border-width-thick` - Thick border width (default: `6px`)

**Border Radius:**
- `radius-sm` - Small radius (default: `0.5rem`)
- `radius-md` - Medium radius (default: `1rem`)
- `radius-lg` - Large radius (default: `1.5rem`)
- `radius-xl` - Extra large radius (default: `2rem`)

**Shadows:**
- `shadow-offset-sm` - Small shadow offset (default: `4px`)
- `shadow-offset-md` - Medium shadow offset (default: `6px`)
- `shadow-offset-lg` - Large shadow offset (default: `8px`)
- `shadow-offset-xl` - Extra large shadow offset (default: `12px`)

**Typography:**
- `font-family-base` - Base font family
- `font-family-heading` - Heading font family
- `font-size-base` - Base font size
- `line-height-base` - Base line height

### Custom CSS Variables

You can also add completely custom CSS variables by prefixing them with `--`:

```php
->customize([
    '--my-custom-color' => '#ff0000',
    '--my-custom-spacing' => '2rem',
])
```

### Dynamic Values

Use closures for dynamic values:

```php
->customize(fn() => [
    'border-width' => auth()->user()->preferences['border_width'] ?? '4px',
])
```

## License

MIT. See [LICENSE.md](LICENSE.md) for details.
