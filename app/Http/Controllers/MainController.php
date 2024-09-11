<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\Project;
use Illuminate\Http\Request;

class MainController extends Controller


{
        public function index()
        {
            $developers = Developer::orderBy('created_at','desc')->get();
        // dd($developers);
        return view('statistics.index',compact('developers'));
        }

        public function projectCount()
    {
        $projectCount = Project::count();
        return view('statistics.project_count', compact('projectCount'));
    }

    public function developerCount()
    {
        $developerCount = Developer::count();
        return view('statistics.developer_count', compact('developerCount'));
    }

    public function averageAge()
    {
        $averageAge = Developer::selectRaw('AVG(birthdate) as avg_age')->value('avg_age');
        return view('statistics.average_age', compact('averageAge'));
    }
//


 }
