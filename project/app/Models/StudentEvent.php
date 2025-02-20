<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEvent extends Model
{
    use HasFactory;
    protected $table = 'StudentsEvents';
    protected $fillable = [
        'id',
        'Student_id',
        'Event_id',
    ];

    public function Student()
    {
        return $this->belongsTo(student::class);
    }

    public function Event()
    {
        return $this->belongsTo(Event::class);
    }


}
