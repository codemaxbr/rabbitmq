<h1 align="center">
 Adaptation of the php-amqplib package for Laravel
</h1>

Adaptation of the php-amqplib package for use in Laravel made with much :two_hearts:

For more information on php-aqpmqblib package visit their <a href="https://github.com/php-amqplib/php-amqplib">repository</a>


## 🚀 Installation

Require the `codemaxbr/rabbitmq` package in your `composer.json` and update your dependencies:
```sh
composer require geekshubs/rabbitmq
```
Add env parameters to configuration in Lumen and Laravel.


```env
RABBITMQ_HOST=rabbit
RABBITMQ_PORT=5672
RABBITMQ_USER=rabbitmq
RABBITMQ_PASSWORD=rabbitmq
RABBITMQ_VHOST='/'
```
In app/config/app.php add the following :


The ServiceProvider to the providers array :

```php
CodemaxBR\RabbitMQ\RabbitMQServiceProvider::class,
```

###  :bulb: Lumen

On Lumen, just register the ServiceProvider manually in your `bootstrap/app.php` file:
```php
$app->register(\CodemaxBR\RabbitMQ\RabbitMQServiceProvider::class);
```

and add this lines in same file.
```php
//Add lines to error reflection class
$app->instance('path.config', app()->basePath() . DIRECTORY_SEPARATOR . 'config');
$app->instance('path.storage', app()->basePath() . DIRECTORY_SEPARATOR . 'storage');
```






