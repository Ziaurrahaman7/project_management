@extends('master')
@section('body')
<x-form.form>
    <h3>Edit Client</h3>
        <form method="post" action="/client/{{$client->id}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row mb-3">
            <x-form.input name="company_name" :value="old('company_name',$client->company_name)"/>
            <x-form.input name="first_name"  :value="old('first_name',$client->first_name)"/>
            <x-form.input name="last_name"  :value="old('last_name', $client->last_name)"/>
            <x-form.input name="email"  :value="old('email', $client->email)"/>
            <x-form.input name="image" type="file" :value="old('image',$client->image)"/>
             <img style="width:80px; height:80px" src="{{asset($client->image)}}">
             <x-form.textarea  name="details">{{old('details',$client->details)}}</x-form.textarea>
            <x-form.input name="tag"  :value="old('tag',$client->tag)"/>
            <x-form.input name="billing_streat"  :value="old('billing_streat', $client->billing_streat)"/>
            <x-form.input name="billing_state"  :value="old('billing_state', $client->billing_state)"/>
            <x-form.input name="billing_zipcode"  :value="old('billing_zipcode', $client->billing_zipcode)"/>
            <x-form.input name="billing_country"  :value="old('billing_country', $client->billing_country)"/>
            <x-form.input name="billing_telephone"  :value="old('billing_telephone', $client->billing_telephone)"/>
            <x-form.input name="billing_website"  :value="old('billing_website', $client->billing_website)"/>
            <x-form.input name="billing_city"  :value="old('billing_city', $client->billing_city)"/>
            <x-form.input name="tax_number"  :value="old('tax_number', $client->tax_number)"/>
            <x-form.input name="shipping_streat"  :value="old('shipping_streat', $client->shipping_streat)"/>
            <x-form.input name="shipping_state"  :value="old('shipping_state', $client->shipping_state)"/>
            <x-form.input name="shipping_zipcode"  :value="old('shipping_zipcode', $client->shipping_zipcode)"/>
            <x-form.input name="shipping_country"  :value="old('shipping_country', $client->shipping_country)"/>
            <x-form.input name="shipping_telephone"  :value="old('shipping_telephone', $client->shipping_telephone)"/>
            <x-form.input name="shipping_website"  :value="old('shipping_website', $client->shipping_website)"/>
            <x-form.input name="shipping_city"  :value="old('shipping_city', $client->shipping_city)"/>
            <x-form.input name="lastproject"  :value="old('lastproject', $client->lastproject)"/>
            <x-form.textarea  name="comment">{{old('comment',$client->comment)}}</x-form.textarea>
            <div class="col-md-6  mt-3">
                <label for="role">Project_type</label>
                <div class="form-group">
                 <select name="project_type" id="role" class="form-select">
                     <option value="1" {{old(1, $client->role)==$client->role ? 'selected':''}}>Web Design</option>
                     <option value="2" {{old(2, $client->role)==$client->role ? 'selected':''}}>Web Development</option>
                     <option value="3" {{old(3, $client->role)==$client->role ? 'selected':''}}>App Developer</option>
                 </select>
                </div>
            </div>
        </div>
        <div class="mt-4 mb-0">
           <x-form.button>Submit</x-form.button>
        </div>
    </form>
</x-form.form>
@endsection