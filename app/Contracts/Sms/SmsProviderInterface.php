<?php

namespace App\Contracts\Sms;

interface SmsProviderInterface
{
    public function send(string $recipient, string $message);
}
