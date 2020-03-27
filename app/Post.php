<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class Post extends Model
{


    use SoftDeletes;
    protected $table = 'posts';
    protected $fillable = [
        'title', 'content', 'category_id','formal', 'featrued','slug' ,'user_id'
    ];

    protected $dates = ['deleted_at'];

    public function getFeatruedAttribute($featrued)
    {
        return asset($featrued);
    }

    public function comment(){
        return $this->hasmany(comment::class);
    }


    public function category()
    {
        return $this->belongsTo('App\Category');
    }

 
    public function user()
    {
        return $this->belongsTo('App\User');
    }
//     public function show_user_name()
//   {
//     return $this->belongsTo('App\User' , 'user_id' , 'id');
//   }


    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }


}
