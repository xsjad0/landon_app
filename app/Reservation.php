<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    public function client()
    {
        return $this->belongsTo('App\Client', 'client_id', 'id'); //relation between client_id and id of reservation
    }

    public function room()
    {
        return $this->belongsTo('App\Room', 'room_id', 'id'); //relation between room_id and id of reservation
    }
}
