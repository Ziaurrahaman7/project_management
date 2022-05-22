@extends('master')
@section('body')
<x-form.form>
    <h3>Add Leave Type</h3>
        <form method="post" action="/leavetype" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
           <div class="col-6">
            <x-form.input class="col-12" name="leaveType"/>
            <div class="mt-4 col-12 mb-0">
                <x-form.button>Submit</x-form.button>
             </div>
           </div>
        </div>
       
    </form>
</x-form.form>
@endsection