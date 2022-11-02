<?php

namespace Sawirricardo\LaravelAmantelepower\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Sawirricardo\LaravelAmantelepower\LaravelAmantelepower create ()
 * @method static \Illuminate\Http\Client\Response sendSms (string $phone, string $message)
 *
 * @see \Sawirricardo\LaravelAmantelepower\LaravelAmantelepower
 */
class LaravelAmantelepower extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sawirricardo\LaravelAmantelepower\LaravelAmantelepower::class;
    }
}
