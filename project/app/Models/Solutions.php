<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modeles\user;
use App\Modeles\Question;
use App\Modeles\Reponse;

class Solutions extends Model
{
    use HasFactory;

    protected $fillable=['question_id','reponses_id','user_id'];

    public function questions ()
    {
        return  $this->belongsTo(Question::class);
    } 

    public function reponses()
    {
        return $this->belongsTo(Reponse::class);
    } 

    public function users ()
    {
        return $this->belongsTo(User::class);
    } 



}
