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
        'Studen_id',
        'Club_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
