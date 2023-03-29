<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    protected $table='doctors';
    protected $primaryKey='id';
    protected $fillable=[
        'department_id',
        'name',
        'phone',
        'fee',
    ];
    // public function appointment(){
    //     return $this->hasOne(appointment::class);
    // }
}
