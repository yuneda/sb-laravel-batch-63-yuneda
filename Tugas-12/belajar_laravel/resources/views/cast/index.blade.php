@extends('layouts.master')
@section('title')
    Halaman Tampil Cast
@endsection
@section('content')
<a href="/cast/create" class="btn btn-sm btn-info my-3">Tambah Cast</a>
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
        <li>{{ $user->name }}</li>
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $user->name }}</td>
          <td>
            <a href="/cast/{{ $user->id }}" class="btn btn-info btn-sm">Detail</a>
          </td>
        </tr>
    @empty
        <p>No users</p>
    @endforelse
  </tbody>
</table>
@endsection