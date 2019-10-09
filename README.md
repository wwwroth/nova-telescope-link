# Laravel Nova Telescope Link

This [Nova](https://nova.laravel.com/) tool adds a link to your project's [Laraval Telescope](https://github.com/laravel/telescope/) dashboard in your Nova sidebar and was 'heavily inspired' by [Nova Horizon Link](https://github.com/alexpgates/nova-horizon-link).

![Screenshot of Laravel Nova Telescope Link tool](https://raw.githubusercontent.com/jackcruden/nova-telescope-link/master/screenshot.png)

## Installation

Install via [Composer](https://getcomposer.org/):
```
composer require wwwroth/telescope-link
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
