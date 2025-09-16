<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function __invoke(){

        // return view('search.index');

        $job = Job::query()
        ->with('employer', 'tags')
        ->where('title', 'LIKE', '%' . request('q') . '%')
        ->get();

        // dd($job);
        return view('components.results', [
            'jobs' => $job
        ]);
    }
    
}
