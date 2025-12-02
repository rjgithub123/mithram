<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mithram Admin  - Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
</head>
<body>
    <main>
        <section class="login">
            <div class="container-fluid p-0">
                <div class="row g-0 justify-content-center align-items-center min-vh-100">
                    <div class="col-xl-7 col-lg-6 d-flex align-items-center justify-content-center p-5 order-lg-0">
                        <form action="{{ route('login') }}" method="POST" class="login-form">
                            @csrf
                            <h3 class="mb-5">Login</h3>
                            <div class="form-group mb-3">
                                <label for="username">Email</label>
                                <input type="email" name="email" class="form-control shadow-none rounded-3" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="username">Password</label>
                                <div class="w-100 position-relative">
                                    <input type="password" name="password" class="form-control shadow-none pe-5" required>
                                    <i class="toggle-password bi bi-eye-slash lh-1"></i>
                                </div>
                            </div>
                            <div class="text-end mb-4">
                                <a href="{{ route('password.request') }}" class="primary-text link-type1">Forgot password?</a>
                            </div>
                            <button type="submit" class="btn btn-type1 w-100 border rounded-3 shadow-sm">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        $(".toggle-password").click(function () {
            $(this).toggleClass("bi bi-eye");
            input = $(this).parent().find("input");
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            };
        });
    </script>
</body>
</html>