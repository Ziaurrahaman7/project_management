@extends('master')
@section('body')
<x-form.form>
    <h3>Add leave</h3>
        <form method="post" action="/leave" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <x-form.input name="empoloyeeName"/>
            <x-form.input name="dasignation"/>
            <x-form.input name="leaveType"/>
            <x-form.input type="date" name="startDate"/>
            <x-form.input type="date" name="finishDate"/>
            <x-form.input type="file" name="attatchment"/>
            <div class="form-check col-md-12 mt-3">
                <div class="form-group col-6">
                <input class="" type="checkbox" name="halfDay" id="halfday"> 
                <label class="form-check-label" for="halfday">HalfDay</label>
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