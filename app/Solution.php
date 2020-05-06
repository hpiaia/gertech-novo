<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Solution extends Model implements HasMedia
{
    use HasTranslations, InteractsWithMedia;

    public $translatable = [
        'title', 'description', 'short_description', 'button_text', 'specifications'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function contactPath()
    {
        return route('contact', [
            'subject' => __('Interesse em') . ' ' . $this->title,
            'message' => __('Tenho interesse em') . ' ' . $this->title . '...'
        ]) . '#contact-form';
    }
}
