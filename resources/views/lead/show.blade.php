@extends('master')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card p-3 mt-4">
                <h1> {{ $lead->title }}</h1>
                <p>Email: {{ $lead->email }}</p>
                <p>Phone: {{ $lead->phone }}</p>
                <p>Lead Value{{ $lead->leadValue }}</p>
                <p>Assigned: {{ $lead->assigned }}</p>
                <p>Note: {{ $lead->note }}</p>
                <p>Status: {{ $lead->status }}</p>
                <p>Source: {{ $lead->source }}</p>
                <p>Tag: {{ $lead->tag }}</p>
                <p>Target Date: {{ $lead->targetDate }}</p>
                <p>Last Contacted {{ $lead->lastContacted }}</p>
                <p>Total Budget: {{ $lead->totalBudget }}</p>
                <p>Content Type: {{ $lead->contentType }}</p>
                <p>Company Name: {{ $lead->companyName }}</p>
                <p>Street: {{ $lead->street }}</p>
                <p>City: {{ $lead->city }}</p>
                <p>State: {{ $lead->state }}</p>
                <p>Zipcode: {{ $lead->zipcode }}</p>
                <p>Country: {{ $lead->country }}</p>
                <p>Website: {{ $lead->website }}</p>
                <p><a class="btn btn-info" href="/lead/{{$lead->id}}/edit/">Edit</a></p>
            </div>
        </div>
    </div>
</div>
@endsection