<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Leave;
use App\Models\Company;
use App\Models\LeaveType;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaves = Leave::with('team')->get();
        return view('leave.leave', compact('leaves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        $leavtypes = LeaveType::all();
        return view('leave.create', compact('teams','leavtypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $attributes = $request->validate([
            'empoloyeeID' => 'required',
            'leaveType' => 'required',
            'startDate' => 'required',
            'finishDate' => 'required',
            'status' => 'required',
            'attatchment' => 'nullable|image',
            'halfDay' => 'nullable',
            'reason' => 'nullable'
        ]);
        // dd($attributes);
        if($request->file('attatchment')){
            $attributes['attatchment'] = request()->file('attatchment')->store('uploads');
        } else {
            $attributes['attatchment']='';
        }
        // $attributes['attatchment'] = request()->file('attatchment')->store('uploads');
        // dd($attributes);
        Leave::create($attributes);
        return redirect('leave')->with('success', "successfully done");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Leave $leave)
    {
        $leaves= Leave::with('team','leaveType')->where('empoloyeeID', $leave->empoloyeeID)->get();
        // dd($leaves);
        return view('leave.show', compact('leaves'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Leave $leave)
    {
        $teams = Team::all();
        $leave = Leave::with('team')->get();
        $leavtypes = LeaveType::all();
        return view('leave.edit', compact('teams','leavtypes','leave'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
