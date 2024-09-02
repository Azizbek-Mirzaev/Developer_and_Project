<?php

namespace App\Http\Controllers;

use App\Models\Developer;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function index() {
        $developers = Developer::query()->paginate();

        return view('developer.index', compact('developers'));
            //'developers' => $developers
       // ]);
    }
    public function create()
    {
        return view('developer.create');
    }
    public function store(Request $request)
     {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',//in:программист,администратор,devops,дизайнер',
            'email' => 'nullable|email|max:255',
            'contact_phone' => 'nullable|string|max:15',
           // 'project_id' =>  'nullable|string|max:15'//exists:projects,id'

        ]);

           $developer = new Developer();
        // dd($developer);

           $developer->full_name = $request->full_name;
           $developer->position = $request->position;
           $developer->email = $request->email;
           $developer->contact_phone = $request->contact_phone;
          // $developer->project_id = $request->project_id;
           $developer->save();
           return redirect()->back();

    }
    public function update(Request $request,$id)
    {
        $developer = Developer::find($id);

       $developer->full_name = $request->full_name;
       $developer->position = $request->position;
       $developer->email = $request->email;
       $developer->contact_phone = $request->contact_phone;
       $developer->project_id = $request->project_id;
      // dd($developer);
       $developer->save();
       return redirect()->back();
    }

    public function show($id)
    {
        $developer = Developer::find($id);
        return view('developer.show',[
            'developers'=> $developer]);
    }

    public function edit($id)
    {
        $developer = Developer::find($id);

        if (! $developer) {
            abort(404);
        }

        return view('developer.edit', [
            'developers' => $developer
        ]);

    }

    public function delete($id)
    {
        $developer = Developer::find($id);

        if (! $developer) {
            abort(404);
        }
        $developer->delete();

        return redirect()->back();
    }

}
