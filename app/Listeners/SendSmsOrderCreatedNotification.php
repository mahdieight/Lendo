<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\SmsProviders\SmsStrategy;

class SendSmsOrderCreatedNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderCreated $event)
    {
        $order = $event->order;
        $customer = $order->customer;

        // Retrieve SMS provider from configuration
        $smsProviderName = config('SMS_PROVIDER');
        $smsProviderClass = '\\App\\SmsProviders\\' . $smsProviderName;

        $smsProvider = new $smsProviderClass(config("sms.$smsProviderName.username"), config("sms.$smsProviderName.password"));
        $smsStrategy = new SmsStrategy($smsProvider);

        $smsMessage = "Dear $customer->name,\nYour order has been registered successfully.\nThank you.";

        $smsStrategy->send(
            $customer->mobile,
            $smsMessage
        );
    }
}
