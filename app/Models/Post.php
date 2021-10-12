<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App\Models
 */
class Post extends BaseModel
{
    use HasFactory;

    /**
     * @var array
     */
    protected $guarded = [];

    public function comments()
    {
        return $this->morphOne(Comment::class, 'commentable');
    }
}
