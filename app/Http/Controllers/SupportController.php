<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supports = Support::all();
        return view('support.index', compact('supports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $projects= Project::pluck('title','id')->toArray();
    //    dd($projects);
       $clients= Client::all();
        return view('support.create',compact('projects','clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Support $support)
    {
        $data = $request->validate([
            'project_id'=>'required',
            'client_id'=>'required',
            'department'=>'required',
            'priority'=>'required',
            'subject'=>'required',
            'details'=>'required|min:50',
            'fileUpload'=>'nullable|size:3000',
            'status'=>'nullable',
            'comment'=>'string|nullable',
        ]);
        if($request->file('fileUpload')){
            $data['fileUpload'] = request()->file('fileUpload')->store('uploads');
        } else {
            $data['fileUpload']='';
        }
        Support::create($data);
        return redirect('support')->with('success', 'Successfully added');
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
    public function edit(Support $support)
    {
       return view('support.edit', compact('support'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Support $support)
    {
        $data = $request->validate([
            'department'=>'required',
            'status'=>'nullable',
            'comment'=>'string|nullable',
        ]);
        $support->update($data);
        return redirect('support')->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Support $support)
    {
        $support->delete();
        return redirect('support')->with('success', 'Successfully deleted');
    }
}
