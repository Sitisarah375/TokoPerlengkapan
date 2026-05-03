@extends('layout.layoutadm')
@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-11">
            <h3 style="margin-top: 10px; margin-left:100px">Create Kategori</h3>
            <div class="card" style="margin-left: 90px; margin-top:20px">
                <div class="card-body">
                    <h5 class="card-title">Create Category</h5>

                    <!-- Form -->
                    <form method="POST" action="{{ route('storeCategory') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="category_name">
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
        <div class="table-responsive">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">No</th>
                        <th scope="col">Category ID</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $number => $item)

                    <tr>
                        <th scope="row">{{ $number+1 }}</th>
                        <td>{{ $item['categoryID'] }}</td>
                        <td>{{ $item['category_name'] }}</td>
                        <td>
                            <button class="bg-transparent" style="border: none"><a
                                    href="{{ route('destroyCategory', $item->categoryID) }}"
                                    style="color: rgb(229, 83, 83)"><i class="fas fa-trash"></i></a></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- js  --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };

</script>
@endsection
