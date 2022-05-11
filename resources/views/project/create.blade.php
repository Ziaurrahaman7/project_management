@extends('master')
@section('body')
<x-form.form>
    <h3>Add project</h3>
        <form method="post" action="/project" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6  mt-3">
                <label for="role">Client</label>
                <div class="form-group">
                 <select name="client" id="role" class="form-select">
                    @foreach(App\Models\Client::all() as $client)
                    <option value="{{ $client->first_name ." ". $client->last_name }}">{{ $client->first_name ." ". $client->last_name }}</option>
                    @endforeach
                 </select>
                </div>
            </div>
            <x-form.input name="title"/>
            <x-form.input type="date" name="start_date"/>
            <x-form.input type="date" name="deadline"/>
            <x-form.textarea  name="description"/>
            <x-form.input name="tag"/>
            <div class="col-md-6  mt-3">
                <label for="role">category</label>
                <div class="form-group">
                 <select name="category" id="role" class="form-select">
                     <option value="1">Web Design</option>
                     <option value="2">Web Development</option>
                     <option value="3">App Development</option>
                     <option value="4">E-commerce</option>
                     <option value="5">HRM</option>
                     <option value="6">Boot</option>
                 </select>
                </div>
            </div>
            <div class="col-md-6  mt-3">
                <label for="role">Assigned</label>
                <div class="form-group">
                 <select name="assigned" id="role" class="form-select">
                    @foreach(App\Models\Team::all() as $team)
                    <option value="{{ $team->first_name ." ". $team->last_name }}">{{ $team->first_name ." ". $team->last_name }}</option>
                    @endforeach
                 </select>
                </div>
            </div>
            <div class="col-md-6  mt-3">
                <label for="role">Status</label>
                <div class="form-group">
                 <select name="status" id="role" class="form-select">
                     <option value="in_progress">In_progress</option>
                     <option value="hold">On Hold</option>
                     <option value="completed">Completed</option>
                     <option value="cancel">Cancel</option>
                 </select>
                </div>
            </div>
            <x-form.input name="billing"/>
            <div class="col-md-6  mt-3">
                <label for="role">Biling Type</label>
                <div class="form-group">
                 <select name="billing_type" id="role" class="form-select">
                     <option value="fixed">Fixed</option>
                     <option value="hourly">Hourly</option>
                 </select>
                </div>
            </div>
            <x-form.input name="estimated__hours"/>
            <x-form.input name="estimated_costs"/>
            <x-form.input name="total_images"/>
            <x-form.input name="total_pages"/>
            <div class="col-md-6  mt-3">
                <label for="role">quality_level</label>
                <div class="form-group">
                 <select name="quality_level" id="role" class="form-select">
                     <option value="1">premium</option>
                     <option value="2">Standard</option>
                 </select>
                </div>
            </div>
            <x-form.textarea  name="comments"/>
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection