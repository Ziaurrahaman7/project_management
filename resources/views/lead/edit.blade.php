@extends('master')
@section('body')
<x-form.form>
    <h3>Add Lead</h3>
        <form method="post" action="/lead/{{ $lead->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row mb-3">
            <x-form.input name="title"  :value="old('title',$lead->title)"/>
            <x-form.input type="email" name="email" :value="old('email',$lead->email)"/>
            <x-form.input name="phone" :value="old('phone', $lead->phone)"/>
            <x-form.input name="leadValue" :value="old('leadValue', $lead->leadValue)"/>
            <div class="col-md-6  mt-3">
                <label for="role">Assigned</label>
                <div class="form-group">
                 <select name="assigned" id="role" class="form-select">
                    @foreach(App\Models\Team::all() as $team)
                    <option value="{{ $team->first_name ." ". $team->last_name }}" {{old($lead->assigned, $lead->assigned)==$team->first_name ." ". $team->last_name ? 'selected':''}}>{{ $team->first_name ." ". $team->last_name }}</option>
                    {{-- <option value="{{ $lead->assigned }}" {{old($lead->assigned, $lead->assigned)==$lead->assigned ? 'selected':''}}>johone1</option> --}}
                    @endforeach
                 </select>
                </div>
            </div>
            <div class="col-md-6  mt-3">
                <label for="role">Status</label>
                <div class="form-group">
                 <select name="status" id="role" class="form-select">
                     <option value="1" {{old(1, $lead->status)==$lead->status ? 'selected':''}}>New</option>
                     <option value="2" {{old(2, $lead->status)==$lead->status ? 'selected':''}}>Converted</option>
                     <option value="3" {{old(3, $lead->status)==$lead->status ? 'selected':''}}>Qualified</option>
                     <option value="4" {{old(4, $lead->status)==$lead->status ? 'selected':''}}>Proposal Sent</option>
                     <option value="5" {{old(5, $lead->status)==$lead->status ? 'selected':''}}>Contacted</option>
                     <option value="6" {{old(6, $lead->status)==$lead->status ? 'selected':''}}>Disqalified</option>
                 </select>
                </div>
            </div>
            <x-form.textarea  name="note"/>
            <div class="col-md-6  mt-3">
                <label for="role">Source</label>
                <div class="form-group">
                 <select name="source" id="role" class="form-select">
                     <option value="1" {{old(1, $lead->source)==$lead->source ? 'selected':''}}>Google</option>
                     <option value="2" {{old(2, $lead->source)==$lead->source ? 'selected':''}}>Yahoo</option>
                     <option value="3" {{old(3, $lead->source)==$lead->source ? 'selected':''}}>Facebook</option>
                     <option value="4" {{old(4, $lead->source)==$lead->source ? 'selected':''}}>Linkadin</option>
                     <option value="5" {{old(5, $lead->source)==$lead->source ? 'selected':''}}>Youtube</option>
                     <option value="6" {{old(6, $lead->source)==$lead->source ? 'selected':''}}>Pinterest</option>
                 </select>
                </div>
            </div>
            <x-form.input name="tag" :value="old('tag', $lead->tag)"/>
            <x-form.input type="date" name="lastContacted" :value="old('lastContacted', $lead->lastContacted)"/>
            <x-form.input name="totalBudget" :value="old('totalBudget', $lead->totalBudget)"/>
            <x-form.input type="date" name="targetDate" :value="old('targetDate', $lead->targetDate)"/>
            <div class="col-md-6  mt-3">
                <label for="role">Content Type</label>
                <div class="form-group">
                 <select name="contentType" id="role" class="form-select">
                     <option value="1"  {{old(1, $lead->contentType)==$lead->contentType ? 'selected':''}}>Blog Post</option>
                     <option value="2"  {{old(2, $lead->contentType)==$lead->contentType ? 'selected':''}}>Recharce</option>
                     <option value="3"  {{old(3, $lead->contentType)==$lead->contentType ? 'selected':''}}>Product Description</option>
                     <option value="4"  {{old(4, $lead->contentType)==$lead->contentType ? 'selected':''}}>White Paper</option>
                     <option value="5"  {{old(5, $lead->contentType)==$lead->contentType ? 'selected':''}}>Script</option>
                 </select>
                </div>
            </div>
            <x-form.input name="companyName" :value="old('companyName', $lead->companyName)"/>
            <x-form.input name="street" :value="old('street', $lead->street)"/>
            <x-form.input name="city" :value="old('city', $lead->city)"/>
            <x-form.input name="state" :value="old('state', $lead->state)"/>
            <x-form.input name="zipcode" :value="old('zipcode', $lead->zipcode)"/>
            <x-form.input name="country" :value="old('country', $lead->country)"/>
            <x-form.input name="website" :value="old('website', $lead->website)"/>
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection