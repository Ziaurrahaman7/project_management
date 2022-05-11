@extends('master')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card p-3 mt-4">
                <h1>{{ $project->title }}</h1>
                <p><strong>Client:</strong> {{ $project->client }}</p>
                <p><strong>Start Date:</strong> {{ $project->start_date }}</p>
                <p><strong>project Deadline:</strong>{{ $project->deadline }}</p>
                <p><strong>Description:</strong> {{ $project->description }}</p>
                <p><strong>Tag:</strong> {{ $project->tag }}</p>
                <p><strong>Category:</strong> {{ $project->category }}</p>
                <p><strong>Assigned:</strong> {{ $project->assigned }}</p>
                <p><strong>Billing:</strong> {{ $project->billing }}</p>
                <p><strong>Billing Type:</strong> {{ $project->billing_type }}</p>
                <p><strong>Estimated Hours</strong> {{ $project->estimated__hours }}</p>
                <p><strong>Estimated Costs:</strong> {{ $project->estimated_costs }}</p>
                <p><strong>Quality Level:</strong> {{ $project->quality_level }}</p>
                <p><strong>Comments:</strong> {{ $project->comments }}</p>
                <p><a class="btn btn-info" href="/project/{{$project->id}}/edit/">Edit</a></p>
            </div>
        </div>
    </div>
</div>
@endsection