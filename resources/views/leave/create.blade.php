@extends('master')
@section('body')
{{-- <form method="post" action="/leave" enctype="multipart/form-data">
    @csrf
    <input type="file" name="attatchment">
    <button type="submit">Submit</button>
</form> --}}
<x-form.form>
    <h3>Add leave</h3>
        <form method="post" action="/leave" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="form-check col-md-6 mt-3">
            <select name="empoloyeeID" class="form-select form-group col-6">
                <option value="">Empoloyee Name</option>
                @foreach ($teams as $team )
                <option value="{{$team->id}}">{{$team->first_name." ".$team->last_name}}</option>
                @endforeach
            </select>
            @error('empoloyeeID')
            <p style="color:red">{{$message}}</p>  
            @enderror
            </div>
            <div class="form-check col-md-6 mt-3">
                <select name="leaveType" class="form-select form-group col-6">
                    <option value="">leavtypes</option>
                    @foreach ($leavtypes as $leavtype )
                    <option value="{{$leavtype->id}}">{{$leavtype->leaveType}}</option>
                    @endforeach
                </select>
                @error('leaveType')
                <p style="color:red">{{$message}}</p>  
                @enderror
                </div>
            <x-form.input type="date" name="startDate"/>
            <x-form.input type="date" name="finishDate"/>
            <x-form.input type="file" name="attatchment"/>
            <div class="form-check col-md-12 mt-3">
                <select name="status" class="form-select form-group col-6">
                    <option value="active">Active</option>
                    <option value="inactive">InActive</option>
                </select>
                <div class="form-group col-6">
                    <label class="form-check-label" for="halfday">HalfDay</label>
                <input value="halfday" type="checkbox" name="halfDay" id="halfday">   
                </div>
            </div>
            <x-form.textarea  name="reason"/>
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection