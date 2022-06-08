@extends('master')
@section('body')
<x-table link="leave" name="Back" title="Leave">
    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<thead>
    <tr>
        <th>Sl</th>
        <th>Employee</th>
        <th>dasignation</th>
        <th>Leave Type</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Days</th>
        <th>Status</th>
    </tr>
</thead>
<tbody>
    @foreach ($leaves as  $leave)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{ucwords($leave->team->first_name." ".$leave->team->first_name)}}</td>
            <td>{{ucwords($leave->team->jobTitle)}}</td>
            <td>{{$leave->leavetype->leaveType}}</td>
            <td>{{$leave->startDate}}</td>
            <td>{{$leave->finishDate}}</td>
            @php
               $fdate = $leave->startDate;
                $tdate = $leave->finishDate;
                $datetime1 = new DateTime($fdate);
                $datetime2 = new DateTime($tdate);
                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a'); 
            @endphp
            <td>{{$days}}</td>
            <td>{{$leave->status}}</td>
            {{-- <td> <a href="/leave/{{$leave->id}}/edit/" target="_blank" rel="noopener noreferrer">Edit</a> |   
            <form action="/leave/{{$leave->id}}" method="post">
                @csrf
                @method('delete')
                <button> Delete</button>
            </form> 
                </td> --}}
        </tr>
        @endforeach
</tbody>
</x-table>
@endsection