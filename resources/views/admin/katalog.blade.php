@extends('layout.layoutadm')
@section('content')

<section class="section">
  <div class="row">
    <div class="col-lg-11">
      <h3 style="margin-top: 10px; margin-left:100px">Create Kategori</h3>
      <div class="card"  style="margin-left: 90px; margin-top:20px">
        <div class="card-body">
          <h5 class="card-title">Form Create Kategori</h5>

          <!-- Form -->
          <form method="POST" action="{{ route('add') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nama Produk</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_produk">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Harga</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="harga">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
              <div class="col-sm-10">
                <textarea class="form-control" style="height: 100px" name="deskripsi"></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Category Toko</label>
              <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="kategori">
                  <option hidden disabled selected>Pilih Kategori</option>
                  @foreach($category as $item)
                  <option value="{{ $item->categoryID }}">{{ $item['category_name'] }}</option>
                 @endforeach
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
              <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="image">
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>

          </form>
</section>

  <div class="row my-5">

      <div class="col">
          <table class="table bg-white rounded shadow-sm  table-hover">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Toko ID</th>
                      <th>Category ID</th>
                      <th>Nama Produk</th>
                      <th>Harga</th>
                      <th>Deskripsi</th>
                      <th>Sampul Kategori</th>
                      <th>Action</th>
                  </tr>
              </thead>                            
                <tbody>
                @foreach ($data as $number => $item)

                  <tr>
                <td>{{ $number+1 }}</td>
                <td>{{$item->tokoID}}</td>
                <td>{{$item->kategori}}</td>
                <td class="data title">{{$item['nama_produk']}}</td>
                <td class="data title">{{$item['harga']}}</td>
                <td class="data title">{{$item['deskripsi']}}</td>
                <td>
                  <img width="100px" src="/img/{{ $item['image'] }}" alt="">
                </td>
                  <td>
                    <a href="{{ route('destroyKatalog', $item->tokoID) }}"><div class="btn btn-danger">Delete</div></a>
                    <a href="{{ route('editKatalog', $item->tokoID) }}"><div class="btn btn-success">Edit</div></a>
                </td>
                </tr>
                @endforeach

              </tbody>
          </table>
      </div>
  </div>

 {{-- js --}}
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
@endsection