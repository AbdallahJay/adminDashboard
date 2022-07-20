<?php
//Database connection
require_once('logics/dbconnection.php');
$sqlSubscribers= mysqli_query($conn,
"SELECT * FROM subscribers WHERE no ='".$_GET['id']."'");
while($FetchSubscribers=mysqli_fetch_array($sqlSubscribers))
{
	
	
    $emailAddress=$FetchSubscribers['email'];
	
    $time=$FetchSubscribers['created_at'];
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