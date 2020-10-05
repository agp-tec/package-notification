<?php

namespace Agp\Notification;

use Illuminate\Support\ServiceProvider;

class AgpNotificationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/notification.php' => config_path('notification.php'),
        ], 'config');

        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');
    }

    public function register()
    {
    }
}
