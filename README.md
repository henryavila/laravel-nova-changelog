# Laravel Nova Changelog
A Laravel Nova 4 tool to display the content of the file [CHANGELOG.md](CHANGELOG.md) inside Laravel Nova panel.

## Install
```bash
composer require henryavila/laravel-nova-changelog
```


## Usage
Register the package 
```php
//NovaServiceProvider.php
public function tools(): array
{
    return [
        //...
        new \HenryAvila\Changelog\Changelog(),    
    ];
}
```

if you use Laravel Nova 4 [Custom Menu](https://nova.laravel.com/docs/customization/menus.html), use use the following code too
```php
\HenryAvila\Changelog\Changelog::make()->menu($request),
```
