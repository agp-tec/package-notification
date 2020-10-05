<?php

Route::group(['as' => 'web.', 'namespace' => 'Agp\Notification\Controller\Web', 'middleware' => ['web'], "prefix" => "{contaId}"], function () {
    Route::get('notification/{notification}/read', 'NotificationController@markReaded')->name('notification.read');
    Route::get('notification/read-all', 'NotificationController@readAll')->name('notification.readall');
});

