@extends('master')
@section('body')
<x-table link="support/create" name="Add support Type" title="support">
    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<thead>
    <tr>
        <th>Sl</th>
        <th>Client Name</th>
        <th>Project Name</th>
        <th>Support ID</th>
        <th>Priority</th>
        <th>Subject</th>
        <th>Details</th>
        <th>File</th>
        <th>Status</th>
        <th>Comment</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($supports as  $support)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{ucwords($support->project->title)}}</td>
            <td>{{ucwords($support->client->first_name." ".$support->client->last_name)}}</td>
            <td>{{ucwords($support->id)}}</td>
            <td>{{$support->priority}}</td>
            <td>{{$support->subject}}</td>
            <td>{{$support->details}}</td>
            <td>{{$support->fileName}}</td>
            <td>{{$support->status}}</td>
            <td>{{$support->comment}}</td>
            <td> <a href="/support/{{$support->id}}/edit/" target="_blank" rel="noopener noreferrer">Edit</a> |   
            <form action="/support/{{$support->id}}" method="post">
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