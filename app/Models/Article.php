<?php

namespace App\Models;

use App\Enums\ArticleStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Article extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'content',
        'status'
    ];

    protected $casts = [
        'status'=> ArticleStatus::class
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function banner(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
