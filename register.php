<?php
include 'inc/header.php';
    $dbConn=mysqli_connect('localhost','root','','blog');
    if(!$dbConn){
        die("Deshtoi lidhja me DB ".mysqli_error($dbConn));
    }
    if(isset($_POST['regjistro'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
            
        $sql="INSERT INTO users(firstname, lastname, email,  password) VALUE";
        $sql.="('$firstname','$lastname','$email','$password')";
        $user=mysqli_query($dbConn,$sql);
        if($user){
            echo "Useri u regjistru me sukses";
        }
        else{
            die("Useri deshtoi te regjistrohet me sukse");
        }
    }
?>
<main class="container">
	<div class="row justify-content-center mb-5">
    <div class="col-lg-9">
			<div class="card shadow-lg border-0 rounded-lg mt-5">
				<div class="card-header">
					<h3 class="text-center font-weight-light my-2">Register User</h3>
				</div>
				<h5 class="bg-danger text-white pl-3">
				</h5>
				<div class="card-body">
					<form method="post" id="register" action="">
						<div class="form-group">
							<label class="small mb-1" for="firstname">Firstname :</label>
							<input class="form-control py-4" name="firstname" id="firstname" 
							value="" type="firstname" placeholder="Enter Firstname" />
						</div>
                        <div class="form-group">
							<label class="small mb-1" for="lastname">lastname :</label>
							<input class="form-control py-4" name="lastname" id="lastname" 
							value="" type="lastname" placeholder="Enter Lastname" />
						</div>
                        <div class="form-group">
							<label class="small mb-1" for="email">Email :</label>
							<input class="form-control py-4" name="email" id="email" 
							value="" type="email" placeholder="Enter Email" />
						</div>
						<div class="form-group">
							<label class="small mb-1" for="password">Password :</label>
							<input class="form-control py-4" name="password" id="password" 
							value="" type="password" placeholder="password  Password" />
						</div>
						
                        <button class="btn btn-primary" type="regjistro" name="regjistro" value="regjistro"> Register </button>
						<!--<input class="btn btn-primary" id="login" value="Login" type="submit" name="login" />-->
					</form>
				</div>
				<div class="card-footer text-center">
					<div class="small">
						<a href="login.php">
							Have an account? Go to login</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</main>
