@extends('welcome')
@section('title', 'FORM DANG KY')
<form action="{{ route('customer.store') }}" method="post">
<div class="container contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
    </div>
    <form method="post">
        @csrf
        <h3>Create Customer</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="fist_name" class="form-control" placeholder="first name" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" class="form-control" placeholder="last name" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="ADD NEW" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>
</form>