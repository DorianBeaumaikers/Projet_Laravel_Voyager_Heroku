<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class WorksController extends Controller
{
    public function index() {
        $works = Work::orderBy('created_at', 'desc')->take(6)->get();
        
        return view("works.index", compact("works"));
        
    }

    public function show(Work $work) {
        $similarWorks = Work::orderBy('created_at', 'desc')->take(4)->get();

        return view("works.show", compact("work", "similarWorks"));
    }
}
