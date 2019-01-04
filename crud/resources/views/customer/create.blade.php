@extends('welcome')
@section('title', 'ADD Student')
@section('content')
    <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="field">
            <label class="label">Name</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="text" placeholder="Text input" value="bulma" name="name">
                <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
                <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
            </div>
            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="text" placeholder="input" name="email">
                </div>
            </div>
            <p class="help is-success">This email is available</p>
        </div>
        <div class="field">
            <label class="label">Address</label>
            <div class="control">
                <input class="input" type="text" placeholder="input" name="addres">
            </div>
        </div>
        <p class="help is-success">This Address is available</p>

        <div class="field">
            <label class="label">Phone</label>
            <div class="control">
                <input class="input" type="text" placeholder="input" name="phone">
            </div>
        </div>
        <p class="help is-success">This phone is available</p>


        <div class="form-group">
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        </div>

        <div class="field is-grouped is-grouped-centered">
            <p class="control">
                <button type="submit" class="btn btn-xs btn-primary" name="button">SUBMIT</button>
            </p>
            <p class="control">
                <a class="button is-light" href="{{ route('customer.index') }}">
                    Cancel
                </a>
            </p>
        </div>
    </form>

@endsection

