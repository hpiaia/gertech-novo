<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Job extends Model
{
    use HasTranslations;

    /**
     * The translatable attributes.
     *
     * @var string[]
     */
    public $translatable = [
        'title', 'description'
    ];

    /**
     * Returns the url to the contact form.
     *
     * @return string
     */
    public function contactPath()
    {
        return route('contact', [
            'subject' => __('Interesse em') . ' ' . $this->title,
            'message' => __('Tenho interesse em') . ' ' . $this->title . '...'
        ]) . '#contact-form';
    }
}
