<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description', 'user_id', 'report_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];


    public function report()
    {
        return $this->belongsTo('App\Report','report_id');
    }
    public function users()
    {
        return $this->belongsTo('App\User','user_id');
    }

}
