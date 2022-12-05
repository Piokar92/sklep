<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REPRESENT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="../resources/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>


    <script src="https://kit.fontawesome.com/10eac207b5.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-fluid">

        <div class="row navigation-bar">
            <div class="col-md-2 brand" style="padding-top:5px;">
                <a href="../index.php" class="fw-light logo">REPRESENT</a>
            </div>
        </div>

        <div class="md row justify-content-center">
            <div class="col-md-6 col-xl-5 col-xxl-4 p-3 mt-5">
                <form acion="" method="post">
                    <div class="row gy-3">
                        <div class="col-md-3">
                            <label for="FormEmail" class="form-label p-2">EMAIL</label>
                        </div>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="FormEmail" placeholder="name@example.com"
                                required>
                        </div>

                        <div class="col-md-3">
                            <label for="inputPassword" class="col-form-label p-2">PASSWORD</label>
                        </div>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="inputPassword" required>
                        </div>
                        <div class="col-md-12 text-end">
                            <button class="btn btn-md mt-1">SIGN IN
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="md row justify-content-center">
            <div class="col-md-4 p-3 gy-3">
                <span class="sign-register">IS IT YOUR FIRST TIME HERE?</span>
                <div class="md row">
                    <div class="col-md-12 p-2 gy-3 me-2">
                        <p>
                            <button class="btn general" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseRegister" aria-expanded="false"
                                aria-controls="collapseRegister">
                                REGISTER
                            </button>
                        </p>
                        <div class="collapse" id="collapseRegister">
                            <div class="card card-body">
                                <form action="" method="post">
                                    <div class="row gy-3">
                                        <div class="col-md-12">
                                            <label for="RegisterFormControlInput1" class="form-label">EMAIL</label>
                                            <input name="email" type="email" class="form-control"
                                                id="RegisterFormControlInput1" placeholder="email" maxlength=100
                                                required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="RegisterFormControlInput2" class="form-label">PASSWORD</label>
                                            <input name="password" type="password" class="form-control"
                                                id="RegisterFormControlInput2" maxlength=100 required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="RegisterFormControlInput6" class="form-label">REPEAT
                                                PASSWORD</label>
                                            <input type="password" class="form-control" id="RegisterFormControlInput6"
                                                maxlength=100 required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="RegisterFormControlInput3" class="form-label">NAME</label>
                                            <input type="text" class="form-control" id="RegisterFormControlInput3"
                                                maxlength=100 required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="RegisterFormControlInput4" class="form-label">LAST NAME</label>
                                            <input type="text" class="form-control" id="RegisterFormControlInput4"
                                                maxlength=100 required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="RegisterFormControlInput5" class="form-label">AGE</label>
                                            <input type="date" class="form-control" id="RegisterFormControlInput5"
                                                required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="RegisterFormControlInput6" class="form-label">ADDRESS</label>
                                            <textarea class="form-control" id="RegisterFormControlInput6"
                                                required></textarea>
                                        </div>

                                        <div class="col-md-12 text-end">
                                            <button class="btn general">REGISTER</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="../resources/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>