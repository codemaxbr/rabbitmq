<?php
namespace CodemaxBR\RabbitMQ;

use Illuminate\Support\ServiceProvider;

class RabbitMQServiceProvider extends ServiceProvider
{
    protected $defer=false;


    public function register()
    {
        $this->app->singleton('RabbitMQ', function ($app) {
            return new RabbitMQ(
                env('RABBITMQ_HOST','localhost'),
                env('RABBITMQ_PORT','5672'),
                env('RABBITMQ_USERNAME','admin'),
                env('RABBITMQ_PASSWORD','admin'),
                env('RABBITMQ_VHOST', '/')
            );
        });
    }

    public function provides()
    {
        return[
            'RabbitMQ',
        ];
    }
}