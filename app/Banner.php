<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Banner extends Model
{
    use HasTranslations;

    /**
     * The translatable attributes.
     *
     * @var string[]
     */
    public $translatable = [
        'title', 'description', 'button_text'
    ];

    /**
     * Returns the banner title with the html fixed.
     *
     * @return string
     */
    public function htmlTitle()
    {
        return preg_replace(
            '/\*([^*]+?)\*/',
            '<span class=\'text-secondary\'>$1</span>',
            $this->title
        );
    }
}
