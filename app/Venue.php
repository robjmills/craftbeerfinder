<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model {

    /**
     * Database table for this model
     * @var string
     */
    protected $table = 'venues';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description','latitude','longitude','twitter','email','address'
    ];

    /**
     * A venue has many features
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function features()
    {
        return $this->hasMany('App\Feature');
    }

    /**
     * A venue has a type
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function types()
    {
        return $this->hasOne('App\Type');
    }

}
