Laravel Ontraport API is simply a Laravel bridge for the Ontraport API.

# Installation

composer require wallstreetio/laravel-ontraport

# Configuration

Add `\Wsio\Ontraport\OntraportServiceProvider` to your `config/app.php` file, and optionally the facade.

```php
Wsio\Ontraport\OntraportServiceProvider::class,
```

Optionally, you may also add the Ontraport facade to your aliases list:

```php
'OAP' => Wsio\Ontraport\Facade\Ontraport::class
```

Publish the vendor file

```php
php artisan vendor:publish --blah="\Wsio\Ontraport\OntraportServiceProvider"
```

Add your Ontraport APP_ID and API_KEY to your .env file. For example:

```php
ONTRAPORT_APP_ID=appid
ONTRAPORT_API_KEY=apikey
```

# Usage

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

# License

WallStreet.io Laravel Ontraport API is open-sourced software licensed under [The MIT License (MIT)](LICENSE).
