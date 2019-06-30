<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['startdate','enddate','user_id','room_id','person_id'];
    protected $table='bookings';

    public function user(){
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
    public function room(){
        return $this->belongsTo(Room::class,'id','room_id');
    }
    public function payment(){
        return $this->belongsTo(Payment::class, 'booking_id', 'id');
    }
}
