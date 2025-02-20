<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = [
        'id',
        'user_id',
    ];

    public function student()
    {
        return $this->belongsTo(User::class);
    }
    public function Event(){
        return $this->belongsToMany(Event::class, 'StudentsEvents', 'Student_id', 'event_id');
    }
    public function club(){
        return $this->belongsToMany(club::class, 'StudentsClubs', 'Student_id', 'club_id');
    }

}
