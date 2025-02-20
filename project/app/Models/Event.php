<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'Events';
    protected $fillable = [
        'id',
        'title',
        'data_creation',
        'descrption',
        'image',
        'admin_id',
    ];

    public function admin()
    {
        return $this->belongsTo(admin::class);
    }
    
    public function Student(){

        return $this->belongsToMany(student::class,'StudentsEvents', 'event_id', 'Student_id');

    }

}
