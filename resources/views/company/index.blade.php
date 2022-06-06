@extends('master')
@section('body')
<x-table link="/company/create" name="Add company" title="company">
    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<thead>
    <tr>
        <th>Company Name</th>
        <th>Company Email</th>
        <th>Company Phone</th>
        <th>Company Department</th>
        <th>Phone</th>
        <th>Project Type</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($companies as  $company)
        <tr>
            <td>{{ucwords($company->companyName)}}</td>
            <td>{{$company->companyEmail}}</td>
            <td>{{$company->companyPhone}}</td>
            <td>{{$company->department}}</td>
            <td>{{$company->company_Location}}</td>
            <td> <a href="/company/{{$company->id}}/edit/" target="_blank" rel="noopener noreferrer">Edit</a> | 
                
                <form action="/company/{{$company->id}}" method="post">
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