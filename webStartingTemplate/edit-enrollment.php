<?php
require_once('logics/dbconnection.php');
$queryuser=mysqli_query($conn,"SELECT * FROM enrollment WHERE no ='".$_GET['id']."'");


while($fetchuser=mysqli_fetch_array($queryuser))
{
	$fullname=$fetchuser['fullname'];
	$phonenumber=$fetchuser['phonenumber'];
	$email=$fetchuser['email'];
	$gender=$fetchuser['gender'];
	$course=$fetchuser['course'];
}
?>

<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>

	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>


	</div>
	<div class="main-content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                            <h4>Edit Student:  </h4>
                        </div>
						<div class="card-body">
							<form action="enroll.php" method = "POST">
								<div class="row">
									<div class="col-lg-6">
										<label for="email" class="form label"><b>E-mail</b></label>
										<input type="email"value="<?php echo $email?>" class="form-control"name="email" placeholder="please enter your Email" >
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<label for="phonenumber" class="form label"><b>Phone Number</b></label>
										<input type="tel" name = "phonenumber" value="<?php echo $phonenumber?>"class="form-control" placeholder="+2547" >
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<label for="fullname" class="form label"><b>Full Name</b></label>
										<input type="text" name = "fullname" value="<?php echo $fullname?>" class ="form-control" placeholder="Enter your full name" >
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<label for="gender" class="form label"><b>whats your gender</b></label>
										<select class="form-control" aria-label="default select example" name = "gender">
											<option> <?php echo $gender?></option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
								</div>
								
								<div class="row">
									<div class="col-lg-6">
										<label for="preferredcourse" class="form label"><b>whats your preferred course?</b></label>
										<select class="form-control" aria-label="default select example" name = "course">
											<option n> <?php echo $course?></option>
											<option value="Web development">Web development</option>
											<option value="Cyber Security">Cyber Security</option>
											<option value="Data analysis">Data analysis </option>
										</select>
									</div>
								</div> 
								
								<button type="submit" class="btn btn-primary" name="submitbutton">Update Records </button>
								</div>
							</form>
						</div>
                    </div>

                </div>
            </div>
			
		</div>	
	</div>
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>