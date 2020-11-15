<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';

    protected $fillable =
        [
            'content'
        ];
    #設定和post多對一的關係，多個評論屬於一則貼文
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
