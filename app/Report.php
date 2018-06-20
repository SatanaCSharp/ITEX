<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reports';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'date_creation', 'images', 'event_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function events()
    {
        return $this->belongsTo('App\Event','event_id');
    }

    public function comments()
    {
        return $this->hasmany('App\Comment');
    }
}
