@extends('master')
@section('body')
<x-form.form>
    <h3>Add support</h3>
        <form method="post" action="/support/{{ $support->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row mb-3">
                    <div class="col-md-6  mt-3">
                        <label for="role">Department</label>
                        <div class="form-group">
                         <select name="department" id="role" class="form-select">
                            <option value="support" {{old("support", $support->status)==$support->status ? 'selected':''}}>Support</option>
                            <option value="test" {{old("test", $support->status)==$support->status ? 'selected':''}}>Test</option>
                         </select>
                        </div>
                    </div>
                    <div class="col-md-6  mt-3">
                        <label for="role">Status</label>
                        <div class="form-group">
                         <select name="status" id="role" class="form-select">
                            <option value="1" {{old(1, $support->status)==$support->status ? 'selected':''}}>Solved</option>
                            <option value="0" {{old(0, $support->status)==$support->status ? 'selected':''}}>Pending</option>
                         </select>
                        </div>
                    </div>
                    <x-form.textarea  name="comment">{{old('comment',$support->comment)}}</x-form.textarea>
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection