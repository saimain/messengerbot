<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessengerController extends Controller
{
    public function index()
    {

        $this->verifyAccess();
    }

    public function verifyAccess()
    {
        $local_token = env('FACEBOOK_MESSENGER_WEBHOOK_TOKEN');
        $hub_verify_token = request('hub_verify_token');


        if ($hub_verify_token === $local_token) {
            echo request('hub.challenge');
            exit;
        }
    }
}
