# laravel-content-builder-js
Laravel package for ContentBuilder.js

This package is not with ContentBuilder.js source files. You have to purchase it and put all the files in assests folder.

USAGE

For Laravel 5.2

composer require bglobal/content-builder OR composer require "bglobal/content-builder":"2.0@dev"

add the following line in config/app.php
Bglobal\ContentBuilder\ContentBuilderServiceProvider::class,

Publishing config tag vendor
php artisan vendor:publish --provider="Bglobal\ContentBuilder\ContentBuilderServiceProvider" --tag=config --force

It will publishh all config file to laravel config folder


Publishing public tag vendor
php artisan vendor:publish --provider="Bglobal\ContentBuilder\ContentBuilderServiceProvider" --tag=public --force

It will publish all public content to laravel public folder

Add this line in any of your view file and see the magic
@include('content-builder::tpl')

For more help visit http://innovastudio.com/content-builder.aspx
