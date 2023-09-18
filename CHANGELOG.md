# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).


## [0.4.1-beta]

### Fixed
- Bug in Builder/Form where option was not being correctly selected.
- Removed irrelevant content from core_method_reference.md.

### Changed
- Modified the parameter order for Builder/Form methods:`select`, `toggle`, `inputCheckbox`, `inputRadio` parameters.
    The `$compare` parameter now comes before `$required` to keep more commonly used parameters first.

## [0.4.0-beta]
### Added
- New documentation added.
- Additional Builders.
- Additional examples.

### Changed
- Default values for functions using the `$child` parameter have been changed from `true` to `false`. To open a div you must now call `$h->div(true);` and to close a div you can call `$h->div(false)` or `$h->div()`. It was found that setting the default to false, eliminates a large number of keystrokes over the other way around since many times an opening tag will have additional parameters, forcing you to type `true` anyway.
- Readme documentation updated.
- Class function documentation updated.
- inputTextarea() renamed to textarea().
- Form elements (input, textarea, select, etc.) removed from Components class and placed into its own Builder class.


## [0.3.0-alpha]
### Added
- Additional cleanup functions to Builder\Table.

### Fixed
- Several bugs.

## [0.2.0-alpha]
### Added
- Added Builder\Stylesheet.
- Added Builder\Table.
- Added Builder\Bulletlist.

## [0.1.0-alpha]
### Added
- Initial creation.