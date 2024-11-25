<html>

<style>
    .boxxer{
        justify-content: center;
         text-align: center;
         padding: 20px;
         margin: auto;
      font-weight: bold;
      background-color: #243642;
      color: #fff;
    }
    .boxxer>h2{
        font-size: 2.5em;
        font-weight: bolder;
        color: #fff;
    }
</style>

<?php 
include '../Model/Db.php';



$certification_number = $_GET['certification_number'];

$query = "SELECT * FROM certifications WHERE certification_number = '$certification_number'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){?>
        <div class= "boxxer" >
        '<h2>Certificate Information</h2>
        <p>Certification Number:- <?php echo $row['certification_number']?></p>
         <p>Name:- <?php echo $row['name']?></p>
         <p>training_type:- <?php echo $row['training_type']?></p>
        <p>start_date:- <?php echo $row['start_date']?></p>
    <p>end_date:- <?php echo$row['end_date']?></p>
        <!-- <p>Description:<?php echo$row['description']?></p> -->
     <a href="../Component/Certificate_Verification.php">Back to Verification Page</a>
        </div>;
   <?php } 
 }
 include '../Component/Footer.php';
 ?>


</html>