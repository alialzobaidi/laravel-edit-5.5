<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 

class comment extends Model
{

    use SoftDeletes;
    // protected $table = 'commment';
    protected $fillable = [
        'body' ,'post_id' , 'slug' ,'user_id'
    ];

    protected $dates = ['deleted_at'];




    public function user(){
        return $this->belongsTo('App\User');
    }

    public function post(){
        return $this->belongsTo('post::class');
    }

}
