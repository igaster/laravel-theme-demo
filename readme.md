## Demo application for larave-theme package

This is a Laravel application that was build as a demo for my [laravel-theme](https://github.com/igaster/laravel-theme) package

To setup:

- clone local
- run composer install
- run artisan serve 
- visit localhost:8000

Demonstrates simple theme hierarchy with some assets & views shared between themes 

Current theme is storred in Session....

Explore some concepts in code:

- [themes.php config file] (https://github.com/igaster/laravel-theme-demo/blob/master/config/themes.php) : setup themes
- [routes.php] (https://github.com/igaster/laravel-theme-demo/blob/master/app/Http/routes.php) : defines the route that handle theme switching
- [myMiddleware.php](https://github.com/igaster/laravel-theme-demo/blob/master/app/Http/Middleware/myMiddleware.php) : sets the current theme on each request, enabled in [Kernel.php](https://github.com/igaster/laravel-theme-demo/blob/master/app/Http/Kernel.php)
- [public folder](https://github.com/igaster/laravel-theme-demo/tree/master/public) : each theme overides SOME assets (img/test.png) or shares the other (theme.css)
- [views folder](https://github.com/igaster/laravel-theme-demo/tree/master/resources/views) : "index.blade" is overiden by each theme. "links.blade" is shared.