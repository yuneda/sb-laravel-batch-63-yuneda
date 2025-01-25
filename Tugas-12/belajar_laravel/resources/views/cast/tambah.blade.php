@extends('layouts.master')
@section('title')
    Halaman Tambah Cast
@endsection
@section('content')
<form method="POST" action="/cast">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
      <label for="exampleInputEmail1">Cast Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Age</label>
      <input type="number" class="form-control" id="exampleInputPassword1" name="age">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Bio</label>
        <textarea class="form-control" name="bio" id="" cols="30" rows="10"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection