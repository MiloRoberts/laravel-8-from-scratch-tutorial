<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // author_id isn't the key, so I must be explicit here
    // thus, (User::class, 'user_id')
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
