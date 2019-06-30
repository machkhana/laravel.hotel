<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=['booking_id','price','payment_method'];
    protected $table='payments';
    public function bookings(){
        return $this->belongsTo(Booking::class,'id','booking_id');
    }
}
