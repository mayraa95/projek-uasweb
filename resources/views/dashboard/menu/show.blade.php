@extends('dashboard.layouts.main')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="card-body">
            <article>
                <h4 class="mb-3">{{ $berita->judul_berita }}</h4><hr style="background-color: white">
                <p>{!! $berita->isi_berita !!}</p>
                <a href="/dashboard/menu" class="btn btn-success">Kembali Ke Berita Utama</a>
                <a href="/dashboard/menu/{{ $berita->slug }}/edit" class="btn btn-warning">Edit</a>
                <form action="/dashboard/menu/{{ $berita->slug }}" method="POST" class="s-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('yakin akan menghapus data ?')">Hapus</button>
                  </form>
            </article>
        </div>
    </div>
@endsection