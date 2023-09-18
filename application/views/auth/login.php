<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>
     .background {
            background-image : url("https://foto.data.kemdikbud.go.id/getImage/20328986/7.jpg");
            background-size : cover;
        }
</style>
</head>
<body class="background container py-5">
    <div class= "card justify-content-center mx-auto"style="width: 20rem;">
    <!-- <div class="btn btn-sm btn-primary"> -->
  <div class="card-body">
  <form action="<?php echo base_url();?>auth/aksi_login" method="post"> 
    <h5 class="card-title text-center">Login Page</h5>
    <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" class="img-thumbnail" alt="image">
    <p class="text-center">SMK Bina Nusantara</p>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email </label>
  <input type="email" class="form-control btn btn-sm btn-light" id="exampleFormControlInput1" placeholder="Email" name="email">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="password" class="form-control btn btn-sm btn-light" id="exampleFormControlInput1" placeholder="Password" name="password">
</div>
<div class= "text-center">
<button type="submit" class="btn btn-primary">Login</button>

</div>
  </div>
  </form>
  </div>
</div>
</div>
</body>
</html>