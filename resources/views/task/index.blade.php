@extends('master')
@section('body')
<x-table link="task/create" name="Add task Type" title="task">
    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<thead>
    <tr>
        <th>Sl</th>
        <th>Title</th>
        <th>Client Name</th>
        <th>Project Name</th>
        <th>Priority</th>
        <th>Summury</th>
        <th>Assaign</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($tasks as  $task)
    
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{ucwords($task->title)}}</td>
            <td>{{ucwords($task->project->title)}}</td>
            <td>{{ucwords($task->client->first_name." ".$task->client->last_name)}}</td>
            <td>{{$task->priority}}</td>
            <td>{{$task->summary}}</td>
            @foreach ($task->team as $team)
            <td>{{$team->pivot->team_id}}</td>  
            @endforeach
           
            <td>{{$task->status}}</td>
            <td> <a href="/task/{{$task->id}}/edit/" target="_blank" rel="noopener noreferrer">Edit</a> |   
            <form action="/task/{{$task->id}}" method="post">
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