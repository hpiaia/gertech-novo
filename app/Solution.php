<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Solution extends Model implements HasMedia
{
    use HasTranslations, InteractsWithMedia;

    /**
     * The translatable attributes.
     *
     * @var string[]
     */
    public $translatable = [
        'title', 'description', 'short_description', 'button_text',
        'specifications'
    ];

    /**
     * A solution belongs to a category.
     *
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

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
