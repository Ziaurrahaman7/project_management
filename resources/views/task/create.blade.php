@extends('master')
@section('body')
{{-- <form method="post" action="/task" enctype="multipart/form-data">
    @csrf
    <input type="file" name="attatchment">
    <button type="submit">Submit</button>
</form> --}}
<x-form.form>
    <h3>Add task</h3>
        <form method="post" action="/task" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <x-form.input  name="title"/>
            <x-form.input type="date"  name="startDate"/>
            <x-form.input type="date"  name="endDate"/>
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
                <label>Assaign Team Member</label>
                @foreach ($teams as $team )
               <div class="d-flex">
                <input style="margin-right: 10px" type="checkbox" name="team_id[]" id="{{$team->id}}" value="{{$team->id}}" class="form-check">
                <label for="{{$team->id}}">{{ucwords($team->first_name ." ".$team->last_name)}}</label>
               </div>
                @endforeach
                @error('team_id')
                <p style="color:red">{{$message}}</p>  
                @enderror
            </div>
            <x-form.textarea  name="summary"/>
            <div class="form-check col-md-6 mt-3">
                <label>Priority</label>
                <select  class="form-select form-group col-6"  name="priority">
                    <option value="normal">Normal</option>
                    <option value="high">High</option>
                    <option value="urgent">Urgent</option>
                </select>
             </div>
             <div class="form-check col-md-6 mt-3">
                <label>Status</label>
               <select class="form-select form-group col-6" name="status">
                   <option value="on-hold">On-Hold</option>
                   <option value="complete">Complete</option>
                   <option value="cancel">cancel</option>
                   <option value="on-review">On-review</option>
               </select>
            </div>
            <x-form.textarea  name="description"/>
           
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection