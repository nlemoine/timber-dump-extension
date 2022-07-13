# Timber Dump Extension

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

## Extra

You may be interested in https://github.com/nlemoine/var-dumper-configurator which provide a simple to configure dumper options.
