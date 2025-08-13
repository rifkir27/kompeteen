<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyCoursesController extends Controller
{
    /**
     * Display the user's enrolled courses
     */
    public function index()
    {
        $user = Auth::user();
        $courses = $user->enrolledCourses()->with('category')->get();

        return view('my-courses', compact('courses'));
    }
}
