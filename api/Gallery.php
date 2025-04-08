<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .full-size-image{
        height: 300px;
        padding: 100px;
        background-image: url("https://th.bing.com/th/id/OIP.NylBtwlB0o6wkz4dEsLE2gHaEK?rs=1&pid=ImgDetMain");
        background-repeat: no-repeat;
        background-size: cover;
        font-weight: 50px;
        text-align:center;
      
   }
   /* .img-gallary{
       height: 150px;
       width: 200px;
       margin-top: 20px;
       border: 2px solid black;
   }
   .img-gallary-div{
    height: 200px;
   
   } */
   .collaege{ 
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    width: 100vw;
    
   }
   .photo{ 
    /* height: 100;  */
     width: 100%; 
    margin-top: 20px;
    border: 4px solid white;
    border-radius: 10px;
   }
   .photo:hover{ 
    transform: scale(1.1);
    transition: transform 0.5s;
   }
   /* @media only screen and (max-width: 600px) {
.photo{
    height: 20vh;
    width: 30vw;
 
  }
} */
</style>
<?php include './Nav.php'; ?>
<body>
    <div class="">
        <div class="row">
            <div class="col-12 full-size-image ">
              <h1 class="text-light">Gallery</h1>
              <h6 class="text-light">Home-Gallery</h6>
            </div>
        </div>
    </div>
    <div class="container gallery-container pt-5 pb-5">
        <h2 class="gallery-title">Explore Our Moments</h2>
        <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-3">
                <img src="../src/assets/images/p1.jpg" alt="Image 1" class="photo">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="../src/assets/images/p2.jpg" alt="Image 2" class="photo">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="../src/assets/images/p3.jpg" alt="Image 3" class="photo">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="../src/assets/images/p4.jpg" alt="Image 4" class="photo">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="../src/assets/images/p5.jpg" alt="Image 5" class="photo">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="../src/assets/images/p6.jpg" alt="Image 6" class="photo">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="../src/assets/images/p7.jpg" alt="Image 7" class="photo">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="../src/assets/images/p1.jpg" alt="Image 8" class="photo">
            </div>
        </div>
    </div>


        <?php include './Footer.php'; ?>
   

   </div>
</body>
</html>