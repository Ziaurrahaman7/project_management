<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Team;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::with('team')->get();
        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::pluck('title', 'id')->toArray();
        $teams = Team::all();
        //    dd($projects);
        $clients = Client::all();
        return view('task.create', compact('clients', 'projects', 'teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'startDate' => 'required',
            'endDate' => 'nullable',
            'project_id' => 'required',
            'client_id' => 'required',
            'summary' => 'string|nullable',
            'priority' => 'required',
            'status' => 'required',
            'description' => 'string|nullable',
            'team_id' => 'required',
        ]);
        $task = Task::create($data);
        $task->team()->attach($data['team_id']);
        return redirect('task')->with('success', "Successfully addded");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $projects = Project::pluck('title', 'id')->toArray();
        $teams = Team::all();

        $selectedTeam = $task->team->pluck('id')->toArray();
        // dd($selectedTeam);
        $clients = Client::all();
        return view('task.edit', compact('clients', 'projects', 'teams', 'task', 'selectedTeam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $data = $request->validate([
            'title' => 'required',
            'startDate' => 'required',
            'endDate' => 'nullable',
            'project_id' => 'required',
            'client_id' => 'required',
            'summary' => 'string|nullable',
            'priority' => 'required',
            'status' => 'required',
            'description' => 'string|nullable',
            'team_id' => 'required',
        ]);
        // dd($data);
        $task->update($data);
        $task->team()->sync($data['team_id']);
        return redirect('task')->with('success', "Successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('task')->with('success', "Successfully delete");
    }
}
