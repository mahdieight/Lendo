<?php

namespace App\SmsProviders;

use App\Contracts\Sms\SmsProviderInterface;

class SmsStrategy implements SmsProviderInterface
{
    private $provider;

    public function __construct(SmsProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    public function send(string $recipient, string $message)
    {
        $this->provider->send($recipient, $message);
    }
}
