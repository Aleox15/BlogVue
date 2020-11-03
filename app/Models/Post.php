<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
class Post extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function category(){
        $this->belogsTo(Category::class);
    }
    public function user(){
        $this->belogsTo(User::class);
    }
    public function getRouteKeyName(){
        return 'slug';
    }

}
