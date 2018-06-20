<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'date', 'state', 'duration', 'company_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function companies()
    {
        return $this->belongsTo('App\Company','company_id');
    }

    public function reports()
    {
        return $this->hasOne('App\Report');
    }

}
