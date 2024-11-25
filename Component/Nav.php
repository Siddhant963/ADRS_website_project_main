<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>

body{
            background-color: #243642;
            color: #ffff;

        }
        .logo1 {
            height: 10vh;
            width: 10vw;
            
        }
        

        .navbar {
            
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            font-size: 16px;
            font-weight: 500;
            color:#ffff;
            
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #243642;
        }

        @media (max-width: 991px) {
            .navbar-nav .nav-item {
                text-align: center;
                margin-bottom: 10px;
            }
        }

        .carousal{
            height: 60px;
            
          }
          .a{
            height: 70vh;
          }
        
            body{
                margin:0;
            }
            .mope{
                position: relative;
                width: 100vw;
                height: 11vh;
                background-color: #243642;
                overflow: hidden;
                display: flex;
                align-items: center;
                justify-content: center;
                
            }
            .mope span{
                margin-right: 10px;
                font-size: 20px;
                font-weight: bolder;
            }
            .ani{
                animation: slide 17s linear infinite, color-change 1s linear infinite; ;
                overflow: hidden; 
                width: 100%;
            }
            .submit-button {
                background-color: #243642;
                color: #fff;
                transition: background-color 0.3s;
                border-radius: 2px;
                margin-left:25;
                border:1px solid #fff;
                
            }
            @keyframes slide {
                0% {
                transform: translateX(100%);
                }
                100% {
                 transform: translateX(-100%); 
                }
                }
                @keyframes color-change {
                 0% { color: #ff6347; }   
                 20% { color: #ffd700; }  
                 40% { color: #00fa9a; }  
                 60% { color: #1e90ff; }  
                 80% { color: #ff69b4; }  
                 100% { color: #ff6347; } 
      }
    
            .submit-button:hover {
                background-color: #243642;
            }

            h4 {
                margin-bottom: 15px;
                font-size: 20px;
                color: #ffff;
            }
    
            ul {
                list-style-type: square;
                margin-left: 20px;
                padding: 0;
            }
    
            ul li {
                margin: 10px 0;
            }
    
            /* Container Styles */
            .online-marketing-needs {
                padding: 20px;
            }
    
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 15px;
            }
    
            .row {
                display: flex;
                flex-wrap: wrap;
                margin: -15px;
            }
    
            .col-lg-4, .col-md-4, .col-sm-4, .col-xs-12 {
                padding: 15px;
                flex: 1 1 calc(33.33% - 30px); /* Three columns */
            }
    
            /* Full-width for small screens */
            @media (max-width: 768px) {
                .col-lg-4, .col-md-4, .col-sm-4, .col-xs-12 {
                    flex: 1 1 100%; /* One column */
                }
            }
    
            /* Tabs Styling */
            .nav-pills {
                display: flex;
                gap: 15px;
                margin-bottom: 15px;
            }
    
            .nav-pills li {
                list-style: none;
            }
    
            .nav-pills a {
                text-decoration: none;
                color: #ffff;
                padding: 10px 15px;
                border: 1px solid #ffff;
                border-radius: 5px;
                transition: all 0.3s;
            }
    
            .nav-pills a:hover,
            .nav-pills .active a {
                background-color: #456479;
                color: #ffff;
            }
    
            .tab-content {
                padding: 15px;
                border: 1px solid #ffff;
                border-radius: 5px;
                background-color: #243642;
                color: #fff;
            }
    
            .tab-pane {
                display: none;
            }
    
            .tab-pane.active {
                display: block;
            }
            .navc{
    background-color: #3d5c71;
}
.tushar{
    height: 15vh;
    width: 15vw;
}
.nav{
    margin-left: 15px;
}
        </style>
    <title>Document</title>
</head>
<body>
<nav class="navbar navc navbar-expand-lg navbar-light">
  <div class="container-fluid">
  <a class="nav" href="#">
  <img src="../src/assets/images/ADRS_logo.png" alt="Logo" class="white-thick-logo">

<style>
  .white-thick-logo {
    filter: invert(1) brightness(2) contrast(2) drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.8));
    width: 130px; 
      /* filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.8)); */

      /* border: 5px solid white; Adds thickness */
      /* background-color: black; Optional: Ensures visibility on dark background */
      /* padding: 10px; Adds extra thickness */
      display: block;
  }
</style>
  </a>
                <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link active " href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./About_Us.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Services.php">Service</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Our_team.php">Our_Team</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Register.php">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Certificate_Verification.php">Verify</a>
                    </li>
                </ul>
    </div>
  </div>
</nav>


    <!-- <nav class=" navc navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="nav" href="#">
                <img src="../src/assets/images/ADRS_logo.png" alt="Logo" style="color: #ffff;" class="logo1">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link active " href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./About_Us.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Services.php">Service</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Our_team.php">Our_Team</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Register.php">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Certificate_Verification.php">Verify</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>
</html>

<!-- <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link active " href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./About_Us.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Services.php">Service</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Our_team.php">Our_Team</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Register.php">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Certificate_Verification.php">Verify</a>
                    </li>
                </ul> -->