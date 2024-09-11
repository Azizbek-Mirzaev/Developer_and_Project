<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\Project;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function index() {
        $developers = Developer::orderBy('created_at','desc')->get();
        // dd($developers);
        return view('developer.index', compact('developers'));    }
            //'developers' => $developers
       // ]);
    //    public function transferToProject(Request $request, Developer $developer)
    //    {
    //        // Валидация входных данных
    //        $request->validate([
    //            'project_id' => 'required|exists:projects,id',
    //        ]);

    //        // Обновление project_id разработчика
    //        $developer->update([
    //            'project_id' => $request->input('project_id'),
    //        ]);

    //        return redirect()->route('developer.index')->with('success', 'Разработчик успешно переведен на новый проект');
    //    }

    public function create()
    {
        return view('developer.create', [
            'projects' => Project::all()
        ]);
    }
    public function store(Request $request)
     {
        // dd($request);
        $request->validate([
            'full_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',//in:программист,администратор,devops,дизайнер',
            'email' => 'nullable|email|max:255',
            'contact_phone' => 'nullable|string|max:15',
            'birthdate' => 'nullable|string|max:15',
            'project_id' =>  'nullable|exists:projects,id'
//string|max:15'
        ]);
           $developer = new Developer();
        // dd($developer);

           $developer->full_name = $request->full_name;
           $developer->position = $request->position;
           $developer->email = $request->email;
           $developer->contact_phone = $request->contact_phone;
           $developer->birthdate = $request->birthdate;
           $developer->project_id = $request->project_id;// Project::all();//query()->where('is_actual', true)->first()->id;//$request->project_id;
           $developer->save();
           return redirect()->route('developer.index');

    }
    public function update(Request $request,$id)
    {
        $developer = Developer::find($id);

       $developer->full_name = $request->full_name;
       $developer->position = $request->position;
       $developer->email = $request->email;
       $developer->contact_phone = $request->contact_phone;
       $developer->birthdate = $request->birthdate;
       $developer->project_id = $request->project_id;//Project::all();//query()->where('is_actual', true,false)->first()->id;
      // dd($developer);
       $developer->save();
       return redirect()->route('developer.index');
    }

    public function show($id)
    {
        $developer = Developer::find($id);
        return view('developer.show',[
            'developers'=> $developer,
            'projects' => Project::all()]);
    }

    public function edit($id)
    {
        $developer = Developer::find($id);

        if (! $developer) {
            abort(404);
        }

        return view('developer.edit', [
            'developers' => $developer,
            'projects' => Project::all()
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
