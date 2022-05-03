@extends('master')
@section('body')
<x-form.form>
    <h3>Add Client</h3>
        <form method="post" action="/client" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <x-form.input name="company_name"/>
            <x-form.input name="first_name"/>
            <x-form.input name="last_name"/>
            <x-form.input name="email"/>
            <x-form.input name="image" type="file"/>
            <x-form.textarea  name="details"/>
            <x-form.input name="tag"/>
            <x-form.input name="billing_streat"/>
            <x-form.input name="billing_state"/>
            <x-form.input name="billing_zipcode"/>
            <x-form.input name="billing_country"/>
            <x-form.input name="billing_telephone"/>
            <x-form.input name="billing_website"/>
            <x-form.input name="billing_city"/>
            <x-form.input name="tax_number"/>
            <x-form.input name="shipping_streat"/>
            <x-form.input name="shipping_state"/>
            <x-form.input name="shipping_zipcode"/>
            <x-form.input name="shipping_country"/>
            <x-form.input name="shipping_telephone"/>
            <x-form.input name="shipping_website"/>
            <x-form.input name="shipping_city"/>
            <x-form.input name="lastproject"/>
            <x-form.textarea  name="comment"/>
            <div class="col-md-6  mt-3">
                <label for="role">Project_type</label>
                <div class="form-group">
                 <select name="project_type" id="role" class="form-select">
                     <option value="1">Web Design</option>
                     <option value="2">Web Development</option>
                     <option value="3">App Developer</option>
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