<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\department;

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
    public function department(){
        return $this->belongsTo(department::class);
    }
}
