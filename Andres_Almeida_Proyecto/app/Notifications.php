<?php

namespace App;

class Notifications 
{
    public function Send(Subscriber $subscriber, $message )
    {
        Mail::to($subscriber->getNotifyEmail())
        ->queue();
    }
}
