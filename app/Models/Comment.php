<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['trial_student_id','status','comment'];

    public function trialStudent(){
        return $this->belongsTo(TrialStudent::class);
    }
}
