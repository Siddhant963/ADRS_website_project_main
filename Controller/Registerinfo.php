<?php
include "../Model/Db.php";

$first_name = $_POST['first_name'];
$Last_name = $_POST['Last_name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$parents_contact = $_POST['parents_contact'];
$studentNumber = $_POST['studentNumber'];
$address = $_POST['address'];
$college_name = $_POST['college_name'];
$qualification = $_POST['qualification'];
$course = $_POST['course'];
$ter_con = 1;

$sql  = "insert into registrations (first_name, last_name, gender , dob , email, parents_contact, student_number, address , college_name , qualification ,course ,terms_accepted) values ('$first_name','$Last_name','$gender','$dob','$email','$parents_contact','$studentNumber','$address', '$college_name','$qualification','$course', '$ter_con')";


if ($conn->query($sql) === TRUE){
    echo "added";
}
else{ 
    echo "error".$conn->error;
}
?>