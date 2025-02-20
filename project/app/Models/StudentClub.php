<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClub extends Model
{
    use HasFactory;
    protected $table = 'StudentsClubs';
    protected $fillable = [
        'id',
        'Student_id',
    ];

    public function Student()
    {
        return $this->belongsTo(student::class);
    }

    public function club()
    {
        return $this->belongsTo(club::class);
    }


}
