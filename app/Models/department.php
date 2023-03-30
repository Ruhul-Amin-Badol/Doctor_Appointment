<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\doctor;

class department extends Model
{
    use HasFactory;
    protected $table='departments';
    protected $primaryKey='id';
    protected $fillable=[
        'name',
    ];

    public function doctor(){
        return $this->hasMany(doctor::class,'department_id','id');
    }
}
