<?php
/**
 *
 * Data e hora: 2020-09-23 09:39:57
 * Controller/Web gerada automaticamente
 *
 */


namespace Agp\Notification\Controller\Web;


use Agp\BaseUtils\Model\Entity\DatabaseNotification;
use Agp\Notification\Controller\Controller;


class NotificationController extends Controller
{
    public function markReaded(DatabaseNotification $notification)
    {
        dump($notification);
        dump(auth());
        if ($notification->notifiable_id == auth()->user()->getKey())
            $notification->markAsRead();
        return response()->json();
    }

    public function readAll()
    {

    }
}
