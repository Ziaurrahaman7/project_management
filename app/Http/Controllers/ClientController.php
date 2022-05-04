<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $attributes = request()->validate([
            'company_name'=>'required',
            'first_name'=>'required',
            'email'=>'required',
            'billing_zipcode'=>'required',
            'billing_country'=>'required',
            'billing_telephone'=>'required',
            'billing_city'=>'required',
            'shipping_zipcode'=>'required',
            'shipping_country'=>'required',
            'shipping_telephone'=>'required',
            'shipping_city'=>'required',
            'project_type'=>'required',
            'details'=>'required',
            'tag'=>['nullable','string'],
            'billing_streat'=>'nullable|string',
            'billing_state'=>'nullable|string',
            'billing_website'=>'nullable|string',
            'tax_number'=>'nullable|string',
            'shipping_streat'=>'nullable|string',
            'shipping_state'=>'nullable|string',
            'shipping_website'=>'nullable|string',
            'lastproject'=>'nullable|string',
            'comment'=>'nullable|string',
            'image'=>'required|image'

        ]);
        // dd($attributes);
        $attributes['image'] = request()->file('image')->store('uploads');;
         Client::create($attributes);
         return redirect('client')->with('success', 'successfully added');
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
    public function edit(Client $client)
    {
        return view('client/edit',['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Client $client)
    {
        $attributes = request()->validate([
            'company_name'=>'required',
            'first_name'=>'required',
            'email'=>'required',
            'billing_zipcode'=>'required',
            'billing_country'=>'required',
            'billing_telephone'=>'required',
            'billing_city'=>'required',
            'shipping_zipcode'=>'required',
            'shipping_country'=>'required',
            'shipping_telephone'=>'required',
            'shipping_city'=>'required',
            'project_type'=>'required',
            'details'=>'required',
            'tag'=>'nullable|string',
            'billing_streat'=>'nullable|string',
            'billing_state'=>'nullable|string',
            'billing_website'=>'nullable|string',
            'tax_number'=>'nullable|string',
            'shipping_streat'=>'nullable|string',
            'shipping_state'=>'nullable|string',
            'shipping_website'=>'nullable|string',
            'lastproject'=>'nullable|string',
            'comment'=>'nullable|string',
            'image'=>'image'

        ]);
        // dd($attributes);
        if(isset($attributes['image'])){
            $attributes['image'] = request()->file('image')->store('uploads');
            }
        $client->update($attributes);
         return redirect('client')->with('success', 'successfully added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
       return back()->with('success', 'Delete successfully');
    }
}
