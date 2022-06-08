@extends('master')
@section('body')
<x-form.form>
    <h3>Add leave</h3>
        <form method="post" action="/leave/{{ $leave->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row mb-3">
            <div class="col-md-6  mt-3">
                <label for="role">Empoloyee Name</label>
                <div class="form-group">
                 <select name="empoloyeeID" id="role" class="form-select">
                    @foreach($teams as $team)
                    <?php print_r($team)?>
                    {{-- <option value="{{$team->id}}" {{old($leave->empoloyeeID, $leave->empoloyeeID)==$team->id ." ". $team->id ? 'selected':''}}>{{ $leave->team->first_name ." ". $leave->team->last_name }}</option> --}}
                    {{-- <option value="{{ $leave->assigned }}" {{old($leave->assigned, $leave->assigned)==$leave->assigned ? 'selected':''}}>johone1</option> --}}
                    @endforeach
                 </select>
                </div>
            </div>
            <div class="col-md-6  mt-3">
                <label for="role">leaveType</label>
                <div class="form-group">
                 <select name="leaveType" id="role" class="form-select">
                    @foreach($leavtypes as $leavtype)
                    <option value="{{ $leavtype->id }}" {{old($leavtype->id, $leavtype->id)==$leave->id ? 'selected':''}}>{{ $leave->leaveType }}</option>
                    {{-- <option value="{{ $leave->assigned }}" {{old($leave->assigned, $leave->assigned)==$leave->assigned ? 'selected':''}}>johone1</option> --}}
                    @endforeach
                 </select>
                </div>
            </div>
            <x-form.input type="date" name="startDate" :value="old('email',$leave->startDate)"/>
            <x-form.input type="date" name="finishDate" :value="old('phone', $leave->finishDate)"/>
                <x-form.input name="attatchment" type="file" :value="old('attatchment',$leave->attatchment)"/>
                    <img style="width:80px; height:80px" src="{{asset($leave->attatchment)}}">
                    <div class="col-md-6  mt-3">
                        <label for="role">Status</label>
                        <div class="form-group">
                         <select name="status" id="role" class="form-select">
                            <option value="active" {{old('active'== $leave->status ? 'selected':'')}}>Active</option>
                            <option value="inactive" {{old('status'== $leave->status ? 'selected':'')}}>Inactive</option>
                         </select>
                        </div>
                    </div>
            <x-form.input name="leaveValue" :value="old('leaveValue', $leave->leaveValue)"/>
            <x-form.textarea  name="note"/>

        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection