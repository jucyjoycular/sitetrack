<?php

namespace App\Services\Twilio;

use Illuminate\Support\Facades\Log;

class TwilioServices
{
    public static function sendTwilioWa(string $message, string $recepient) {
        $url = env('TWILIO_URL');
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
            'To' => 'whatsapp:'.$recepient,
            'From' => env('TWILIO_WHATSAPP_SENDER'),
            'Body' => $message
        ]));

        curl_setopt($ch, CURLOPT_USERPWD, env('TWILIO_USERPWD'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            Log::error($error);
        }

        curl_close($ch);
    }
}
