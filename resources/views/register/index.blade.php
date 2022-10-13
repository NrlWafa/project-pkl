
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sign Up | TAKES</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/theme/images/poliban-logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="/theme/css/style.css" rel="stylesheet">

</head>

<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">

                                <a class="text-center" href="index.html"> <h4>TAKES (Telkom Akses Kesehatan)</h4></a>

                                @include('partial.alerts')

                                <form class="mt-5 mb-5 login-input" method="post">

                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"  placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="nik" class="form-control"  placeholder="NIK / NIM" maxlength="20" required>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="level" name="level">
                                            <option value="">Pilih Level</option>
                                            @foreach ($level as $lvl)
                                                <option value="{{ $lvl->id_level }}">{{ $lvl->level_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign Up</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="/login" class="text-primary">Sign In </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script src="/theme/plugins/common/common.min.js"></script>
    <script src="/theme/js/custom.min.js"></script>
    <script src="/theme/js/settings.js"></script>
    <script src="/theme/js/gleek.js"></script>
    <script src="/theme/js/styleSwitcher.js"></script>
</body>
</html>
