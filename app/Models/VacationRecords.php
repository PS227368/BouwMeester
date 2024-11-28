<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class VacationRecords extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_name',
        'end_date',
        'type'
    ];
    protected $casts = [
        'end_date' => 'date',
    ];
}