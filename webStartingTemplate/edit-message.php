<?php
$message="";
require_once('logics/dbconnection.php');
$sqlcontactus=mysqli_query($conn,"SELECT * FROM contactus WHERE no ='".$_GET['id']."'");


while($fetchmessage=mysqli_fetch_array($sqlcontactus))
{
	$id= $fetchmessage['no'];
	$firstname=$fetchmessage['firstname'];
    $secondname=$fetchmessage['lastname'];
	$phone=$fetchmessage['phonenumber'];
	$emailAddress=$fetchmessage['email'];
	$createdat=$fetchmessage['created_at'];
}

//update user records
if(isset($_POST['updateRecords'])) 
{
	//fetch form data
	$firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
	$phone=$_POST['phonenumber'];
	$emailAddress=$_POST['email'];
	
	

	//update records
	$updateQuery= mysqli_query($conn,
	"UPDATE contactus SET firstname='$firstname',lastname='$lastname',phonenumber='$phone',email='$emailAddress'
	WHERE no='".$_GET['id']."'");

	if($updateQuery)
	{
		$message="Data updated";
	}
	else{
		$message="Error occured";
	}
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
                            <h4>Edit message:  </h4>
							<span><?php echo $message?></span>
                        </div>
						<div class="card-body">
							<form action="edit-message.php?id=<?php echo $id?>" method = "POST">
								<div class="row">
									<div class="col-lg-12">
										<label for="firstname" class="form label"><b>First Name</b></label>
										<input type="text"value="<?php echo $firstname?>" class="form-control"name="firstname" placeholder="please enter your first name" >
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<label for="lastname" class="form label"><b>Last Name</b></label>
										<input type="text" name = "lastname" value="<?php echo $secondname?>"class="form-control" placeholder="please enter your last" >
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<label for="phonenumber" class="form label"><b>Phone Number</b></label>
										<input type="tel" name = "phonenumber" value="<?php echo $phone?>" class ="form-control" placeholder="Enter your full name" >
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<label for="email" class="form label"><b>email</b></label>
										<input type="email" name = "email" value="<?php echo $emailAddress?>" class ="form-control" placeholder="Enter your full name" >
									</div>
								</div>
								<div class="row">
								<button type="submit" class="btn btn-primary" name="updateRecords">Update Records </button>
								</div>
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