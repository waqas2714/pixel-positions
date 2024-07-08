<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke() //this function is used when a controller just has a single method. this __invoke is automatically called from the web.php.
    {
        $jobs = Job::query()
        ->with(['employer', 'tags']) //Fetch the employer and tag besides this so that we dont have to make the query on the client side
        ->where("title","LIKE","%". request("q") .'%')
        ->get();

        return view('results', [
            'jobs' => $jobs
        ]);
    }
}
