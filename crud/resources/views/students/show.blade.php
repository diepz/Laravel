@extends('welcome')
@section('title', 'Student')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Show Post</h3>
                <a href="{{ route('students.index') }}" class="btn btn-xs btn-primary ">BACK</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <h3>Name: {{ $students->name }}</h3>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <h3>age:  {{ $students->age }}</h3>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <h3>age:  {{ $students->image }}</h3>

            </div>
        </div>
    </div>


@endsection

