<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

    protected $fillable = ['name'];

    /**
     * A City has one venue
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
	public function venue()
    {
        return $this->hasOne('App\Venue');
    }

}
