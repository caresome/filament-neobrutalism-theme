# Changelog

All notable changes to `filament-neobrutalism-theme` will be documented in this file.

## 1.0.2 - 2025-11-25

### Fixed
- Fixed theme applying globally to all Filament panels instead of only registered panels
- Fixed topbar logo and navigation colors not using proper CSS variables

## 1.0.1 - 2025-11-23

### Fixed
- Fixed incomplete neo-brutalism styling for table elements

## 1.0.0 - 2025-11-23

### Added
- Initial release of Filament Neobrutalism Theme
- Neobrutalism design system for Filament PHP admin panels
- Complete CSS theme with bold borders, shadows, and brutalist aesthetics
- Easy installation via Composer
- Automatic asset registration using FilamentAsset
- Simple plugin registration with `NeobrutalismeTheme::make()`
- `customize()` method for easy CSS variable customization
- Auto-prefixing of CSS variables with `--neo-` for cleaner API
- Support for custom CSS variables and dynamic values via Closures
- Compatible with Filament v4.x
