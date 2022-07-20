<?php
$server = "localhost";
$username="root";
$password="";
$database="web2";

$conn= mysqli_connect($server,$username,$password,$database);
if(isset($_POST["AddStudent"]))
{
   //1.fetch form data
    
    
    $fullname= $_POST['fullname'];
    $phone= $_POST['phonenumber'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $course= $_POST['course'];
 
    //2. submit form data
    $insertData = mysqli_query( $conn, "INSERT INTO
    enrollment(fullname,phonenumber,email,gender,course)
    VALUES('$fullname','$phone','$email','$gender','$course')");
 
}
?>  
<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/headers.php')?>
<body>
<?php require_once('includes/navbar.php')?>
<div class="sidebar">
 <?php require_once('includes/sidebar.php')?>
</div>
    <div class="main-content">
        <div class="container-fluid">
            <div class="card p-5">
                <h1 class ="text-primary" > Add Student</h1>
                <form action="addstudent.php" method = "POST">
                <div class="row">
                    <div class="col-lg-12">
                        <label for="email" class="form label"><b>E-mail</b></label>
                        <input type="email"class="form-control"name="email" placeholder="please enter your Email" >
                    </div>
                    <div class="col-lg-12">
                        <label for="phonenumber" class="form label"><b>Phone Number</b></label>
                        <input type="tel" name = "phonenumber" class="form-control" placeholder="+2547" >
                    </div>
                    <div class="col-lg-12">
                        <label for="fullname" class="form label"><b>Full Name</b></label>
                        <input type="text" name = "fullname" class ="form-control" placeholder="Enter your full name" >
                    </div>
                    <div class="col-lg-12">
                        <label for="gender" class="form label"><b>whats your gender</b></label>
                        <select class="form-select form-control" aria-label="default select example" name = "gender">
                            <option selected>--select your gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                    <p class="p-5">In order to complete your registration to the bootcamp, you are required to select one course you will be undertaking. Please NOTE  that this will be your learning track during the 2-weeks immersion. </p>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="preferredcourse" class="form label">whats your preferred course?</b></label>
                        <select class="form-select form-control" aria-label="default select example" name = "course">
                            <option selected>--select your course--</option>
                            <option value="Web development">Web development</option>
                            <option value="Cyber Security">Cyber Security</option>
                            <option value="Data analysis">Data analysis </option>
                        </select>
                    </div>
                </div>
                <p>You agree by providing your information you understand all our data privacy and protection policy outlined in our Terms & condition and the privacy policy statement.</p>
                <input type="checkbox" name="agreement" id="Agree terms and conditions">Agree terms and conditions </input>
                <button type="submit" class="btn btn-primary" name="AddStudent">Add Student </button>
            </div>
        </div>
    </div>
    
</body> 