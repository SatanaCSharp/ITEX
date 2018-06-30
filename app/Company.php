<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companies';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['logo', 'title', 'description', 'contacts', 'location', 'user_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];


    public function users()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
