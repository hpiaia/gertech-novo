<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Banner extends Model
{
    use HasTranslations;

    public $translatable = [
        'title', 'description', 'button_text'
    ];

    public function htmlTitle()
    {
        return preg_replace(
            '/\*([^*]+?)\*/',
            '<span class=\'text-secondary\'>$1</span>',
            $this->title
        );
    }
}
