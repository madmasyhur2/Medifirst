<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medifirst - Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />

    <link href="{{ asset('backend/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/line-awesome@1.3.0/dist/line-awesome/css/line-awesome.min.css">

    <style>
        body {
            background-image: url('{{ asset('backend/images/bg-login.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: 'Roboto';
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3b3b3b;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('backend/images/nav-brand.png') }}" alt="Logo" height="40" class="d-inline-block align-text-center me-2">
                Medify
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#berada">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-4">
                    <div class="card-body">
                        <h1 class="card-title fw-bold text-center">Masuk Akun <span style="color: #296BB2;">Medifirst</span></h1>
                        <form action="{{ route('login') }}" method="POST" class="mt-5 d-grid gap-2">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email<b class="text-danger">*</b></label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent">
                                        <i class="las la-envelope"></i>
                                    </span>
                                    <input type="email" id="email" name="email" class="form-control border border-start-0"
                                        placeholder="Ketikkan email Anda disini" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Password<b class="text-danger">*</b></label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent"><i class="las la-lock"></i></span>
                                    <input type="password" id="password" name="password" class="form-control border border-start-0 border-end-0"
                                        placeholder="Ketikkan password Anda disini" />
                                    <span class="input-group-text bg-transparent" style="cursor: pointer" id="toggle-password">
                                        <i class="las la-eye"></i>
                                    </span>
                                </div>
                            </div>

                            <button type="submit" id="btn-submit" class="btn text-white py-2 mt-3" style="background-color: #535561">Masuk</button>
                            <small class="text-center">Belum punya akun? <a href="#daftar" class="fw-bold text-decoration-none">Daftar</a></small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('backend/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#toggle-password").on('click', function(event) {
                event.preventDefault();

                if ($('#password').attr("type") == "text") {
                    $('#password').attr('type', 'password');
                    $('#toggle-password i').addClass("la-eye");
                    $('#toggle-password i').removeClass("la-eye-slash");
                } else if ($('#password').attr("type") == "password") {
                    $('#password').attr('type', 'text');
                    $('#toggle-password i').removeClass("la-eye");
                    $('#toggle-password i').addClass("la-eye-slash");
                }
            });

            // disable button submit on load
            $('#btn-submit').prop('disabled', true);

            // enable submit when both input fields are not empty
            $('#email, #password').on('input', function() {
                var email = $('#email').val().trim();
                var password = $('#password').val().trim();

                if (email !== '' && password !== '') {
                    $('#btn-submit').prop('disabled', false);
                } else {
                    $('#btn-submit').prop('disabled', true);
                }
            })
        });
    </script>
</body>

</html>
