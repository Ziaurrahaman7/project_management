@extends('master')
@section('body')
{{-- <form method="post" action="/support" enctype="multipart/form-data">
    @csrf
    <input type="file" name="attatchment">
    <button type="submit">Submit</button>
</form> --}}
<x-form.form>
    <h3>Add support</h3>
        <form method="post" action="/support" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="form-check col-md-6 mt-3">
                <label>Select Client Name</label>
            <select name="client_id" class="form-select form-group col-6">
                <option value="">Client Name</option>
                @foreach ($clients as $client )
                <option value="{{$client->id}}">{{$client->first_name." ".$client->last_name}}</option>
                @endforeach
            </select>
            @error('client_id')
            <p style="color:red">{{$message}}</p>  
            @enderror
            </div>
            <div class="form-check col-md-6 mt-3">
                <label>Select Project Name</label>
                <select name="project_id" class="form-select form-group col-6">
                    <option value="">Select Project</option>
                    @foreach ($projects as $key=>$value )
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
                @error('project_id')
                <p style="color:red">{{$message}}</p>  
                @enderror
            </div>
            <div class="form-check col-md-6 mt-3">
                <label>Select Department</label>
               <select class="form-select form-group col-6" name="department">
                   <option value="support">Support</option>
                   <option value="test">Test</option>
               </select>
            </div>
            <div class="form-check col-md-6 mt-3">
                <label>Priority</label>
                <select  class="form-select form-group col-6"  name="priority">
                    <option value="normal">Normal</option>
                    <option value="high">High</option>
                    <option value="urgent">Urgent</option>
                </select>
             </div>
            <x-form.input  name="subject"/>
            <x-form.input type="file" name="fileName"/>
            <x-form.textarea  name="details"/>
           
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection