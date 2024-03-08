# Timber Dump Extension

![Packagist Downloads](https://img.shields.io/packagist/dt/hellonico/timber-dump-extension)
![Packagist Version](https://img.shields.io/packagist/v/hellonico/timber-dump-extension)

Symfony VarDumper for Timber.

## Install

```bash
composer require hellonico/timber-dump-extension
```

## Usage

```twig
{{ dump(foo) }}
```

Note that this extension will only be enabled if `WP_DEBUG` is set to `true`.
