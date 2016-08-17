# Cidades BR

Pacote Laravel de Cidades e Estados brasileiros com migrations, models e seeds

### Como usar

Adicione o package

```sh
$ composer require edsonalvesan/laravel-citiesbr
```

ou adicione no arquivo composer.json

```sh
 "edsonalvesan/laravel-citiesbr": "v1.0.0"
```
e execute 

```sh
 composer update
```

Adicione o Provider no arquivo `config/app.php`

```php
'providers' => [
    EdsonAlvesan\Cities\CitiesServiceProvider::class
],
```

Importe migrations/seeds e models

```sh
$ php artisan vendor:publish --provider="EdsonAlvesan\Cities\CitiesServiceProvider"
```

Execute

```sh
$ composer dump-auto
$ php artisan migrate
$ php artisan db:seed --class="StatesTableSeeder"
$ php artisan db:seed --class="CitiesTableSeeder"
```

##Observação
O id da tabela States é o código federal do estado.

