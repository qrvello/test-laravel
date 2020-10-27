# **Test Laravel**

## Requeriments

- PHP >= 7.3
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Composer
  
***

## Installation

- Go to the root folder of the project and run the command::

~~~bash
composer install
~~~

- Copy .env.example and save it as .env.
- Create a database test_laravel and configure in .env, then run:
  
~~~~bash
php artisan key:generate
php artisan migrate
~~~~

***

## Execution

- Run:
  
~~~bash
php artisan serve
~~~
