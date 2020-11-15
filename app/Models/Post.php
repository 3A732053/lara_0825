<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable =
        [
            'title',
            'content',
            'is_feature'
        ];

    #設定和comments一對多的關係，一則貼文有多個評論
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
