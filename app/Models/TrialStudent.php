<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrialStudent extends Model
{
    protected $fillable = ['name', 'bithday', 'status', 'trial_date', 'join_month', 'has_unread_comment'];
}
