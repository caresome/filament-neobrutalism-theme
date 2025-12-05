# Changelog

All notable changes to `filament-neobrutalism-theme` will be documented in this file.

## 1.1.0 - 2025-12-06

### Added

-   Added `--neo-scale` CSS variable to support global UI scaling (configurable via `customize(['scale' => ...])`).
-   Added `--neo-outline-width` and `--neo-outline-offset` CSS variables for consistent focus state customization.
-   Added `--neo-animation-duration-loading` CSS variable to control loading animation speed.

### Fixed

-   Fixed Select component options being clipped inside Sections by removing `overflow: hidden` from section containers.

### Changed

-   **Breaking Visual Change**: Completely redesigned Toggle/Switch inputs to align with the Neo-Brutalism aesthetic (boxy shape, thick borders, hard shadows).
-   **Breaking Visual Change**: Redesigned Notification styling to feature hard shadows, bold uppercase titles, and distinct status colors.
-   Standardized focus outlines across all interactive elements using new outline variables.
-   Updated Repeater, Table, and Global Search components to consistently use `--neo-border-width`.
-   Refined typography weights by introducing and applying `--neo-font-weight-normal` and `--neo-font-weight-semibold`.
-   Improved visuals for Sidebar items and Repeater headers.

## 1.0.2 - 2025-11-25

### Fixed

-   Fixed theme applying globally to all Filament panels instead of only registered panels
-   Fixed topbar logo and navigation colors not using proper CSS variables

## 1.0.1 - 2025-11-23

### Fixed

-   Fixed incomplete neo-brutalism styling for table elements

## 1.0.0 - 2025-11-23

### Added

-   Initial release of Filament Neobrutalism Theme
-   Neobrutalism design system for Filament PHP admin panels
-   Complete CSS theme with bold borders, shadows, and brutalist aesthetics
-   Easy installation via Composer
-   Automatic asset registration using FilamentAsset
-   Simple plugin registration with `NeobrutalismeTheme::make()`
-   `customize()` method for easy CSS variable customization
-   Auto-prefixing of CSS variables with `--neo-` for cleaner API
-   Support for custom CSS variables and dynamic values via Closures
-   Compatible with Filament v4.x
