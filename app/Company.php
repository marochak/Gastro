<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'address', 'city', 'country' , 'phone','Fax' , 'email' , 'start_time', 'end_time','logo','user_id'
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
