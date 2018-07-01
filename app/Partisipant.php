<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partisipant extends Model
{
    protected $table = 'partisipants';


    protected $fillable = ['user_id','event_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];


    public function users(){
        return $this->belongsTo('App\User');
    }

    public function events(){
        return $this->belongsTo('App\Event');
    }

}
