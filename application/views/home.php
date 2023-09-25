<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda Sekolah</title>
    <!-- Tambahkan tautan ke file CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    .background {
        background-image: url("https://foto.data.kemdikbud.go.id/getImage/20328986/7.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .background-image-black {
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.4);
        /* Ubah nilai alpha (0.4) sesuai kebutuhan Anda */
    }

    .transparan-text {
        opacity: 0.5;
        /* Ubah nilai opacity sesuai keinginan Anda */
    }
    </style>

</head>

<body class="background">
    <!-- Jumbotron -->
    <div class="text-center background">
        <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" alt="image" height="200px" width="200px">
        <h1 class="text-white">Sistem Informasi Sekolah </h1>
        <h3 class="text-white">SMK Bina Nusantara Demak</h3>
        <br>
        <br>
        <a class="btn btn-primary" href="auth" role="button">Login</a>
        <a class="btn btn-warning" href="auth/register" role="button">Register</a>
    </div>
    <br>
    <br>
    <br>
    <!-- Konten Utama -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-white">Tentang SIS</h2>
                <p class="text-white">SIS (Sistem Informasi Sekolah) adalah sebuah sarana atau alat yang bisa digunakan
                    untuk meningkatkan pelayanan dan kualitas sekolah. Melalui sistem ini, pihak sekolah bisa
                    berinteraksi dengan banyak pihak terkait. Seperti calon siswa, masyarakat, siswa, orang tua, dan
                    lain-lain.</p>
            </div>
            <div class="col-md-6">
                <h2 class="text-white">Hubungi Kami</h2>
                <p class="text-white"> <img
                        src="https://w7.pngwing.com/pngs/610/951/png-transparent-house-computer-icons-house-angle-building-logo.png"
                        alt="image" height="20px" width="20px"> Gg. Mondosari . No.5, Mondosari, Batursari, Kec.
                    Mranggen, Kabupaten Demak, Jawa Tengah 59567 </p>
                <p class="text-white"> <img
                        src="https://e7.pngegg.com/pngimages/483/351/png-clipart-telephone-mobile-phones-home-phone-logo-monochrome.png"
                        alt="image" height="20px" width="20px">(024) 76728970 </p>
                <p class="text-white"> <img
                        src="https://e7.pngegg.com/pngimages/210/268/png-clipart-computer-icons-internet-world-wide-web-text-logo.png"
                        alt="image" height="25px" width="25px"> <a class="text-white"
                        href="https://smkbinusademak.sch.id/">https://smkbinusademak.sch.id/</a> </p>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer -->
    <br>
    <br>
    <br>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy;2023@Copyright SMK Bina Nusantara Demak</p>
    </footer>
</body>

</html>