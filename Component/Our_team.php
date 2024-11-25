<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Team Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            width: 100%;
            background-color: #243642;
            color: #629584;
        }

        .team-header-img {
            background-image: url("https://static1.squarespace.com/static/6487a82fc4e939719131fb62/648940fbf414ea5579abe1b3/671f74716926354cd2500fae/1730116264761/pexels-fauxels-3184360+%281%29.jpg?format=1500w");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            width: 100%;
        }
        @media (max-width : 450px){ 
            /* For mobile phones: */
            .team-header-img {
            height: 50vh;
        }
        pre{ 
          display: none;
        }
     }

        .team-content1 {
            margin-left: 10vw;
            margin-top: 40vh;
        }
       

        .team-bFirstHeading {
            font-size: 60px;
            font-weight: 700;
            color: #ffff;
        }

        .team-link {
            color: #fff;
            font-weight: bolder;
            font-size: 30px;
            text-decoration: none;
            margin-right: 10px;
        }

        .team-link:hover {
            /* text-decoration: underline; */
        }

        .team-meet {
            font-size: 50px;
            color: #ffff;
            font-weight: 700;
            text-align: center;
            margin-top: 50px;
        }

        .team-card {
            background: #243642;
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .team-card img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .team-name {
            font-size: 1.5rem;
            color: #ffff;
        }

        .team-card-text {
            font-weight: 600;
            font-size: 1.2rem;
            color: #629584;
        }

        .btn-custom {
            background-color: #387478;
            color: #ffff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-custom:hover {
            background-color: #285c52;
        }
    </style>
</head>

<body>
<?php include './Nav.php'; ?>
    <div class="container-fluid team-header-img d-flex align-items-center">
        <div class="team-content1">
            <p class="team-bFirstHeading text-light"><u>Our Team</u></p>
            <div>
                <!-- <a href="#" class="team-link">Home</a>
                <a href="#" class="team-link">About Us</a> -->
                <span class="team-link"><pre>Revolutionize Your Operations with Our Technology, 
                    and Expiernece a fastest solution providing team </pre> </span>
            </div>
        </div>
    </div>

    <div class="container-fluid text-light py-5">
        <p class="team-meet"><u>Meet the Founders</u></p>
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="team-card">
                    <img src="../src/assets/images/abhishek.jpg" alt="Abhishek Dubey">
                    <h2 class="team-name">Abhishek Dubey</h2>
                    <p class="team-card-text">Founder</p>
                    <!-- <a href="#" class="btn-custom">Contact</a> -->
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="team-card">
                    <img src="../src/assets/images/ritesh.jpg" alt="Ritesh Saket">
                    <h2 class="team-name">Ritesh Saket</h2>
                    <p class="team-card-text">Co-Founder</p>
                    <!-- <a href="#" class="btn-custom">Contact</a> -->
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="team-card">
                    <img src="../src/assets/images/piyush2.jpg" alt="Ritesh Saket">
                    <h2 class="team-name">Piyush khare </h2>
                    <p class="team-card-text">Co-Founder</p>
                    <!-- <a href="#" class="btn-custom">Contact</a> -->
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <p class="team-meet"><u>Our Technical Team</u></p>
        <div class="row g-4 justify-content-center">
        <div class="col-12 col-md-4">
                <div class="team-card">
                    <img src="../src/assets/images/Siddhant_jfif.webp" alt="Siddhant Dubey">
                    <h2 class="team-name">Siddhant Dubey</h2>
                    <!-- <a href="#" class="btn-custom">Contact</a> -->
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="team-card">
                    <img src="../src/assets/images/aman singh_jfif.webp" alt="Aman Singh">
                    <h2 class="team-name">Aman Singh</h2>
                    <!-- <a href="#" class="btn-custom">Contact</a> -->
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="team-card">
                    <img src="../src/assets/images/amann viskarma_jfif.webp" alt="Aman Vishwakarma">
                    <h2 class="team-name">Aman Vishwakarma</h2>
                    <!-- <a href="#" class="btn-custom">Contact</a> -->
                </div>
            </div>
        </div>
    </div>
   
</body>

</html>

