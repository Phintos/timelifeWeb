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
    public function calendar()
    {
        return $this->belongsTo('App\Calendar');
    }

}
