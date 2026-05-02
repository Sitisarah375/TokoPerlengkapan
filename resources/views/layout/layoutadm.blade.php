<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}" />
    <title>Dashboard Admin</title>
</head>

<body>
    
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                class="fas fa-shopping-cart"></i>Court.Co</div>
            <div class="list-group list-group-flush my-3">
                <a href="/admin" class="list-group-item list-group-item-action bg-transparent second-text active">Dashboard Admin</a>
                <a href="/admin" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-solid fa-user me-3"></i>Users</a>
                <a href="/new-katalog" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-solid fa-book me-3"></i>Kategori</a>
                <a href="/category" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-bookmark me-3"></i>Category Toko</a>
                <a href="/logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-3"></i>Logout</a>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>{{Auth::user()->name}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/login">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

@yield('content')

</body>
</html>
