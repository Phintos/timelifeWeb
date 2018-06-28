<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
	//il fillable indica i campi che devono essere compilati
	protected $fillable = [
        'mood', 'calendar_date', 'user_id'
    ];

    public function user()
    {
    	//questa è una relazione uno a molti???
        return $this->belongsTo('App\User');
    }

    public function medias()
    {
        return $this->hasMany('App\Media');
    }
}
