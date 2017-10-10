# Present models inside your Laravel app

The `olymbytes/laravel-presenters` package allows you to easily add view presenters to your models.

In order to get started, just add the `Presentable` trait:

```php
class Order extends Model
{
    use Presentable;
}
```

Here's a little demo of how you can use it after adding the trait:

```php
$order = Order::find(1);
$order->present()->title;
```

## Documentation
Until further documentation is provided, please have a look at the tests.

## Installation

You can install the package via composer:

```bash
$ composer require olymbytes/laravel-presenters
```

The package will automatically register itself.

You can publish the config with:
```bash
$ php artisan vendor:publish --provider="Olymbytes\Presenters\PresentersServiceProvider" --tag="config"
```

*Note*: It is important to the the namespace inside the config file, if you want to have your presenters in a different namespace than `App\Presenters`.


This is the contents of the published config file:
```php
return [
    'namespace' => 'App\\Presenters',
];
```

## Testing
```bash
$ composer test
```

## Security

If you discover any security issues, please email mpj@foreno.dk instead of using the issue tracker.

## Credits

- [Morten Poul Jensen](https://github.com/Pauly-)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
