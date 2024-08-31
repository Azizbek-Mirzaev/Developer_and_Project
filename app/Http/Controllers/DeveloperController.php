<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\Project;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function index() {
        $developers = Developer::query()->paginate();

        return view('developer.index', [
            'developers' => $developers
        ]);
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
            'project_id' =>  'nullable|exists:projects,id'

        ]);

           $developers = new Developer();
        // dd($developer);

           $developers->full_name = $request->full_name;
           $developers->position = $request->position;
           $developers->email = $request->email;
           $developers->contact_phone = $request->contact_phone;
           $developers->project_id = $request->project_id;
        //    $developers->save();
        //    return redirect()->back();
        dd($developers);
           if ($developers->save()) {
            return redirect()->back()->with('success', 'Разработчик успешно добавлен.');
        } else {
            return redirect()->back()->with('error', 'Произошла ошибка при сохранении данных.');
        }

        // Developer::create($request->all());

        // return redirect()->route('developer.index');
    }
    public function update(Request $request,$id)
    {
        $developers = Developer::find($id);

       $developers->full_name = $request->full_name;
       $developers->position = $request->position;
       $developers->email = $request->email;
       $developers->contact_phone = $request->contact_phone;
       $developers->project_id = $request->project_id;
       $developers->save();
       return redirect()->back();

    // Developer::create($request->all());

    // return redirect()->route('developer.index');
}
    // public function transfer(Request $request, Developer $developer)
    // {
    //     $request->validate([
    //         'project_id' => 'required|exists:projects,id',
    //     ]);

    //     $developer->update(['project_id' => $request->project_id]);

    //     return redirect()->route('developers.show', $developer);
    // }

    // public function destroy(Project $project)
    // {
    //     $project->developers()->update(['project_id' => null]); // Освобождаем всех разработчиков из проекта
    //     $project->delete();

    //     return redirect()->route('projects.index');
    // }
}
