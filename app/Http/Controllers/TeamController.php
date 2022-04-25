<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes=request()->validate([
            'first_name'=>'required|max:255',
            'last_name'=>'required|max:255',
            'address'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'jobTitle'=>'required',
            'sallary'=>'required',
            'dateofHire'=>'required',
            'email'=>['required', Rule::unique('teams','email')],
            'password'=>'required',
            'image'=>'required|image|max:2048|'
           ]);
           $attributes['image'] = request()->file('image')->store('uploads');
           //  dd($attributes);
            Team::create($attributes);
            return redirect('team')->with('success', 'successfully added');
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
    public function edit(Team $team)
    {
        return view('team/edit',['team'=>$team]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Team $team)
    {
        $attributes=request()->validate([
            'first_name'=>'required|max:255',
            'last_name'=>'required|max:255',
            'address'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'jobTitle'=>'required',
            'sallary'=>'required',
            'dateofHire'=>'required',
            'email'=>['required', Rule::unique('teams','email')->ignore($team->id)],
            'password'=>'required',
            'image'=>'image|max:2048|'
           ]);
           if(isset($attributes['image'])){
           $attributes['image'] = request()->file('image')->store('uploads');
           }
           $team->update($attributes);
           return redirect('team')->with('success', 'Update successfuly done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
       $team->delete();
       return back()->with('success', 'Delete successfully');
    }
}
