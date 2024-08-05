@extends('dashboard.layouts.main')

@section('container')

<main class="container my-3">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <a href="/dashboard/contact" class="btn btn-success"><i class="bi bi-arrow-left"></i></i> Kembali ke Pesan</a>
        <a href="mailto:{{ $contact->email }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Balas</a>
        <form action="/dashboard/contact/{{ $contact->id }}" method="POST" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</button>
        </form>
        <p class="mt-3">Dari: {{ $contact->name }} ({{ $contact->created_at->diffForHumans() }})</p>
        <p>Email: {{ $contact->email }}</p>
        <p>Pesan: {{ $contact->body }}</p>
      </div>
    </div>
  </main>

@endsection