<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Media extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'title', 'body', 'mood', 'mediaUrl'
    ];
     /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // public function moods()
    // {
    //     return $this->belongsTo('App\Mood');
    // }
    
    // public function comments()
    // {
    //     return $this->hasOne('App\Comment');
    // }
}
