@extends('master')
@section('body')
<x-form.form>
    <h3>Add project</h3>
        <form method="post" action="/project/{{ $project->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row mb-3">
            <div class="col-md-6  mt-3">
                <label for="role">client</label>
                <div class="form-group">
                 <select name="client" id="role" class="form-select">
                    @foreach(App\Models\Client::all() as $client)
                    <option value="{{ $team->first_name ." ". $team->last_name }}" {{old($project->assigned, $project->assigned)==$team->first_name ." ". $team->last_name ? 'selected':''}}>{{ $team->first_name ." ". $team->last_name }}</option>
                    {{-- <option value="{{ $project->assigned }}" {{old($project->assigned, $project->assigned)==$project->assigned ? 'selected':''}}>johone1</option> --}}
                    @endforeach
                 </select>
                </div>
            </div>
            <x-form.input name="title"  :value="old('title',$project->title)"/>
            <x-form.input type="start_date" name="date" :value="old('start_date',$project->start_date)"/>
            <x-form.input name="phone" :value="old('phone', $project->phone)"/>
            <x-form.input name="projectValue" :value="old('projectValue', $project->projectValue)"/>
            <div class="col-md-6  mt-3">
                <label for="role">Assigned</label>
                <div class="form-group">
                 <select name="assigned" id="role" class="form-select">
                    @foreach(App\Models\Team::all() as $team)
                    <option value="{{ $team->first_name ." ". $team->last_name }}" {{old($project->assigned, $project->assigned)==$team->first_name ." ". $team->last_name ? 'selected':''}}>{{ $team->first_name ." ". $team->last_name }}</option>
                    {{-- <option value="{{ $project->assigned }}" {{old($project->assigned, $project->assigned)==$project->assigned ? 'selected':''}}>johone1</option> --}}
                    @endforeach
                 </select>
                </div>
            </div>
            <div class="col-md-6  mt-3">
                <label for="role">Status</label>
                <div class="form-group">
                 <select name="status" id="role" class="form-select">
                     <option value="1" {{old(1, $project->status)==$project->status ? 'selected':''}}>New</option>
                     <option value="2" {{old(2, $project->status)==$project->status ? 'selected':''}}>Converted</option>
                     <option value="3" {{old(3, $project->status)==$project->status ? 'selected':''}}>Qualified</option>
                     <option value="4" {{old(4, $project->status)==$project->status ? 'selected':''}}>Proposal Sent</option>
                     <option value="5" {{old(5, $project->status)==$project->status ? 'selected':''}}>Contacted</option>
                     <option value="6" {{old(6, $project->status)==$project->status ? 'selected':''}}>Disqalified</option>
                 </select>
                </div>
            </div>
            <x-form.textarea  name="note"/>
            <div class="col-md-6  mt-3">
                <label for="role">Source</label>
                <div class="form-group">
                 <select name="source" id="role" class="form-select">
                     <option value="1" {{old(1, $project->source)==$project->source ? 'selected':''}}>Google</option>
                     <option value="2" {{old(2, $project->source)==$project->source ? 'selected':''}}>Yahoo</option>
                     <option value="3" {{old(3, $project->source)==$project->source ? 'selected':''}}>Facebook</option>
                     <option value="4" {{old(4, $project->source)==$project->source ? 'selected':''}}>Linkadin</option>
                     <option value="5" {{old(5, $project->source)==$project->source ? 'selected':''}}>Youtube</option>
                     <option value="6" {{old(6, $project->source)==$project->source ? 'selected':''}}>Pinterest</option>
                 </select>
                </div>
            </div>
            <x-form.input name="tag" :value="old('tag', $project->tag)"/>
            <x-form.input type="date" name="lastContacted" :value="old('lastContacted', $project->lastContacted)"/>
            <x-form.input name="totalBudget" :value="old('totalBudget', $project->totalBudget)"/>
            <x-form.input type="date" name="targetDate" :value="old('targetDate', $project->targetDate)"/>
            <div class="col-md-6  mt-3">
                <label for="role">Content Type</label>
                <div class="form-group">
                 <select name="contentType" id="role" class="form-select">
                     <option value="1"  {{old(1, $project->contentType)==$project->contentType ? 'selected':''}}>Blog Post</option>
                     <option value="2"  {{old(2, $project->contentType)==$project->contentType ? 'selected':''}}>Recharce</option>
                     <option value="3"  {{old(3, $project->contentType)==$project->contentType ? 'selected':''}}>Product Description</option>
                     <option value="4"  {{old(4, $project->contentType)==$project->contentType ? 'selected':''}}>White Paper</option>
                     <option value="5"  {{old(5, $project->contentType)==$project->contentType ? 'selected':''}}>Script</option>
                 </select>
                </div>
            </div>
            <x-form.input name="companyName" :value="old('companyName', $project->companyName)"/>
            <x-form.input name="street" :value="old('street', $project->street)"/>
            <x-form.input name="city" :value="old('city', $project->city)"/>
            <x-form.input name="state" :value="old('state', $project->state)"/>
            <x-form.input name="zipcode" :value="old('zipcode', $project->zipcode)"/>
            <x-form.input name="country" :value="old('country', $project->country)"/>
            <x-form.input name="website" :value="old('website', $project->website)"/>
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection