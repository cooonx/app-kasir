<?php
	@ob_start();
	session_start();
	if(isset($_POST['proses'])){
		require 'config.php';
			
		$user = strip_tags($_POST['user']);
		$pass = strip_tags($_POST['pass']);

        $data = mysqli_query($conn,"SELECT* FROM login WHERE user='$user' AND pass='$pass'");
        $cek = mysqli_num_rows($data);
        if($cek > 0){
            $_SESSION['user'] = $user;
            $_SESSION['status'] = "login";
            echo '<script>alert("Login Sukses");window.location="index.php"</script>';
        }else{
            echo '<script>alert("Maaf! data yang anda masukan salah.");history.go(-1);</script>';
        }
	}
    if(isset($_SESSION['status']))
    {header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="icon.png">
    <link rel="icon" href="icon.ico" type="image/ico">
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body background="bg2.jpg">

<div class="container">
<br><br><br>

<div class="row justify-content-center">
    <div style="width: 400px; height: 400px;">
        <div class="card shadow">
            <div class="card-body">
                <h1 class="h4 text-center mb-4"><b>LOGIN</b></h1>
                <p align="center">Memudahkan admin untuk melayani pelanggan dalam bertansaksi.</p>
                <br><br>
                <form method="POST">
                    <div class="form-group">
                        <label><b>Username</b></label><input type="text" class="form-control form-control-user" name="user" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                        <label><b>Password</b></label><input type="password" class="form-control form-control-user" name="pass" placeholder="Masukkan Password">
                    </div>
                    <br><br>
                    <button style="background:#0080FF; color: white;" class="btn form-control-user btn-block"
                    name="proses"  type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<footer class="text-center mb-0 py-3">
    <p class="text-muted small mb-0"><font color="fffff">Copyright &copy;   <b>KELOMPOK 6</b></a>. All Rights Reserved</font></p>
</footer>

</div> <!-- end container fluid -->

    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
    window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 1000);
</script>
</body>
</html>