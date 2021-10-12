<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * @package App\Models
 */
class Comment extends BaseModel
{
    use HasFactory;

    /**
     * @var array
     */
    protected $guarded = [];

    public function post()
    {
        return $this->morphOne(Post::class, 'commentable');
    }

    public function comment()
    {
        return $this->morphOne(Comment::class, 'commentable');
    }
}
