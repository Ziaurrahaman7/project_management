@extends('master')
@section('body')
<x-table link="/team/create" name="Add Team" title="Team">
    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<thead>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($teams as  $team)
        <tr>
            <td>{{ucwords($team->first_name.".".$team->first_name)}}</td>
            <td>{{$team->jobTitle}}</td>
            <td>{{$team->email}}</td>
            <td>{{$team->phone}}</td>
            <td> <a href="/team/{{$team->id}}/edit/" target="_blank" rel="noopener noreferrer">Edit</a> | 
                
                <form action="/team/{{$team->id}}" method="post">
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