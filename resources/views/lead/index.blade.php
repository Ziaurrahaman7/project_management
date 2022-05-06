@extends('master')
@section('body')
<x-table link="/ /create" name="Add Lead" title="Lead">
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
    @foreach ($Leads as  $Lead)
        <tr>
            <td>{{ucwords($Lead->title)}}</td>
            <td>{{ucwords($Lead->status)}}</td>
            <td>{{$Lead->email}}</td>
            <td>{{$Lead->shipping_telephone}}</td>
            <td>{{$Lead->project_type}}</td>
            <td> <a href="/Lead/{{$Lead->id}}/edit/" target="_blank" rel="noopener noreferrer">Edit</a> | 
                
                <form action="/Lead/{{$Lead->id}}" method="post">
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