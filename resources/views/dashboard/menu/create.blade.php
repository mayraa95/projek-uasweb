@extends('dashboard.layouts.main')
@section('container')
    <div class="card-body" style="background-color: #A6CF98;">
        <div class="card card-dark">
            <div class="card-header">
              <h3 class="card-title">Tambah Menu</h3>
            </div>
            <form method="POST" action="/dashboard/menu">
            @csrf
            <div class="card-body" style="background-color: #99A799;">
                <div class="form-grup">
                    <label for="nama_menu">Nama Menu</label>
                    <input type="text" class="form-control @error ('nama_menu') is-invalid @enderror"
                    id="nama_menu" name="nama_menu" placeholder="Nama Menu" style="background-color: #d3e4cd;">
                    @error('nama_menu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug Menu" style="background-color: #d3e4cd;">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="custom-select rounded-0" style="background-color: #d3e4cd;" id="category_id" name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="isi_menu">Isi Menu</label>
                    @error('isi_menu')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <textarea id="summernote" name="isi_menu"></textarea>
                </div>
                <div class="card-footer" style="background-color: #99A799;">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        const nama_menu = document.querySelector('#nama_menu');
        const slug = document.querySelector('#slug');
        nama_menu.addEventListener('change', function(){
            fetch('/dashboard/menu/checkSlug?nama_menu='+nama_menu.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        })
    </script>
@endsection 