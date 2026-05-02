@extends('layout.layoutadm')
@section('content')

<div class="container mt-4">
    <h3>Edit Produk</h3>

    <div class="card p-4">
        <form method="POST" action="{{ route('edit', $edit->tokoID) }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" value="{{ $edit->nama_produk }}">
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number" class="form-control" name="harga" value="{{ $edit->harga }}">
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi">{{ $edit->deskripsi }}</textarea>
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <select class="form-select" name="kategori">
                    @foreach($category as $item)
                    <option value="{{ $item->categoryID }}"
                        {{ $edit->kategori == $item->categoryID ? 'selected' : '' }}>
                        {{ $item->category_name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Gambar</label>
                <input type="file" class="form-control" name="image">
                <br>
                <img src="/img/{{ $edit->image }}" width="100">
            </div>

            <button class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection
