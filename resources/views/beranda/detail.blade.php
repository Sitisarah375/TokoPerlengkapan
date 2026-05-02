<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Detail Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
</head>

<body>

    <div class="container mt-5">

        <div class="product-card">
            <div class="row align-items-center">

                <div class="col-md-6 text-center">
                    <img src="/img/{{ $produk->image }}" class="img-fluid product-img">
                </div>

                <div class="col-md-6 mt-4 mt-md-0">

                    <span class="badge-kategori">
                        {{ $produk->category->category_name ?? 'Tanpa Kategori' }}
                    </span>

                    <h2 class="mt-2" style="color:#3852B4; font-weight:600;">
                        {{ $produk->nama_produk }}
                    </h2>

                    <h3 class="mt-3" style="color:#3852B4;">
                        Rp. {{ number_format($produk->harga) }}
                    </h3>

                    <p class="mt-3 text-muted" style="line-height:1.7;">
                        {{ $produk->deskripsi }}
                    </p>

                    <div class="mt-4">
                        <a href="/" class="btn px-3 py-2" style="background-color: #3852B4; color: white;">
                            Kembali
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </div>

</body>

</html>
