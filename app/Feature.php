<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model {

    /**
     * Database table for this model
     * @var string
     */
    protected $table = 'features';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['feature'];

    /**
     * A feature belongs to a Venue
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function venue()
    {
        return $this->belongsTo('App\Venue');
    }

}
