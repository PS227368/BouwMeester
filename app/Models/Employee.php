<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'available_days',
        'certificates',
        'role'
    ];
    protected $casts = [
        'available_days' => 'array',
        'certificates' => 'array',
    ];
}
