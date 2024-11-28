<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class SickReports extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_name',
        'start_date'
    ];
    protected $casts = [
        'start_date' => 'date',
    ];
}