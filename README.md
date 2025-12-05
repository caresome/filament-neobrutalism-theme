# Filament Neobrutalism Theme

A bold, brutalist design system for FilamentPHP admin panels. Transform your Filament interface with thick borders, pronounced shadows, and geometric aesthetics inspired by the neobrutalism design movement.

![filament-neobrutalis-theme](https://github.com/user-attachments/assets/3d81b99a-67d0-44b0-b5ad-7b77cee6399b)

## Table of Contents

-   [Features](#features)
-   [Screenshots](#screenshots)
-   [Installation](#installation)
-   [Usage](#usage)
-   [Customization](#customization)
    -   [Available CSS Variables](#available-css-variables)
    -   [Custom CSS Variables](#custom-css-variables)
    -   [Dynamic Values](#dynamic-values)
-   [Examples](#examples)
-   [License](#license)

## Features

-   🎨 **Bold Neobrutalism Design** - Thick borders, pronounced shadows, and geometric shapes
-   ⚡ **Zero Configuration** - Works out of the box with sensible defaults
-   🎛️ **Fully Customizable** - Override any CSS variable with the fluent `customize()` API
-   🌓 **Dark Mode Support** - Seamlessly adapts to Filament's dark mode
-   🔌 **Easy Integration** - Single line plugin registration
-   📦 **Lightweight** - Pure CSS with no JavaScript dependencies
-   🚀 **Performance Optimized** - Minimal CSS with CSS variables for dynamic theming
-   ✅ **Filament v4 Compatible** - Built specifically for Filament v4.x

## Screenshots

### Authentication Pages

![filament-neobrutalism-authentication-demo](https://github.com/user-attachments/assets/6384e4d1-10be-4d10-bf25-830476b3bc31)

### Dashboard

![filament-neobrutalism-dashboard-demo](https://github.com/user-attachments/assets/9eb22e81-d5be-4b40-9440-d0ea2717682a)

### Tables & Resource Lists

![filament-neobrutalism-list-page-demo](https://github.com/user-attachments/assets/6d0588e6-c98a-4ca8-ae3e-d04b0a5ba0e0)

### Forms & Resource Pages

![filament-neobrutalism-create-page-demo](https://github.com/user-attachments/assets/32c0445d-e35b-4bf1-ae6e-30a6a61b055e)

### Modals

![filament-neobrutalism-modal-demo](https://github.com/user-attachments/assets/c369793b-47ae-41f2-91ff-6affaf8938bb)

### Theme Customization

![filament-neobrutalism-theme-customization](https://github.com/user-attachments/assets/861ab27b-a62c-43a3-ac0a-e5f4ac8253c1)

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

-   `border-width` - Default border width (default: `2px`)
-   `border-width-thick` - Thick border width (default: `3px`)

**Border Radius:**

-   `radius-sm` - Small radius (default: `0.375rem`)
-   `radius-md` - Medium radius (default: `0.5rem`)
-   `radius-lg` - Large radius (default: `0.75rem`)
-   `radius-xl` - Extra large radius (default: `1rem`)

**Shadows:**

-   `shadow-offset-sm` - Small shadow offset (default: `2px`)
-   `shadow-offset-md` - Medium shadow offset (default: `3px`)
-   `shadow-offset-lg` - Large shadow offset (default: `4px`)
-   `shadow-offset-xl` - Extra large shadow offset (default: `6px`)

**Typography:**

-   `font-weight-bold` - Bold font weight (default: `700`)
-   `font-weight-extrabold` - Extra bold font weight (default: `800`)
-   `font-weight-black` - Black font weight (default: `900`)
-   `letter-spacing-tight` - Tight letter spacing (default: `-0.03em`)
-   `letter-spacing-normal` - Normal letter spacing (default: `-0.025em`)
-   `letter-spacing-wide` - Wide letter spacing (default: `0.03em`)
-   `letter-spacing-wider` - Wider letter spacing (default: `0.05em`)

**Transitions:**

-   `transition-duration` - Transition duration (default: `150ms`)

**Spacing:**

-   `spacing-xs` - Extra small spacing (default: `0.25rem`)
-   `spacing-sm` - Small spacing (default: `0.5rem`)
-   `spacing-md` - Medium spacing (default: `0.75rem`)
-   `spacing-lg` - Large spacing (default: `1rem`)
-   `spacing-xl` - Extra large spacing (default: `1.5rem`)

**Scale:**

-   `scale` - UI scaling factor (default: `1`)

### Custom CSS Variables

You can also add completely custom CSS variables by prefixing them with `--`:

```php
->customize([
    '--my-custom-color' => '#ff0000',
    '--my-custom-spacing' => '2rem',
])
```

### Dynamic Values

Use closures for dynamic values based on user preferences or application state:

```php
->customize(fn() => [
    'border-width' => auth()->user()->preferences['border_width'] ?? '4px',
    'shadow-offset-md' => session('theme_shadow_size', '6px'),
])
```

## Examples

### Subtle Neobrutalism

```php
->plugin(
    NeobrutalismeTheme::make()
        ->customize([
            'border-width' => '2px',
            'shadow-offset-md' => '3px',
            'radius-md' => '0.5rem',
        ])
)
```

### Bold & Dramatic

```php
->plugin(
    NeobrutalismeTheme::make()
        ->customize([
            'border-width' => '6px',
            'border-width-thick' => '8px',
            'shadow-offset-md' => '10px',
            'shadow-offset-lg' => '12px',
            'radius-md' => '1.5rem',
        ])
)
```

### Minimal & Sharp

```php
->plugin(
    NeobrutalismeTheme::make()
        ->customize([
            'border-width' => '3px',
            'shadow-offset-md' => '4px',
            'radius-sm' => '0.25rem',
            'radius-md' => '0.375rem',
            'radius-lg' => '0.5rem',
        ])
)
```

## License

MIT. See [LICENSE.md](LICENSE.md) for details.
