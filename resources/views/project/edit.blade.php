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
                    <option value="{{ $client->first_name ." ". $client->last_name }}" {{old($project->assigned, $project->assigned)==$client->first_name ." ". $client->last_name ? 'selected':''}}>{{ $client->first_name ." ". $client->last_name }}</option>
                    {{-- <option value="{{ $project->assigned }}" {{old($project->assigned, $project->assigned)==$project->assigned ? 'selected':''}}>johone1</option> --}}
                    @endforeach
                 </select>
                </div>
            </div>
            <x-form.input name="title"  :value="old('title',$project->title)"/>
            <x-form.input type="date" name="start_date" :value="old('start_date', $project->start_date)"/>    
            <x-form.input type="date" name="deadline" :value="old('deadline',$project->deadline)"/>
            <x-form.textarea  name="description">{{ old('deadline',$project->description) }}</x-form.textarea>   
            <x-form.input name="tag" :value="old('tag', $project->tag)"/>
                <div class="col-md-6  mt-3">
                    <label for="role">category</label>
                    <div class="form-group">
                     <select name="category" id="role" class="form-select">
                         <option value="1" {{old(1, $project->category)==$project->category ? 'selected':''}}>Web Design</option>
                         <option value="2"  {{old(2, $project->category)==$project->category ? 'selected':''}}>Web Development</option>
                         <option value="3"  {{old(3, $project->category)==$project->category ? 'selected':''}}>App Development</option>
                         <option value="4" {{old(4, $project->category)==$project->category ? 'selected':''}} >E-commerce</option>
                         <option value="5"  {{old(5, $project->category)==$project->category ? 'selected':''}}>HRM</option>
                         <option value="6"  {{old(6, $project->category)==$project->category ? 'selected':''}}>Boot</option>
                     </select>
                    </div>
                </div>

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
            <x-form.input name="billing" :value="old('billing', $project->billing)"/>
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
            <div class="col-md-6  mt-3">
                <label for="role">billing_type</label>
                <div class="form-group">
                 <select name="billing_type" id="role" class="form-select">
                     <option value="1" {{old('fixed', $project->billing_type)==$project->billing_type ? 'selected':''}}>Fixed</option>
                     <option value="2" {{old('hourly', $project->billing_type)==$project->billing_type ? 'selected':''}}>Hourly</option>
                 </select>
                </div>
            </div>
           
            <x-form.input type="date" name="estimated__hours" :value="old('estimated__hours', $project->estimated__hours)"/>
            <x-form.input name="estimated_costs" :value="old('estimated_costs', $project->estimated_costs)"/>
                <div class="col-md-6  mt-3">
                    <label for="role">quality_level</label>
                    <div class="form-group">
                     <select name="billing_type" id="role" class="form-select">
                         <option value="1" {{old('fixed', $project->quality_level)==$project->quality_level ? 'selected':''}}>Premium</option>
                         <option value="2" {{old('hourly', $project->quality_level)==$project->quality_level ? 'selected':''}}>Standard</option>
                     </select>
                    </div>
                </div>
                <x-form.input type="date" name="total_images" :value="old('total_images', $project->total_images)"/>
                <x-form.input type="date" name="total_pages" :value="old('total_pages', $project->total_pages)"/>
                <x-form.textarea  name="comments">{{ old('comments',$project->comments) }}</x-form.textarea>
                </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection