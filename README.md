# Categories form

Installation
------------

```
composer require "egorryaroslavl/categories":"^1.0"
```

Then add ServiceProviders

``` 
  'providers' => [
    // ...
    Egorryaroslavl\Admin\AdminServiceProvider::class,    
    Egorryaroslavl\Categories\CategoriesServiceProvider::class,
    Collective\Html\HtmlServiceProvider::class,
    Intervention\Image\ImageServiceProvider::class,
    Barryvdh\Elfinder\ElfinderServiceProvider::class,
    // ...
  ],
```
and aliases 

``` 
  'aliases' => [
    // ...
      'Form' => Collective\Html\FormFacade::class,
      'Html' => Collective\Html\HtmlFacade::class,
      'Image' => Intervention\Image\Facades\Image::class,
    // ...
  ],
``` 
and run
``` 
php artisan vendor:publish 
```


And after all, run this...

```
php artisan migrate
```

 A create direcories for icons -
```
  /publish/upload/icons/categories/
```