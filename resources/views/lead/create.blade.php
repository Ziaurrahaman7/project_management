@extends('master')
@section('body')
<x-form.form>
    <h3>Add Lead</h3>
        <form method="post" action="/lead" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <x-form.input name="title"/>
            <x-form.input name="email"/>
            <x-form.input name="leadValue"/>
            <div class="col-md-6  mt-3">
                <label for="role">Assigned</label>
                <div class="form-group">
                 <select name="assigned" id="role" class="form-select">
                     <option value="1">johone1</option>
                     <option value="2">johone2</option>
                     <option value="3">jhon3</option>
                 </select>
                </div>
            </div>
            <div class="col-md-6  mt-3">
                <label for="role">Status</label>
                <div class="form-group">
                 <select name="status" id="role" class="form-select">
                     <option value="1">New</option>
                     <option value="2">Converted</option>
                     <option value="3">Qualified</option>
                     <option value="4">Proposal Sent</option>
                     <option value="5">Contacted</option>
                     <option value="6">Disqalified</option>
                 </select>
                </div>
            </div>
            <x-form.textarea  name="note"/>
            <div class="col-md-6  mt-3">
                <label for="role">Source</label>
                <div class="form-group">
                 <select name="source" id="role" class="form-select">
                     <option value="1">Google</option>
                     <option value="2">Yahoo</option>
                     <option value="3">Facebook</option>
                     <option value="4">Linkadin</option>
                     <option value="5">Youtube</option>
                     <option value="6">Pinterest</option>
                 </select>
                </div>
            </div>
            <x-form.input name="tag"/>
            <x-form.input type="date" name="lastContacted"/>
            <x-form.input name="totalBudget"/>
            <x-form.input type="date" name="targetDate"/>
            <div class="col-md-6  mt-3">
                <label for="role">Content Type</label>
                <div class="form-group">
                 <select name="contentType" id="role" class="form-select">
                     <option value="1">Blog Post</option>
                     <option value="2">Recharce</option>
                     <option value="3">Product Description</option>
                     <option value="4">White Paper</option>
                     <option value="5">Script</option>
                 </select>
                </div>
            </div>
            <x-form.input name="companyName"/>
            <x-form.input name="street"/>
            <x-form.input name="city"/>
            <x-form.input name="state"/>
            <x-form.input name="zipcode"/>
            <x-form.input name="country"/>
            <x-form.input name="website"/>
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection