@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pesan</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive small col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Dikirim</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Pesan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contact as $contact)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $contact->created_at->diffForHumans() }}</td>
          <td>{{ $contact->name }}</td>
          <td>{{ $contact->email }}</td>
          <td>{{ $contact->body }}</td>
          <td>
            <a href="mailto:{{ $contact->email }}" class="badge bg-info"><i class="bi bi-reply"></i></a>
            <form action="/dashboard/contact/{{ $contact->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda Yakin?')"><i class="bi bi-x-circle"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </div>

@endsection