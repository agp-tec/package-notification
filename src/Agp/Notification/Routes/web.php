<?php

Route::group(['as' => 'web.', 'namespace' => 'Agp\Notification\Controller\Web', 'middleware' => ['web']], function () {
    Route::get('notification/{notification}/read', 'NotificationController@markReaded');
    Route::get('notification/read-all', 'NotificationController@readAll');
});

