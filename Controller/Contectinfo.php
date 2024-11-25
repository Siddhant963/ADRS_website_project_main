<?php 
include "../Model/Db.php";

$Name = $_POST['Name'];
$email_address = $_POST['email'];
$contact_number = $_POST['contact'];
$dob = $_POST['dob'];
$message = $_POST['message'];


// Insert into the database
$sql = "INSERT INTO contact_info (name, email_address, contact_number, dob, message) 
        VALUES ('$Name', '$email_address', '$contact_number', '$dob', '$message')";
   
   if ($conn->query($sql) === TRUE){
//     echo "New record created successfully";
//     $to = "adrstechnosoft@gmail.com"; // Replace with the company's email address
//     $subject = "New Contact Form Submission";
//     $body = "You have received a new message:\n\n" .
//             "Last Name: $Name\n" .
//             "Email Address: $email_address\n" .
//             "Contact Number: $contact_number\n" .
//             "D.O.B: $dob\n\n" .
//             "Message:\n$message\n";

//     $headers = "From: adrstechnosoft@gmail.com"; // Replace with your no-reply email

//     if (mail($to, $subject, $body, $headers)) {
//         echo "Message sent and saved successfully!";
//     } else {
//         echo "Message saved, but email failed to send.";
//             }
   
    
 }
 else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       }
?>