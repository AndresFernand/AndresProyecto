<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

interface NotifiableInterface
{
    public function getNotifyEmail():string;
    
}

class Notifications{

    public function send(NotifiableInterface $subcriber, $message)
    {
        Mail::to($subscriber>getNotifyEmail())
        ->queue();
    }
}
