# Laravel Nova Telescope Link

This [Nova](https://nova.laravel.com/) tool adds a link to your project's [Laraval Telescope](https://github.com/laravel/telescope/) dashboard in your Nova sidebar.

That's all it does!

## Installation

Install via [Composer](https://getcomposer.org/):
```
composer require jackcruden/telescope-link
```

Register the tool in `app/Providers/NovaServiceProvider`:

```php
public function tools()
{
    return [
        new \Jackcruden\TelescopeLink\TelescopeLink,
    ];
}
```
