<?php

namespace App\SmsProviders;

use App\Contracts\Sms\SmsProviderInterface;

class FirstSmsProvider implements SmsProviderInterface
{
    public function __construct(private string $username, private string $password)
    {
    }

    public function send(string $recipient, string $message)
    {
        // Implement logic to send SMS using the FirstSmsProvider API
    }
}
