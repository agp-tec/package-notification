<?php
/**
 *
 * Data e hora: 2020-09-23 09:39:57
 * Controller/Web gerada automaticamente
 *
 */


namespace Agp\Notification\Controller\Web;


use Agp\Notification\Controller\Controller;
use Agp\Notification\Model\Entity\DatabaseNotification;


class NotificationController extends Controller
{
    public function markReaded(DatabaseNotification $notification)
    {
        if ($notification->notifiable_id == auth()->user()->getKey())
            $notification->markAsRead();
        return response()->json();
    }

    public function readAll()
    {
        auth()->user()->unreadNotifications()->update(['read_at' => now()]);
        return response()->json();
    }
}
