@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pengumuman</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-8">
    <a href="/dashboard/announcement/create" class="btn btn-primary mb-3">Buat Pengumuman Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($announcements as $announcement)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $announcement->title }}</td>
          <td>
            <a href="/dashboard/announcement/{{ $announcement->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
            <a href="/dashboard/announcement/{{ $announcement->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
            <form action="/dashboard/announcement/{{ $announcement->slug }}" method="POST" class="d-inline">
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
  <div class="d-flex justify-content-end mt-3 col-lg-8">
    {{ $announcements->links() }}
  </div>
  </div>

@endsection