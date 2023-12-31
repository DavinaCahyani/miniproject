<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    .background {
        background-image: url("https://foto.data.kemdikbud.go.id/getImage/20328986/7.jpg");
        background-size: cover;
    }

    .card {
        padding-left: 30px;
        /* Tambahkan padding kiri */
        padding-right: 30px;
        /* Tambahkan padding kanan */
    }
    </style>
</head>

<body class="background container py-5 px-20">

    <div class="card justify-content-center mx-auto" style="width: 20rem;">
        <div class="card-body">
            <form action="<?php echo base_url();?>auth/aksi_register" method="post">
                <h5 class="card-title text-center">Register Page</h5>
                <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" class="img-thumbnail" alt="image">
                <p class="text-center">SMK Bina Nusantara</p>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email </label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email"
                        name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username"
                        name="username">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    <input type="checkbox" id="showPassword"> Show Password
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-warning">Register</button>
                </div>
            </form>
            <div>
                <p class="text-center">Sudah punya akun? <a href="./">Login</a></p>
            </div>
        </div>
    </div>

    <script>
    const passwordField = document.getElementById("password");
    const showPasswordCheckbox = document.getElementById("showPassword");

    showPasswordCheckbox.addEventListener("change", function() {
        if (showPasswordCheckbox.checked) {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    });
    </script>

</body>

</html>