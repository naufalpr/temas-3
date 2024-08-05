@extends('dashboard.layouts.main')

@section('container')

<main class="container my-3">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2>{{ $news->title }}</h2>
        <p>{{ $news->created_at->diffForHumans() }} • {{ $news->user->name }}</p>
        <a href="/dashboard/news" class="btn btn-success"><i class="bi bi-arrow-left"></i></i> Kembali ke Berita</a>
        <a href="/dashboard/news/{{ $news->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
        <form action="/dashboard/news/{{ $news->slug }}" method="POST" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
        </form>
        <img src="{{ asset('storage/' . $news->image) }}" alt="" class="img-fluid me-3 mt-3">
        <article class="my-3 fs-6">
          <p>{!! $news->body !!}</p>
        </article>
      </div>
    </div>
  </main>

@endsection