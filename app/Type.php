<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {

    /**
     * Database table for this model
     * @var string
     */
    protected $table = 'types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type'];

    /**
     * A type belongs to a Venue
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
	public function venue()
    {
        return $this->hasOne('App\Venue');
    }

}
