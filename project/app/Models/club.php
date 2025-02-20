<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class club extends Model
{
    use HasFactory;
    protected $table = 'clubs';
    protected $fillable = [
        'id',
        'user_id',
    ];

    public function admin()
    {
        return $this->belongsTo(admin::class , 'club_id','admin_id');
    }

  
    public function Student(){

        return $this->belongsToMany(student::class,'StudentsEvents', 'club_id', 'Student_id');

    }

}
