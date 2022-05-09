@extends('master')
@section('body')
<x-table link="lead/create" name="Add lead" title="lead">
    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<thead>
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Telephone</th>
        <th>Email</th>
        <th>Created</th>
        <th>Contacted</th>
        <th>Content Type</th>
        <th>Target Date</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($leads as  $lead)
        <tr>
            <td>{{ucwords($lead->title)}}</td>
            <td>{{ucwords($lead->status)}}</td>
            <td></td>
            <td>{{$lead->email}}</td>
            <td>{{$lead->created_at}}</td>
            <td>{{$lead->lastContacted}}</td>
            <td>{{$lead->contentType}}</td>
            <td>{{$lead->targetDate}}</td>
            <td> <a href="/lead/{{$lead->id}}/edit/" target="_blank" rel="noopener noreferrer">Edit</a> |   
            <form action="/lead/{{$lead->id}}" method="post">
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