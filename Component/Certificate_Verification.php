<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
       
      
        .tab {
            margin-left: 20vh;
        }

        .img1 {
            height: 50vh;
            width: 100%;
            object-fit: cover;
        }
        h5 {
            margin-top: 40px;
            margin-left: 20px;
        }

        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #ffff;
            font-size: 5rem;
            margin-left: 1vh;
            margin-bottom: -10vh;
        }

        span {
            font-size: 1.5rem;
            margin-left: 10vh;
        }

        .card {
            height: auto;
            width: 100%;
            margin-top: 8vh;
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.6);
        }

        .btn {
            width: 100%;
            margin-top: 2vh;
            border-radius: 15px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #387478; 
            color: white;
            border: none; 
            font-size: 1.1rem; 
            transition: background-color 0.3s ease; 
        }

        .btn:hover {
            background-color: #387478; 
        }

        .title {
            margin-top: 1vh;
            text-align: center;
        }

        .cbody {
            padding: 20px;
        }

        .line {
            font-size: 2rem;
            color: white;
            text-align: center;
        }

        @media (max-width: 767px) {
            .text-overlay {
                font-size: 4rem;
            }

            .card {
                margin-top: 10vh;
            }

            .btn {
                padding: 1rem;
                height: 5vh;
            }
        }

        h1 {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
<?php include './Nav.php'; ?>
    <div class="mid">
        <div class="position-relative">
            <img class="img1" src="https://www.raysitworld.com/assets/img/service/bg_image.jpg" alt="Verification Background">
            <div class="text-overlay">Verification<br><span>Home-verification</span></div>
        </div>
    </div>

    <div class="position-relative">
        <div class="col-12 col-md-12 col-lg-12">
            <h1>Get Your Certifications Verified</h1>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="title">Course Completion Certificate Verification</h5>
                            <a href="./Course_veri.php" class="btn">Verify Now</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="title">Vocational Training Certificate Verification</h5>
                            <a href="./vocal_verify.php" class="btn">Verify Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './Footer.php'; ?>
</body>
</html>