<?php

namespace App\Http\Controllers;

use App\Models\TrialStudent;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, TrialStudent $trialStudent)
    {
        $validated=$request->validate([
            'status'=>'required',
            'comment'=>'required',
        ]);

        Comment::create([
            'trial_student_id' => $trialStudent->id,
            'status' => $validated['status'],
            'comment' => $validated['comment'],
        ]);

        return redirect()->route('trial-students.show',$trialStudent);
    }
}
