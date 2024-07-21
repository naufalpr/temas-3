@extends('dashboard.layouts.main')

@section('container')

<main class="container my-3">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2>{{ $announcement->title }}</h2>
        <p>{{ $announcement->created_at->diffForHumans() }} • {{ $announcement->user->name }}</p>
        <a href="/dashboard/announcement" class="btn btn-success"><i class="bi bi-arrow-left"></i></i> Kembali ke Pengumuman</a>
        <a href="/dashboard/announcement/{{ $announcement->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
        <form action="/dashboard/announcement/{{ $announcement->slug }}" method="POST" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
        </form>
        <div style="max-height: 350px; overflow:hidden">
          <img src="{{ asset('storage/' . $announcement->image) }}" alt="" class="img-fluid me-3 mt-3">
        </div>
        <article class="my-3 fs-6">
          <p>{!! $announcement->body !!}</p>
        </article>
      </div>
    </div>
  </main>

@endsection