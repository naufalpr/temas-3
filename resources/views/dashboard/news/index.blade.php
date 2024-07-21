@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Berita</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive small col-lg-8">
    <a href="/dashboard/news/create" class="btn btn-primary mb-3">Buat berita baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($news as $news)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $news->title }}</td>
          <td>
            <a href="/dashboard/news/{{ $news->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
            <a href="/dashboard/news/{{ $news->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
            <form action="/dashboard/news/{{ $news->slug }}" method="POST" class="d-inline">
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
  <canvas class="my-4 w-100" id="myChart" width="900" height="395"></canvas>
  </div>

@endsection