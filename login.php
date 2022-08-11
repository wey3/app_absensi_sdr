<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Absen Siswa-SMKN1Kragilan</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-info">

	<div class="container">
		<div class="card p-5 col-md-4 mx-auto mt-5 f_login">
		<div class="t-form text-center">
		<h2>FORM LOGIN</h2>
		<h4>APP ABSENSI SISWA</h4>
		<hr class="col-md-5 mx-auto">
		</div>

		<form action="dashboard.php"method="POST">
		<div class="mb-3">
		<label for="exampleInputEmail1"class="form-label">Username</label>
	    <input type="text"class="form-control"id="examplelinputEmail1"aria-describedby="emailHelp"name="Username"required>
		</div>
		<div class="mb-3">
		<lebel for="exampleinputPassword1" class="from-label">Password</lebel>
        <input type="Password" class="form-control"id="exampleinputPassword1"name="username"required>
        </div>
           
            <button type="submit"class="btn btn-primary col-md-12">login</button>
    </from>
    <div class="fot_login text-center mt-5">
    	<small>Login With</small><br>
    	<hr class="col-md-3 mx-auto">
    <a href="#">facebook</a> | <a href="#">Google</a>
</div>
</div>
</div>

</body>
</html>
