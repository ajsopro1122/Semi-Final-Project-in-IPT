<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;

class InstructorController extends Controller
{
    public function index() {
        $instructors = Instructor::get();
        return view('instructors.index', compact('instructors'));
    }

    public function create() {
        return view('instructors.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'user_id' => 'required|numeric',
            'aoe' => 'required',
            'rating' => 'required|numeric',
        ]);

        Instructor::create($request->all());

        return redirect('/instructors')->with('info', 'New instructor has been added.');
    }
}
