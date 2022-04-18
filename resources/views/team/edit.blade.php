@extends('master')
@section('body')
<x-form.form>
    <h3>Edit Team</h3>
        <form method="post" action="/team" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <x-form.input name="first_name" :value="old('first_name',$team->first_name)"/>
            <x-form.input name="last_name" :value="old('last_name',$team->last_name)"/>
            <x-form.input name="phone" :value="old('phone',$team->phone_name)"/>
            <x-form.input name="jobTitle" :value="old('jobTitle',$team->jobTitle)"/>
            <x-form.input name="sallary" :value="old('sallary',$team->sallary)"/>
            <x-form.input name="sallaryTerm" :value="old('sallaryTerm',$team->sallaryTerm)"/>
            <x-form.input name="dateofHire" type="date" :value="old('dateofHire',$team->dateofHire)"/>
            <div class="col-md-6  mt-3">
                <div class="form-group">
                 <label for="role">Role</label>
                 <select id="role" class="form-select">
                    <option value="1" {{old(1, $team->role)==$team->role ? 'selected':''}}>Admin</option>
                    <option value="2" {{old(2, $team->role)==$team->role ? 'selected':''}}>Manager</option>
                    <option value="3" {{old(3, $team->role)==$team->role ? 'selected':''}}>Developer</option>
                </select>
                </div>
            </div>
            <x-form.input name="email" type="email" :value="old('email',$team->email)"/>
            <x-form.input name="image" type="file" :value="old('image',$team->image)"/>
            <x-form.textarea  name="address">{{old('address',$team->address)}}</x-form.textarea>
            <x-form.input type="password" name="password"  :value="old('password',$team->password)"/>
           <div class="col-md-6 mt-3">
            <div class="mb-3 mb-md-0">
                <x-form.label for="gender" name="gender"/>
                <label for="inputradio"> Male    <input name="gender" id="inputradio" value="male" {{old('male', $team->gender)==$team->gender ? 'checked':''}} type="radio" /></label>
            
                <label for="inputradio"> Female   <input  name="gender"  id="inputradio" value="female" {{old('female', $team->gender)==$team->gender ? 'checked':''}} type="radio"/></label>
                <x-form.eror name="gender"/>
            </div>
        </div>
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection