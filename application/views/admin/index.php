<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<style>
    /*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
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
}

#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}


/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 20%;
    padding: 20px;
    min-height: 100vh;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
</style>
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
                      <a href="<?php echo base_url('auth')?>">Logout</a>
                 </li>
                </li>

               
        </nav>
        
        <!-- Page Content  -->
        <div id="content">
        <div class="card">
  <h2 class="card-header bg-primary text-white">Jumlah Kelas</h2>
  <div class="card-body bg-primary text-white">
    <h2 class="card-text"><?php echo $kelas;?>
</h2>
  </div>
</div>
<br>
        <div class="card">
  <h2 class="card-header bg-primary text-white">Jumlah Siswa</h2>
  <div class="card-body bg-primary text-white">
    <h2 class="card-text"><?php echo $siswa;?>
</h2>
  </div>
</div>
<br>
        <div class="card">
  <h2 class="card-header bg-primary text-white">Jumlah Mapel</h2>
  <div class="card-body bg-primary text-white">
    <h2 class="card-text"><?php echo $mapel;?>
</h2>
  </div>
</div>
<br>
        <div class="card">
  <h2 class="card-header bg-primary text-white">Jumlah Guru</h2>
  <div class="card-body bg-primary text-white">
    <h2 class="card-text"><?php echo $siswa;?>
</h2>
  </div>
</div>
</div>
                </div>
            </nav>
        </div>
    </div>
</body>
</html>