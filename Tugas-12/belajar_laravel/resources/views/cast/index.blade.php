@extends('layouts.master')
@section('title')
    Halaman Tampil Cast
@endsection
@section('content')
<a href="{{ Route('cast.create') }}" class="btn btn-sm btn-info my-3">Tambah Cast</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($cast as $user)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $user->name }}</td>
          <td>
            <form action="/cast/{{ $user->id }}" method="POST">
              <a href="/cast/{{ $user->id }}" class="btn btn-info btn-sm">Detail</a>
              <a href="/cast/{{ $user->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
              @csrf
              @method('DELETE')
              <input type="submit" value="Delete" class="btn btn-danger btn-sm">
            </form>
          </td>
        </tr>
    @empty
        <p>No users</p>
    @endforelse
  </tbody>
</table>
@endsection