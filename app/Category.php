<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;

    public $translatable = [
        'title', 'description'
    ];

    public function solutions()
    {
        return $this->hasMany(Solution::class);
    }
}
