@extends('master')
@section('body')
<x-table link="/client/create" name="Add Client" title="Client">
    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<thead>
    <tr>
        <th>Company Name</th>
        <th>Client Name</th>
        <th>Image</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Project Type</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($clients as  $client)
        <tr>
            <td>{{ucwords($client->company_name)}}</td>
            <td> <img style="width:80px; height:80px" src="{{asset($client->image)}}"></td>
            <td>{{$client->email}}</td>
            <td>{{$client->shipping_telephone}}</td>
            <td>{{$client->project_type}}</td>
            <td> <a href="/client/{{$client->id}}/edit/" target="_blank" rel="noopener noreferrer">Edit</a> | 
                
                <form action="/client/{{$client->id}}" method="post">
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