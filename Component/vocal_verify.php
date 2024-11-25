<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        h5 {
            margin-top: 40px;
            margin-left: 20px;
        }

        .img2 {
            height: 50vh;
            width: 100%;
        }

        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 4rem;
            font-weight: bold;
            text-align: center;
        }

        span {
            font-size: 20px;
        }
        .btn {
            width: 100%;
            height: 50px;
            margin-top: 2vh;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .title {
            margin-top: 2vh;
            margin-left: 10vh;
        }
        .line {
            font-size: 2rem;
            color: white;
            text-align: center;
        }

        .input {
            width: 100%;
            max-width: 400px;
            margin: 15px auto;
        }

        h1 {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .verify {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 60vh;
        }

        .verify .input {
            margin-top: -2px;
            margin-bottom: 20px;
        }

        .button {
            margin-top: 10vh;
            margin-left: -10vh;
        }
        .h{
            margin-top: -20vh;
        }

        @media (max-width: 768px) {
            .text-overlay {
                margin-top: 10px;
                font-size: 3rem; 
                top: 40%; 
                
            }

            .img2 {
                height: 40vh; 
            }

            .h {
                font-size: 2rem; 
                margin-top: -10vh;
            }
        }
    </style>
</head>

<body>
<?php include './Nav.php'; ?>
    <div class="mid">
        <div class="position-relative">
            <img class="img2" src="https://img.freepik.com/free-vector/gradient-futuristic-cyber-background_23-2149116407.jpg?t=st=1731678438~exp=1731682038~hmac=235dc38099cbdff2717ef9cb29f46b38672380a296e9d69360b1b2c3b8b5bec5&w=1800" alt="Verification Background">
            <div class="text-overlay">Vocational Training Certificate Verification<br></div>
        </div>
    </div>

    <div class="verify">
        <h1 class="h">Verify Certificate</h1>
        <div class="input">
            <input type="text" id="lastName" name="lastName" placeholder="Enter your registered number" class="form-control" required>
        </div>
        <div class="input">
            <a href="" class="btn btn-primary">Search</a>
        </div>
    </div>

    <?php include './Footer.php'; ?>
</body>

</html>