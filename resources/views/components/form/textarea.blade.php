@props(['name', 'type'=>'text'])
<div class="col-md-12 mt-3">
    <div class="form-floating  mb-3 mb-md-0">
      <textarea cols="12"
       id="{{$name}}" 
       name="{{$name}}"
        type="{{$type}}" 
         rows="20"
          class="form-control"
          >
          {{$attributes(['value'=>old($name)])}}
        </textarea>
        <x-form.label for="{{$name}}" name="{{$name}}"/>
    </div>
</div>