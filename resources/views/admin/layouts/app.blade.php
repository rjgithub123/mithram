<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mithram Admin Portal </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
</head>
<body>
    <main>
             <div class="container-fluid p-0">
            <div class="row g-0">
                <header class="col-12 p-3 d-flex align-items-center border-bottom bg-white">
                    <div class="row g-0 d-flex align-items-center w-100">
                        <div class="col-xxl-2 col-lg-3 col-md-1 col-2">
                            <h1 class="logo-wrp mb-0">
                                <strong class="h4 mb-0 border p-1">Mithram Houseboat</strong>
                                <!-- <img src="images/logo.png" class="d-lg-block d-none img-fluid" alt="Logo">
                                <img src="images/logo-small.png" class="d-lg-none d-block img-fluid small-logo" alt="Logo small"> -->
                            </h1>
                        </div>
                        <div class="col-xxl-10 col-lg-9 col-md-11 col-10 ps-3">
                            <div class="d-flex align-items-center justify-content-lg-between justify-content-end">
                                <div class="d-flex align-items-center">
                                    <button type="button" id="menuToggle" class="btn fs-4 shadow-none border-0"><i class="bi bi-list"></i></button>
                                    <h2 class="fs-4 fw-bold mb-0 d-none d-md-flex">Hello, Admin!</h2>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-row navbar-nav align-items-center ms-3">
                                        <div class="nav-item dropdown ms-2">
                                            <a href="javascript:void(0)" class="nav-link d-flex align-items-center justify-content-center gap-3 rounded-circle primary-bg-light overflow-hidden" data-bs-toggle="dropdown" style="width: 40px; height: 40px;">
                                                <img class="img-fluid user-profile-picture" src="images/user-solid.svg" alt="User Profile Picture" >
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end bg-white border rounded-1 shadow-sm m-0 p-2">
                                                <div class="w-100 fw-light mb-2 p-1 px-2 rounded">
                                                    <h6 class="fw-medium">Admin</h6>
                                                    {{-- <div class="small">admin123@gmail.com</div> --}}
                                                </div>
                                                {{-- <a href="account-settings.html" class="dropdown-item w-100 d-flex justify-content-between text-decoration-none fw-light mb-2 p-1 px-2 rounded">Settings <i class="bi bi-gear"></i></a> --}}
                                              <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="dropdown-item w-100 d-flex justify-content-between">
        Log Out <i class="bi bi-box-arrow-right"></i>
    </button>
</form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
@include('admin.layouts.partials.sidebar')
    <!-- Main Content -->

        @yield('content')

    @include('admin.layouts.partials.footer')
    

              </div>
        </div>
    </main>
 
    @stack('scripts')
</body>
</html>
