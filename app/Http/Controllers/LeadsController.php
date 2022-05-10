<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = Lead::all();
        return view('lead.index', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lead.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attributes=request()->validate([
            'title'=>'required',
            'leadValue'=>'required|int',
            'assigned'=>'required',
            'status'=>'required',
            'targetDate'=>'required',
            'email'=>'nullable|email',
            'phone'=>'nullable|int',
            'note'=>'nullable|string',
            'source'=>'nullable|string',
            'tag'=>'nullable|string',
            'lastContacted'=>'nullable|string',
            'totalBudget'=>'nullable|string',
            'contentType'=>'nullable|string',
            'companyName'=>'nullable|string',
            'street'=>'nullable|string',
            'city'=>'nullable|string',
            'state'=>'nullable|string',
            'zipcode'=>'nullable|string',
            'country'=>'nullable|string',
            'website'=>'nullable|string',
        ]);
        Lead::create($attributes);
        return redirect('lead')->with('success', 'successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
       return view('lead.show',['lead'=>$lead]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
      return view('lead.edit', ['lead'=>$lead]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Lead $lead)
    {
        $attributes=request()->validate([
            'title'=>'required',
            'leadValue'=>'required|int',
            'assigned'=>'required',
            'status'=>'required',
            'targetDate'=>'required',
            'email'=>'nullable|email',
            'phone'=>'nullable|int',
            'note'=>'nullable|string',
            'source'=>'nullable|string',
            'tag'=>'nullable|string',
            'lastContacted'=>'nullable|string',
            'totalBudget'=>'nullable|string',
            'contentType'=>'nullable|string',
            'companyName'=>'nullable|string',
            'street'=>'nullable|string',
            'city'=>'nullable|string',
            'state'=>'nullable|string',
            'zipcode'=>'nullable|string',
            'country'=>'nullable|string',
            'website'=>'nullable|string',
        ]);
        $lead->update($attributes);
        return redirect('lead')->with('success', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect('lead')->with('success', 'successfully deleted');
    }
}
