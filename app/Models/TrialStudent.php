<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class TrialStudent extends Model
{
    protected $fillable = ['name', 'birthday', 'status', 'trial_date', 'join_month', 'has_unread_comment'];

    public function getGradeAttribute()
    {
        if (!$this->birthday) {
            return '未設定';
        }

        $birthday = Carbon::parse($this->birthday);

        $schoolYearDate = Carbon::create(Carbon::now()->year, 4, 1);

        $ageAtSchoolYearStart = (int) $birthday->diffInYears($schoolYearDate);

        if ($ageAtSchoolYearStart < 3) {
            return '未就園児';
        } elseif ($ageAtSchoolYearStart === 3) {
            return '年少';
        } elseif ($ageAtSchoolYearStart === 4) {
            return '年中';
        } elseif ($ageAtSchoolYearStart === 5) {
            return '年長';
        } elseif ($ageAtSchoolYearStart < 12) {
            return '小学' . ($ageAtSchoolYearStart - 5) . '年生';
        } elseif ($ageAtSchoolYearStart < 15) {
            return '中学' . ($ageAtSchoolYearStart - 11) . '年生';
        } elseif ($ageAtSchoolYearStart < 18) {
            return '高校' . ($ageAtSchoolYearStart - 14) . '年生';
        } else {
            return '高校卒業以上';
        }
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
