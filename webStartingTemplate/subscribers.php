<?php
require_once('logics/dbconnection.php');

$sqlSubscribers= mysqli_query($conn,"SELECT * FROM subscribers");


//update user records
if(isset($_POST['updateRecords'])) 
{
	//fetch form data
	
	$emailAddress=$_POST['email'];
	
	

	//update records
	$updateQuery= mysqli_query($conn,
	"UPDATE subscribers SET email='$emailAddress'
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">Subscriber Information</h4>
                        </div>
                        <div class="card-body">
                        <table class="table table-striped table-hover table-responsive" style="font-style:12px;">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    
                                    <th>Email</th>
                                    
                                    <th>Enrolled on</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($fetchSubscribers=mysqli_fetch_array($sqlSubscribers)) { ?>
								<tr>
									<td><?php echo $fetchSubscribers['no']?></td>
									
									<td><?php echo $fetchSubscribers['email']?></td>
									
									<td><?php echo $fetchSubscribers['created_at']?></td>
									<td>
										<a href="view-subscribers.php?id=<?php echo $fetchSubscribers['no'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
										<a href="view-subscribers.php?id=<?php echo $fetchSubscribers['no'] ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
										<a href="deletesubscribers.php?id=<?php echo $fetchSubscribers['no'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								<?php }?>
                            </tbody>
                        </table>
						<?php require_once('includes/scripts.php')?>
