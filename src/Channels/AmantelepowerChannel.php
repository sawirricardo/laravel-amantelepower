<?php

namespace Sawirricardo\LaravelAmantelepower\Channels;

use Illuminate\Notifications\Notification;
use Sawirricardo\LaravelAmantelepower\Facades\LaravelAmantelepower;

class AmantelepowerChannel
{
    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toAmantelepower($notifiable);

        LaravelAmantelepower::sendSms($notifiable->phone_number, $message);
    }
}
