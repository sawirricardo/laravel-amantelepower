<?php

namespace Sawirricardo\LaravelAmantelepower;

use Illuminate\Support\Facades\Http;

class LaravelAmantelepower
{
    /** @var array */
    private $config;

    public function __construct($repository)
    {
        $this->config = $repository;
    }

    public function sendSms($phone, $message)
    {
        return $this->buildRequest()
            ->post('SendSMS', [
                'Message' => $message,
                'MobileNumbers' => $phone,
                'SenderId' => $this->config['sender_id'],
                'ApiKey' => $this->config['api_key'],
                'ClientId' => $this->config['client_id'],
            ]);
    }

    private function buildRequest()
    {
        return Http::acceptJson()->asJson()
            ->baseUrl('http://sms.amantelepower.com/api/v2');
    }
}
