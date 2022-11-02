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
                'SenderId' => $this->config['amantelepower.sender_id'],
                'ApiKey' => $this->config['amantelepower.api_key'],
                'ClientId' => $this->config['amantelepower.client_id'],
            ]);
    }

    private function buildRequest()
    {
        return Http::acceptJson()->asJson()
            ->baseUrl('http://sms.amantelepower.com/api/v2');
    }
}
