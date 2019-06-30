<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table='companies';
    protected $fillable=['name','code','city_id','address','phone','bank_code','email'];
}
