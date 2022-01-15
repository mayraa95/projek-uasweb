@extends('dashboard.layouts.main')
@section('container')
        <div class="card-body">
           <div class="card card-primary">
               <div class="card-header">
            <h3 class="card-title">Edit Menu</h3>
               </div>
            <form method="POST" action="/dashboard/menu/{{ $berita->slug }}">
            @method('put')
            @csrf
            <div class="card-body">
            <div class="form-group">
                <label for="judul_berita">Judul Menu</label>
                <input type="text" class="form-control @error ('judul_menu') is-invalid @enderror"
                id="judul_menu" name="judul_menu" placeholder="Judul Menu" value="{{ old('judul_menu',
                $berita->judul_berita) }}">
                @error('judul_menu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror 
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug Menu" value="{{ old('slug',
                $menu->slug)}}">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="custom-select rounded-0" id="category_id" name="category_id">
                    @foreach ($categories as $category)
                    @if (old('category_id', $menu->category_id)==$category->id)"
                        <option value="{{ $category->id }}" selected>{{ $category->nama }}</option>
                    @else 
                        <option value="{{ $category->id }}">{{ $category->nama }}</option>
                    @endif 
                @endforeach 
                </select>
            </div>
            <div class="form-group">
                <label for="isi_menu">Isi menu</label>
                @error('isi_menu')
                    <P class="text-danger">
                        {{ $message }}
                    </p>
                @enderror 
                <textarea id="summernote" name="isi_menu">{{ old('isi_menu', $menu->isi_menu) }}</textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Menu</button>
            </div>
            </form>
           </div>
        </div>
        <script>
            const judul_menu = document.querySelector('#judul_menu');
            const slug = document.querySelector('#slug');
            judul_menu.addEventListener('change', function(){
                fetch('/dashboard/menu/checkSlug?judul_menu='+judul_menu.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
            })
        </script>
    @endsection