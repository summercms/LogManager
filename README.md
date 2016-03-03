# Backpack\LogManager

An interface to preview, download and delete Laravel log files.

## Install

1. Install via composer:

``` bash
$ composer require backpack/logmanager
```

2. Then add the service provider to your config/app.php file:

``` 
    'Backpack\Logs\LogManagerServiceProvider',
```

3. Add a "storage" filesystem in config/filesystems.php:

```
'storage' => [
            'driver' => 'local',
            'root'   => storage_path(),
        ],
```

4. Configure Laravel to create a new log file for every day, in your .ENV file:

```
    APP_LOG=daily
```

or directly in your config/app.php file:
```
    'log' => env('APP_LOG', 'daily'),
```

5. Publish the lang files

```bash
    php artisan vendor:publish --provider="Backpack\LogManager\LogManagerServiceProvider"
```

## Usage

// TODO: update with backpack menu procedure

Add a menu element for it or just try at **your-project-domain/admin/log**

## Screenshots

See http://usedick.com

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [Cristian Tabacitu](https://github.com/tabacitu)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
