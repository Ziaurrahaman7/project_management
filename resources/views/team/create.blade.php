@extends('master')
@section('body')
<x-form.form>
    <h3>Create Team</h3>
        <form method="post" action="/team" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <x-form.input name="first_name"/>
            <x-form.input name="last_name"/>
            <x-form.input name="phone"/>
            <x-form.input name="jobTitle"/>
            <x-form.input name="sallary"/>
            <x-form.input name="sallaryTerm"/>
            <x-form.input name="dateofHire" type="date"/>
            <div class="col-md-6  mt-3">
                <label for="role">Role</label>
                <div class="form-group">
                 <select id="role" class="form-select">
                     <option value="1">Admin</option>
                     <option value="2">Manager</option>
                     <option value="3">Developer</option>
                 </select>
                </div>
            </div>
            <x-form.input name="email" type="email"/>
            <x-form.input name="image" type="file"/>
            <x-form.textarea  name="address"/>
            <x-form.input type="password" name="password"/>
            <x-form.gender  name="gender"/>
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection