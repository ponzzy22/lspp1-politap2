<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WELCOME</title>
    <link rel="stylesheet" href="{{ url('public/assets/vendors/iconfonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/admin.css') }}">
    <link rel="shortcut icon" href="{{ url('public/assets/images/logo/lsp.png') }}" />
</head>

<body style="background-image: url('{{ asset('public/images/back/1.jpg') }}')">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div  style="background-image: url('{{ asset('public/images/back/1.jpg') }}'); background-size: cover" class="content-wrapper d-flex align-items-center auth lock-full-bg">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <form class="pt-5">
                            <div class="mt-3 text-center">
                                <h2 for="examplePassword1" class="text text-danger">Selamat Bergabung...</h2>
                            </div>
                            <div class="mt-5">
                                <a class="btn btn-block btn-info btn-lg font-weight-medium"
                                    href="{{ route('dashasesi.index') }}"><i class="fas fa-user"></i> Halaman Asesi</a>
                            </div>
                            <div class="mt-5">
                                <a class="btn btn-block btn-danger btn-lg font-weight-medium"
                                    href="{{ route('admin') }}"><i class="fas fa-cogs"></i> Halaman Admin</a>
                            </div>
                            <div class="mt-5">
                                <a class="btn btn-block btn-primary btn-lg font-weight-medium"
                                    href="{{ route('/') }}"><i class="fas fa-home"></i> Ke Halaman Beranda</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('public/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ url('public/assets/vendors/js/vendor.bundle.addons.js') }}"></script>
    <script src="{{ url('public/assets/js/off-canvas.js') }}"></script>
    <script src="{{ url('public/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('public/assets/js/misc.js') }}"></script>
    <script src="{{ url('public/assets/js/settings.js') }}"></script>
    <script src="{{ url('public/assets/js/todolist.js') }}"></script>
    <script src="{{ url('public/assets/js/google-maps.js') }}"></script>
    <script src="{{ url('public/assets/js/dashboard.js') }}"></script>
    <script src="{{ url('public/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ url('public/assets/js/formpickers.js') }}"></script>
    <script src="{{ url('public/assets/js/form-addons.js') }}"></script>
    <script src="{{ url('public/assets/js/x-editable.js') }}"></script>
    <script src="{{ url('public/assets/js/dropify.js') }}"></script>
    <script src="{{ url('public/assets/js/dropzone.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery-file-upload.js') }}"></script>
    <script src="{{ url('public/assets/js/formpickers.js') }}"></script>
    <script src="{{ url('public/assets/js/form-repeater.js') }}"></script>
    <script src="{{ url('public/assets/js/alerts.js') }}"></script>
    <script src="{{ url('public/assets/js/avgrund.js') }}"></script>
    <script src="{{ url('public/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('public/assets/js/wizards.js') }}"></script>

</body>


</html>
