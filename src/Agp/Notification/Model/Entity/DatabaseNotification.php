<?php


namespace Agp\Notification\Model\Entity;


class DatabaseNotification extends \Illuminate\Notifications\DatabaseNotification
{
    protected $connection = 'mysql-notification';
    protected $table = 'log_notifications';

    public function __construct(array $attributes = [])
    {
        $this->setConnection(config('notification.notification_connection'))
            ->setTable(config('notification.notification_table'));

        parent::__construct($attributes);
    }
}
