Laravel Ontraport API
==============

<p align="">
<a href="https://travis-ci.org/wallstreetio/laravel-ontraport"><img src="https://img.shields.io/travis/wallstreetio/laravel-ontraport/master.svg?style=flat-square" alt="Build Status"></img></a>
<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
<a href="https://github.com/wallstreetio/laravel-ontraport/releases"><img src="https://img.shields.io/github/release/wallstreetio/laravel-ontraport.svg?style=flat-square" alt="Latest Version"></img></a>
</p>

Laravel Ontraport API is simply a Laravel bridge for the [Ontraport API](https://github.com/wallstreetio/ontraport).

## Installation

```bash
composer require wallstreetio/laravel-ontraport
```

## Configuration

Add `\Wsio\Ontraport\OntraportServiceProvider` to your providers list in `config/app.php` file.

```php
    'providers' => [
        Wsio\Ontraport\OntraportServiceProvider::class,
    ]
```

Optionally, you may also add the Ontraport facade to your aliases list.

```php
    'aliases' => [
        'OAP' => Wsio\Ontraport\Facade\Ontraport::class,
    ]
```

Publish the configuration file.

```bash
php artisan vendor:publish --provider="\Wsio\Ontraport\OntraportServiceProvider"
```

Add your Ontraport ONTRAPORT_APP_ID and ONTRAPORT_API_KEY to your `.env` file.

```env
ONTRAPORT_APP_ID="your-ontraport-app-id"
ONTRAPORT_API_KEY="your-ontraport-api-key"
```

## Usage

```php
public function index(\Wsio\Ontraport\Ontraport $ontraport)
{
    return $ontraport->contacts->get();
}
```

Or using the facade

```php
public function show($id)
{
    return OAP::contacts()->find($id);
}
```

For full documentation, please refer to the [Ontraport API package](https://github.com/wallstreetio/ontraport).

## License

WallStreet.io Laravel Ontraport API is open-sourced software licensed under [The MIT License (MIT)](LICENSE).
