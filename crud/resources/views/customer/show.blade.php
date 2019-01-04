@extends('welcome')
@section('title', 'Student')
@section('content')
    <a class="delete is-large" href="{{route('customer.index')}}" style="margin: 1px 90%;"></a>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <h3>Name: {{ $customers->name }}</h3>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <h2>Email:  {{ $customers->email }}</h2>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <h2>Address:  {{ $customers->address }}</h2>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <h2>Phone:  {{ $customers->phone }}</h2>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <h2>Imge:  {{ $customers->image }}</h2>

            </div>
        </div>
    </div>


@endsection

