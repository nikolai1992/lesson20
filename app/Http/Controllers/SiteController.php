<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function subjects()
    {
        $subjects = Subject::all();
        return view('site.subjects', compact('subjects'));
    }
}
