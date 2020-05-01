<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Job extends Model
{
    use HasTranslations;

    public $translatable = [
        'title', 'description'
    ];

    public function contactPath()
    {
        return route('contact', [
            'subject' => __('Interesse em') . ' ' . $this->title,
            'message' => __('Tenho interesse em') . ' ' . $this->title . '...'
        ]) . '#contact-form';
    }
}
