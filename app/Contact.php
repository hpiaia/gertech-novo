<?php

namespace App;

use App\Mail\ContactReceived;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'subject', 'message',
    ];

    /**
     * Send the contact message via email to the website administrator.
     *
     * @return mixed
     */
    public function mail()
    {
        return Mail::to('rudinei@gertech.ind.br')
            ->send(new ContactReceived($this));
    }
}
