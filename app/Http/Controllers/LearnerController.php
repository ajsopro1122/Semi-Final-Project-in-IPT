<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Learner;

class LearnerController extends Controller
{
    public function index() {
        $learners = Learner::get();
        return view('learners.index', compact('learners'));
    }
}
