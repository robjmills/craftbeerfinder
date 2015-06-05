<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    /**
     * Database table for this model
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','venue_id','content','datetime_start','datetime_end','user_id'];

    /**
     * A post belongs to a User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function user(){
        return $this->belongsTo('App\User');
    }

    /**
     * A post belongs to a Venue
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function venue(){
        return $this->belongsTo('App\Venue');
    }

}
