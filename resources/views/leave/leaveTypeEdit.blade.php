@extends('master')
@section('body')
<x-form.form>
    <h3>Edit Leave Type</h3>
        <form method="post" action="/leavetype/{{$leaveType->id}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row mb-3">
            <x-form.input name="leaveType" :value="old('leaveType',$leaveType->leaveType)"/>
    
        <div class="mt-4 mb-0">
           <x-form.button>Update</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection