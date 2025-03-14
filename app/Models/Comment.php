<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class Comment extends Model
{
/** @use HasFactory<\Database\Factories\CommentFactory> */
use HasFactory;
/**
* The attributes that are mass assignable.
*
* @var list<string>
*/
protected $fillable = [
'content',
'post_id'
];public function post()
{
return $this->belongsTo(Post::class);
}
}