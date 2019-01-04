@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">My test Email</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('send/email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">Subject</label>

                                <div class="col-md-6">
                                    <input id="subject" type="text"
                                           class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}"
                                           name="subject" value="{{ old('subject') }}" required autofocus>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}"  autofocus>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">Message</label>

                                <div class="col-md-6">
                                    <textarea class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" id="" cols="30" rows="5"></textarea>

                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Send Email</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
