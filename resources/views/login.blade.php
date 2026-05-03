<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>

    {{-- cdn boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    {{-- cdn font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center mt-5">
        <form method="POST" action="/login" class="card py-4 px-4">
            @csrf
            @if ($errors->any())
            <div class="alert-alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="text-center logo">
                <i class="fas fa-user-circle"></i>
            </div>
            <div class="text-center mt-3">

                <span class="info-text">silahkan mengisi username dan password untuk login</span>

            </div>
            <div class="position-relative mt-3 form-input">
                <label>Username</label>
                <input class="form-control" type="text" name="username">
                <i class="fas fa-user"></i>
            </div>

            <div class="position-relative mt-3 form-input">
                <label>Password</label>
                <input class="form-control" type="password" name="password">
                <i class="fas fa-lock"></i>
            </div>

            <div class="mt-5 d-flex justify-content-between align-items-center">

                <a href="/" class="btn btn-primary btn-sm">
                    ← Kembali
                </a>

                <button type="submit" class="go-button">
                    <i class="fas fa-long-arrow-right"></i>
                </button>

            </div>
        </form>
    </div>

    @yield('content')

</body>

</html>
