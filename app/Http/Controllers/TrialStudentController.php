<?php

namespace App\Http\Controllers;

use App\Models\TrialStudent;
use Illuminate\Http\Request;

class TrialStudentController extends Controller
{
    public function index()
    {
        $trialStudents = TrialStudent::all();

        return view('trial-students.index', compact('trialStudents'));
    }

    public function create()
    {
        return view('trial-students.create');
    }

    public function store(Request $request)
    {
        $trialStudents = $request->validate([
            'name' => 'required',
            'birthday' => 'required',
            'status' => 'required',
        ]);

        TrialStudent::create($trialStudents);

        return redirect()->route('trial-students.index');
    }
}
