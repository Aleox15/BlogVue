<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\Comment;
class Post extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        $comments = $this->hasMany(Comment::class);
        foreach($comments as $c){
            $c->setAttribute('added_at',$c->created_at->diffForHumans());
        }
        return $comments;
    }
    public function getRouteKeyName(){
        return 'slug';
    }

}
