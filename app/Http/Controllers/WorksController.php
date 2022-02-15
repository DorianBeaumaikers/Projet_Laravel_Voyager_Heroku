<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use Illuminate\Database\Eloquent\Builder;

class WorksController extends Controller
{
    public function index() {
        $works = Work::orderBy('created_at', 'desc')->take(6)->get();
        
        return view("works.index", compact("works"));
        
    }

    public function show(Work $work) {
        $similarWorks = Work::whereHas('tags', function (Builder $query) use ($work) {
            return $query->whereIn('name', $work->tags->pluck('name')); 
        })
        ->where('id', '!=', $work->id) // So it won't fetch same post
        ->orderBy('created_at', 'desc')
        ->take(4)
        ->get();

        return view("works.show", compact("work", "similarWorks"));
    }

    public function moreWorks(int $offset) {
        $works = Work::orderBy('created_at', 'desc')->take(6)->offset($offset)->get();
        return view("works.moreWorks", compact("works"));
    }
}
