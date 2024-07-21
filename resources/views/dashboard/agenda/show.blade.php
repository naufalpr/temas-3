@extends('dashboard.layouts.main')

@section('container')

<main class="container my-3">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2>{{ $agenda->title }}</h2>
        <p>{{ $agenda->created_at->diffForHumans() }} • {{ $agenda->user->name }}</p>
        <a href="/dashboard/agenda" class="btn btn-success"><i class="bi bi-arrow-left"></i></i> Kembali ke Agenda</a>
        <a href="/dashboard/agenda/{{ $agenda->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
        <form action="/dashboard/news/{{ $agenda->slug }}" method="POST" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
        </form>
        <div style="max-height: 350px; overflow:hidden">
          <img src="{{ asset('storage/' . $agenda->image) }}" alt="" class="img-fluid me-3 mt-3">
        </div>
        <article class="my-3 fs-6">
          <p>{!! $agenda->body !!}</p>
        </article>
      </div>
    </div>
  </main>

@endsection