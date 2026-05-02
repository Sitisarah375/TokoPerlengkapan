<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: #3852B4; font-family:'Dancing Script', cursive">
                <i class="bi bi-handbag"></i>
                Court.Co
            </a>
            <a href="/login" class="btn px-3 py-1 rounded-pill" style="background-color: #3852B4; color: white;">
                Login
            </a>
        </div>
    </nav>

    <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="#">Beranda</a>
            <a class="nav-link" href="#produk">Produk</a>
        </nav>
    </div>

    <div class="container mt-2">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner" style="border-radius: 20px;">
                <div class="carousel-item active">
                    <img src="{{asset('assets/img/2.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption text-start"
                        style="top:50%; transform:translateY(-50%); bottom:auto; font-family:'Poppins', sans-serif;">
                        <h1 class="d-flex">
                            Siap Main Hari Ini?
                        </h1>
                        <p>Temukan berbagai perlengkapan tenis dan padel berkualitas <br> untuk menunjang performamu di
                            setiap permainan</p>
                        <a href="#tentang"> <button class="btn rounded" style="background-color: #3852B4; color: white;">
                            Selengkapnya <i class="bi bi-arrow-right ms-2"></i></button></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/1200x/da/cb/16/dacb1643566aca087c818ebae90c8356.jpg"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container mt-5" id="tentang">

        <div class="text-center p-4 rounded-4"
            style="max-width:900px; margin:auto; background: linear-gradient(135deg, #3852B4, #6f86ff); color:white;">

            <h5 style="letter-spacing:2px;">SPORT STORE</h5>

            <h2 class="mt-2 fw-bold">Court.Co</h2>

            <p class="mt-3" style="opacity:0.9;">
                Court.Co adalah tempat terbaik untuk menemukan perlengkapan tenis dan padel berkualitas.
                Kami hadir untuk mendukung setiap langkah permainanmu — dari latihan hingga pertandingan.
            </p>

        </div>

    </div>

    <div class="container mt-5" id="produk">
        <h3 class="text-center mb-3" style="color: #3852B4;">Semua Produk</h3>

        <div class="text-center mb-4">

            <a href="/" class="btn btn-sm me-2 {{ request()->is('/') ? 'btn-primary' : 'btn-secondary' }}">
                Semua Kategori
            </a>

            @foreach($category as $item)
            <a href="/kategori/{{ $item->categoryID }}"
                class="btn btn-sm me-2 {{ request()->is('kategori/'.$item->categoryID) ? 'btn-primary' : 'btn-secondary' }}">
                {{ $item->category_name }}
            </a>
            @endforeach

        </div>

        <div class="row g-4 mt-2 mb-4">

            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100">
                    @foreach($data as $item)
                    <a href="p1.html">
                        <img src="/img/{{ $item['image'] }}" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <h5 style="color: #3852B4;" class="card-title">{{ $item['nama_produk'] }}</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 style="color: #3852B4;" class="card-title mb-0">Rp. {{ number_format($item->harga) }}
                            </h6>
                            <a href="{{ route('detail', $item->tokoID) }}" class="btn px-3 py-2"
                                style="background-color: #3852B4; color: white;">
                                Lihat
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
