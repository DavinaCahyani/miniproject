<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.3.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.3.4/dist/sweetalert2.min.js"></script>

    <style>
    /* DEMO STYLE */

    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

    body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa;
        margin: 0;
        padding: 0;
    }

    .navbar {
        background: #7386D5;
        padding: 15px 0;
    }

    .navbar-brand {
        color: #fff;
        font-size: 24px;
        font-weight: bold;
    }

    .navbar-toggler-icon {
        background-color: #fff;
    }

    .navbar-toggler {
        border: none;
    }

    .navbar-nav .nav-item .nav-link {
        color: #fff;
        transition: all 0.3s;
    }

    .navbar-nav .nav-item .nav-link:hover {
        color: #6d7fcc;
    }

    /* SIDEBAR STYLE */

    .wrapper {
        display: flex;
    }

    #sidebar {
        min-width: 250px;
        max-width: 250px;
        background: #7386D5;
        color: #fff;
        transition: all 0.3s;
        height: 800px;
    }

    #sidebar.active {
        margin-left: -250px;
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #6d7fcc;
    }

    #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #47748b;
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        color: #fff;
    }

    #sidebar ul li a:hover {
        background: #6d7fcc;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        background: #6d7fcc;

    }

    /* CONTENT STYLE */

    #content {
        flex-grow: 1;
        padding: 20px;
    }

    .card {
        margin-bottom: 20px;
    }

    .card-header {
        background: #6d7fcc;
        color: #fff;
    }

    .card-body {
        background: #7386D5;
        color: #fff;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Dashboard</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <ul>
                        <li>
                            <a href="<?php echo base_url('admin/index')?>">Dashboard Sekolah</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/datasiswa')?>">Data Siswa</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/guru')?>">Data Guru</a>
                        </li>
                    </ul>
                <li>
                    <!-- Replaced "Logout" text with a small and transparent image -->
                    <a href="<?php echo base_url('auth')?>">
                        <img src="https://pic.onlinewebfonts.com/thumbnails/icons_71494.svg" alt="Logout"
                            style="width: 20px; opacity: 0.5;" />Logout
                    </a>
                </li>

                </li>
            </ul>
        </nav>
        <!-- content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <p class="navbar-brand">Data Guru</p>
                </div>
            </nav>
            <!-- content -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Gender</th>

                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php $no=0;foreach($guru as $row): $no++ ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $row->nama_guru?></td>
                        <td><?php echo $row->nik ?></td>
                        <td><?php echo $row->gender ?></td>

                        <td class="text-center">

                            <a href="<?php echo base_url('admin/ubah_guru/').$row->id_guru?>"
                                class="btn btn-sm btn-primary">Ubah</a>
                            <button onClick="hapus(<?php echo $row->id_guru?>)"
                                class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="text-center">
                <a href="<?php echo base_url('admin/tambahguru')?>" class="btn btn-primary">Tambah Guru</a>
            </div>
        </div>
        <script>
        function hapus(id) {
            swal.fire({
                title: 'Yakin untuk menghapus data ini?',
                text: "Data ini akan terhapus permanen",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Ya Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil Dihapus',
                        showConfirmButton: false,
                        timer: 1500,

                    }).then(function() {
                        window.location.href = "<?php echo base_url('admin/hapus_guru/')?>" + id;
                    });
                }
            });
        }
        </script>
</body>

</html>