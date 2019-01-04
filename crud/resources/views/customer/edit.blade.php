@extends('welcome')
@section('title', 'ADD Student')
@section('content')
    <form action="{{ route('news.store', $feeds->id) }}" method="post">
        @csrf
        <div class="field">
            <label class="label">Name</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="text" placeholder="Text input" value="{{ $customers->name }}"
                       name="name">
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
                    <input class="input" type="text" placeholder="input" name="email" value="{{ $customers->email }}">
                </div>
            </div>
            <p class="help is-success">This email is available</p>
        </div>
        <div class="field">
            <label class="label">Address</label>
            <div class="control">
                <input class="input" type="text" placeholder="input" name="addres" value="{{ $customers->addres }}">
            </div>
        </div>
        <p class="help is-success">This Address is available</p>
        <div class="field">
            <label class="label">Phone</label>
            <div class="control">
                <input class="input" type="text" placeholder="input" name="phone" {{ $customers->phone }}>
            </div>
        </div>
        <p class="help is-success">This phone is available</p>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1"
                   name="image" {{ $customers->image }}>
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

