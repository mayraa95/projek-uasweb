@extends('dashboard.layouts.main')
@section('container')

    <div class="content-header" style="background-color: #56776C;">
        <div class="container-fluid" style="background-color: #56776C;">
            <div class="col-sm-12">
              <h1 class="m-0">Halaman Tambah Menu</h1>
            </div>
        </div>
    </div>
        <div class="card-body" style="background-color: #345B63;">
          @if (session()->has('sukses'))
          <div class="alert alert-succes" role="alert">
              {{ session('sukses') }}
          </div>
          @endif
          <a href="/dashboard/menu/create" class="btn btn-light mb-3">Tambah Menu</a>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama Menu</th>
              <th>Kategori</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($menu as $menu)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $menu->judul_menu }}</td>
              <td>{{ $menu->category->nama }}</td>
              <td>
                <a href="/dashboard/menu/{{ $menu>slug }}" class="btn btn-info"><i class="far fa-eye nav-icon"></i></a>
                <a href="/dashboard/menu/{{ $menu->slug }}/edit" class="btn btn-warning"><i class="far fa-edit nav-icon"></i></a>
                <form action="/dashboard/menu/{{ $menu->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf 
                <button class="btn btn-danger" onclick="return confirm('Kamu Yakin Mau Menghapus Data Ini ?')"><i class="nav-icon fas fa-trash-alt"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
@endsection