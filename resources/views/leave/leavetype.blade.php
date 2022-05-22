@extends('master')
@section('body')
<x-table link="leavetype/create" name="Add Leave Type" title="leaveType">
    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<thead>
    <tr>
        <th>Sl</th>
        <th>Leave TYPE</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($leaveTypes as  $leaveType)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{ucwords($leaveType->leaveType)}}</td>
            <td> <a href="/leavetype/{{$leaveType->id}}/edit/" target="_blank" rel="noopener noreferrer">Edit</a> |   
            <form action="/leavetype/{{$leaveType->id}}" method="post">
                @csrf
                @method('delete')
                <button> Delete</button>
            </form> 
                </td>
        </tr>
        @endforeach
</tbody>
</x-table>
@endsection