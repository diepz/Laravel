@extends('welcome')
@section('title', 'ADD Student')
@section('content')
    <form action="{{ route('students.store') }}" method="post">
        @csrf
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
                <label class="label">Age</label>
                <div class="control">
                    <input class="input" type="text" placeholder="input" name="age">
                </div>
            </div>
            <p class="help is-success">This username is available</p>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
        <div class="field is-grouped is-grouped-centered">
            <p class="control">
                <button type="submit" class="btn btn-xs btn-primary" name="button">SUBMIT</button>
            </p>
            <p class="control">
                <a class="button is-light" href="{{ route('students.index') }}">
                    Cancel
                </a>
            </p>
        </div>
    </form>

@endsection

