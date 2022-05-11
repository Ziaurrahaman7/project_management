@extends('master')
@section('body')
<x-table link="project/create" name="Add project" title="project">
    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<thead>
    <tr>
        <th>Title</th>
        <th>Client</th>
        <th>Due Date</th>
        <th>Assigned</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($projects as  $project)
        <tr>
            <td>{{ucwords($project->title)}}</td>
            <td>{{ucwords($project->client)}}</td>
            <td>{{$project->deadline}}</td>
            <td>{{$project->assigned}}</td>
            <td>{{$project->status}}</td>
            <td><a href="/project/{{$project->id}}" target="_blank" rel="noopener noreferrer">View</a> | <a href="/project/{{$project->id}}/edit/" target="_blank" rel="noopener noreferrer">Edit</a> |   
            <form action="/project/{{$project->id}}" method="post">
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