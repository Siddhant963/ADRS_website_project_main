<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive 3-Box Row</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<!-- <style>
    body, html {
        height: 100%;
        margin: 0;
        background-color: #243642;
        padding: 0;
    }

    .header {
        height: 25vh;
        color: white;
        background: url("https://thumbs.dreamstime.com/z/technical-support-customer-service-business-technology-internet-concept-155284878.jpg?w=992") center/cover;
    }
    h1{
        padding-left: 20vh;
        padding-top: 10vh;
        font-family:cursive;
        font-style: oblique;
        font-weight: 200;
  }
h6{
    padding-left: 20vh;
    font-family:cursive;
        font-style: oblique;
        font-weight: 200;
}
</style> -->
<style>
     h1{
        padding-left: 20vh;
        padding-top: 10vh;
        font-family:cursive;
        font-style: oblique;
        font-weight: 200;
  }
  .header {
        height: 25vh;
        color: white;
        background: url("https://thumbs.dreamstime.com/z/technical-support-customer-service-business-technology-internet-concept-155284878.jpg?w=992") center/cover;
    }
.card {
    height:30vh;
    /* display: flex; */
    /* flex-direction: column; */
    border-radius: 5px;
    overflow: hidden;
    /* background-repeat: no-repeat;
    background-size: cover; */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    /* gap: 35px; */
    transition: 1s;
    /* color:white; */
}

.card-image {
    /* height: 88%; */
    /* background-size: cover; */
  
    /* background-position: center; */
}

/* .card-title {
    background-color:grey ;
    color: white;
    text-align: center;
margin-bottom: -2vh;
    height: 8vh;
    padding-top: 1vh;
    font-weight: bold;
} */
.card:hover{
transform: scale(1.1);
z-index: 2;
} 
</style>
<body>
 <div><?php include './Nav.php'; ?></div>
<div class="header">
    <h1>Services...</h1>
    <!-- <h6>Home-Services</h6> -->
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-12 col-lg-4 mb-4">
            <div class="card h-100 shadow">
                <img src="../src/assets/images/webdev.jpg" class="card-img-top img-fluid" alt="Web Development">
                <div class="card-body text-center">
                    <a href="./Contact.php"><h5 class="card-title">Web Development</h5></a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-12 col-lg-4 mb-4">
            <div class="card h-100 shadow">
                <img src="../src/assets/images/app_dev.avif" class="card-img-top img-fluid" alt="Application Development">
                <div class="card-body text-center">
                    <a href="./Contact.php"><h5 class="card-title">Application Development</h5></a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-12 col-lg-4 mb-4">
            <div class="card h-100 shadow">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR56H_si6dRAa90PtGNzLwiY-Irnctx2m-0Kg&s" 
                    class="card-img-top img-fluid" alt="Software Development">
                <div class="card-body text-center">
                   <a href="./Contact.php"> <h5 class="card-title">Software Development</h5></a>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-12 col-lg-4 mb-4">
            <div class="card h-100 shadow">
                <img src="../src/assets/images/digital_marketing.avif" class="card-img-top img-fluid" alt="Digital Marketing">
                <div class="card-body text-center">
                    <a href="./Contact.php"><h5 class="card-title">Digital Marketing</h5></a>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-12 col-lg-4 mb-4">
            <div class="card h-100 shadow">
                <img src="../src/assets/images/logo_designing.jpg" class="card-img-top img-fluid" alt="Logo Design">
                <div class="card-body text-center">
                    <a href="./Contact.php"><h5 class="card-title">Logo Design</h5></a>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-12 col-lg-4 mb-4">
            <div class="card h-100 shadow">
                <img src="../src/assets/images/grapgic.avif" class="card-img-top img-fluid" alt="Graphic Design">
                <div class="card-body text-center">
                   <a href="./Contact.php"><h5 class="card-title">Graphic Design</h5></a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border: none; /* Clean card appearance */
        border-radius: 10px;
    }

    .card-img-top {
        object-fit: cover; /* Ensures the images fit perfectly */
        height: 200px; /* Consistent height for all images */
        border-top-left-radius: 10px; /* Matches card's border radius */
        border-top-right-radius: 10px;
    }

    .card-title {
        font-weight: bold;
        font-size: 1.2rem;
        color: #333; /* Subtle text color for titles */
    }

    .shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    }

    .card-body {
        padding: 15px;
    }
</style>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>