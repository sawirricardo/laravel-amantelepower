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

        $to = $notifiable->amantelepower_phone_number ?? $notifiable->phone_number;

        LaravelAmantelepower::sendSms($to, $message);
    }
}
