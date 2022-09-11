<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index ()
    {
        $grades = Grade:: all();
        return view('grades.index', compact('grades'));
    }
}
    <?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index ()
    {
        $grades = Grade:: all();
        return view('grades.index', compact('grades'));
    }
}
    
