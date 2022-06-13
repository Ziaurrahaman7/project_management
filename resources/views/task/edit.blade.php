@extends('master')
@section('body')
<x-form.form>
    <h3>Add task</h3>
        <form method="post" action="/task/{{ $task->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row mb-3">
            
                        <x-form.input name="title" :value="old('title',$task->title)"/>
                        <x-form.input type="date" name="startDate" :value="old('startDate',$task->startDate)"/>
                        <x-form.input type="date"  name="endDate" :value="old('endDate',$task->endDate)"/>
                    <div class="form-check col-md-6 mt-3">
                        <label>Select Client Name</label>
                    <select name="client_id" class="form-select form-group col-6">
                        <option value="">Client Name</option>
                        @foreach ($clients as $client )
                        <option value="{{ $client->id }}" {{old($client->id, $client->id)==$task->client_id ? 'selected':''}}>{{ $client->first_name." ".$client->fname }}</option>
                        @endforeach
                    </select>
                    @error('client_id')
                    <p style="color:red">{{$message}}</p>  
                    @enderror
                    </div>
                    <div class="form-check col-md-6 mt-3">
                        <label>Select Project Name</label>
                    <select name="project_id" class="form-select form-group col-6">
                        <option value="">Project Name</option>
                        @foreach ($projects as $key=>$value )
                        <option value="{{ $key }}" {{old($key, $key)==$task->project_id ? 'selected':''}}>{{$value}}</option>
                    @endforeach
                    </select>
                    @error('client_id')
                    <p style="color:red">{{$message}}</p>  
                    @enderror
                    </div>
                    <div class="form-check col-md-6 mt-3">
                        <label>Assaign Team Member</label>
                        @foreach ($teams as $team)
                       <div class="d-flex">
                        <input style="margin-right: 10px" type="checkbox" name="team_id[]" 
                        id="{{$team->id}}" 
                        value="{{$team->id}}" 
                        {{ in_array($team->id, $selectedTeam) ? 'checked':'' }} class="form-check">
                        <label for="{{$team->id}}">{{ucwords($team->first_name ." ".$team->last_name)}}</label>
                       </div>
                        @endforeach
                        @error('team_id')
                        <p style="color:red">{{$message}}</p>  
                        @enderror
                    </div>
                    <x-form.textarea  name="summary">{{old('summary',$task->summary)}}</x-form.textarea>
                    <div class="col-md-6  mt-3">
                        <label for="role">Status</label>
                        <div class="form-group">
                         <select name="priority" id="role" class="form-select">
                            <option value="high" {{old("high", "high")==$task->priority ? 'selected':''}}>High</option>
                            <option value="normal" {{old("normal", "normal")==$task->priority ? 'selected':''}}>Normal</option>
                            <option value="urgent" {{old("urgent", "urgent")==$task->priority ? 'selected':''}}>Urgent</option>
                         </select>
                        </div>
                    </div>
                    <div class="col-md-6  mt-3">
                        <label for="role">Status</label>
                        <div class="form-group">
                         <select name="status" id="role" class="form-select">
                            <option value="cancel" {{old("cancel", "cancel")==$task->status ? 'selected':''}}>Cancel</option>
                            <option value="complete" {{old("complete", "complete")==$task->status ? 'selected':''}}>Complete</option>
                            <option value="on-hold" {{old("on-hold", "on-hold")==$task->status ? 'selected':''}}>On-Hold</option>
                            <option value="on-review" {{old("on-review", "on-review")==$task->status ? 'selected':''}}>On-Review</option>
                         </select>
                        </div>
                    </div>
                    <x-form.textarea  name="description">{{old('description',$task->description)}}</x-form.textarea>
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection