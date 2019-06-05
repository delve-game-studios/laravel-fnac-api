# Laravel Fnac

This package is based on [Fnac SDK](https://github.com/milan-vugrinchev/fnacapiclient) written by Fnac Team and edited to become a composer package by [me](https://github.com/milan-vugrinchev).

This package will organize all the configuration according to laravel and make you use the SDK with out doing any exceptional work or configurations.

## Getting Started

Follow the instruction to install and use this package.

### Installing

Edit composer.json in your project and add:
```json
...
"repositories": [
	{
		"type": "vcs",
		"url" : "https://github.com/milan-vugrinchev/fnacapiclient"
	}
]
...
```

Add `milan-vugrinchev/laravel-fnac-api` to your composer file via the composer require command:

```bash
$ composer require milan-vugrinchev/laravel-fnac-api
```

Register the service provider by adding it to the providers key in config/app.php. Also register the facade by adding it to the aliases key in config/app.php.

```php
'providers' => [
    ...
    Vugrinchev\LaravelFnac\FnacServiceProvider::class,
],

'aliases' => [
    ...
    'Fnac' => Vugrinchev\LaravelFnac\Facade\Fnac::class,
]
```

Next to get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="Vugrinchev\LaravelFnac\FnacServiceProvider"
```
This will create a config/Fnac.php file in your app that you can modify to set your configuration.