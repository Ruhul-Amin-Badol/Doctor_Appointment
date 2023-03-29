<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    protected $table='appointments';
    protected $primaryKey='id';
    protected $fillable=[
        'appointment_no',
        'appointment_date',
        'doctor_id',
        'patient_name',
        'patient_phone',
        'total_fee',
        'paid_amount',
    ];
    public function doctor(){
        return $this->hasMany(doctor::class);
    }
}
