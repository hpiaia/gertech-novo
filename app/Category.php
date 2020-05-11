<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Category extends Model
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
     * A category has many solutions.
     *
     * @return HasMany
     */
    public function solutions()
    {
        return $this->hasMany(Solution::class);
    }
}
