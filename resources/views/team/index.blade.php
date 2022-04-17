@extends('master')
@section('body')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Team</h1>
        <div class="card mb-4">
            <div class="card-body">
                <a target="_blank" class="btn btn-info" href="/team/create">Add Team Member</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($teams as  $team)
                        <tr>
                            <td>{{ucwords($team->first_name.".".$team->first_name)}}</td>
                            <td>{{$team->jobTitle}}</td>
                            <td>{{$team->email}}</td>
                            <td>{{$team->phone}}</td>
                            <td>Delete</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection