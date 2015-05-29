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
    protected $fillable = ['post','published_at','user_id'];

    /**
     * A post belongs to a User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function user(){
        return $this->belongsTo('App\User');
    }

}
