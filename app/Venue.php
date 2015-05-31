<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{

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
        'name', 'description', 'latitude', 'longitude', 'twitter', 'email', 'address'
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo('App\Type');
    }


    /**
     * A Venue belongs to a City
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo('App\City');
    }

}
