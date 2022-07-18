<?php
//Database connection
require_once('logics/dbconnection.php');
$sqlFetchMessage= mysqli_query($conn,
"SELECT * FROM contactus WHERE no ='".$_GET['id']."'");
while($FetchMessage=mysqli_fetch_array($sqlFetchMessage))
{
	
	$firstname=$FetchMessage['firstname'];
	$secondname=$FetchMessage['lastname'];
    $phone=$FetchMessage['phonenumber'];
    $emailAddress=$FetchMessage['email'];
	
    $time=$FetchMessage['created_at'];
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">Personal Information</h4>
                        </div>
                        <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">First Name:<span class= "float-right badge badge-primary"><?php echo $firstname?> </span> </li>
                            <li class="list-group-item">Second Name:<span class= "float-right badge badge-secondary"><?php echo $secondname?></span></li>
                            <li class="list-group-item">Email:<span class= "float-right badge badge-danger"><?php echo $emailAddress?></span></li>
                            <li class="list-group-item">Phone Number:<span class= "float-right badge badge-info"><?php echo $phone?></span></li>
                            <li class="list-group-item">Enrolled on:<span class= "float-right badge badge-success"><?php echo $time?></span></li>
                        
                        </ul>

                        </div>
                    </div>
                </div>
                
            </div>
          
			
		</div>	
	</div>
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>