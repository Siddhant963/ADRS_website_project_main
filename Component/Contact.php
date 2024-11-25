<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADRS Form</title>
    <!-- Link to Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #243642; /* Updated background color */
        }
        .good {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
            margin-top: 20vh;
        }

        .container{
            max-width: 700px;
            width: 80vw;
            padding: 20px;
            color: #FFFFFF;
            margin-bottom: 20px;
            
        } 
        .containr {
            max-width: 600px;
            width: 90vw;
            padding: 20px;
            background-color: #243642 ;
            margin-bottom: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h3, h4 {
            color: #FFFFFF; /* Updated heading color */
        }

        p {
            color: #629584; /* Updated paragraph color */
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .input, .input1 {
            padding: 10px;
            font-size: 1em;
            box-sizing: border-box;
            width: 100%;
        }

        .input1 {
            height: 80px;
            font-size: 1rem;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .but {
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            background-color: #387478; /* Updated button background color */
            color: white;
            width: 100%;
        }

        .second {
            display: flex;
            gap: 20px;
        }

        .second .form-group {
            flex: 1;
           
          
        }

        .fix {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .svg, .svg1 {
            height: 20px;
            width: 20px;
            margin-right: 10px;
        }

        .social-icons {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .social-icons a {
            color: #ffff; /* Updated social icon color */
            font-size: 1em;
            text-decoration: none;
        }

        .shift {
            margin-top: -20px;
            font-weight: 300;
            margin-left: 1.5rem;
            color: #ffff; /* Updated shift text color */
        }

        .iframe {
            padding: 20px;
            align-items: center;
            height: max-content;
            width: 100vw;
            background-color: white;
        }
        .contain {
            width: 100vw;
            margin-right: 0;
            display: flex;
            justify-content: center;
        }
        

        .x {
            display: flex;
            gap: 20px;
            width: 100%;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .x {
                flex-direction: column;
            }
            .container, .containr {
                width: 100%;
                margin-left: -15px;
            }
            .contain{
                width: 100%;
            }
            .second .form-group {
                flex: 1;
                width: 180px;
                height: 4.5rem;
                margin-left: -10px;
              
            }
           
    
        }
        .navhead{ 
            position: absolute;
    top: 0px;
    left: -10px;
    width: 100.5vw;
        }

    </style>
</head>
<body>
<div class="navhead"> <?php include './Nav.php'; ?></div>

<div class="good">
    <!-- Address & Contact Information -->
     
    <div class="x">
        <div class="container p-3">
            <h1>ADRS TECHNOLOGY</h1>
            <h3>Address: Near katangi bypass karmeta Jabalpur</h3>

            <div class="fix">
                <div class="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                        <path fill-rule="evenodd" d="m3.855 7.286 1.067-.534a1 1 0 0 0 .542-1.046l-.44-2.858A1 1 0 0 0 4.036 2H3a1 1 0 0 0-1 1v2c0 .709.082 1.4.238 2.062a9.012 9.012 0 0 0 6.7 6.7A9.024 9.024 0 0 0 11 14h2a1 1 0 0 0 1-1v-1.036a1 1 0 0 0-.848-.988l-2.858-.44a1 1 0 0 0-1.046.542l-.534 1.067a7.52 7.52 0 0 1-4.86-4.859Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <h3 class="shift">: 9201347033 , 9076927464</h3>
                <div class="svg1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                </div>
                <h3 class="shift">: ADRSTECHNOSOFT@GMAIL.COM</h3>
            </div>

            <div class="social-icons">
                <span>Social :</span>
                <a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="#" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/company/adrs-technology/ " title="LinkedIn" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="http://www.instagram.com/adrstechno?igsh=MWZiNTY0aWdjNWgxMA==" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- Message Form -->
        <div class="containr">
            <h4>Send Us a Message</h4>
            <form action="../Controller/Contectinfo.php" method="POST">
                <div class="second">
                    <div class="form-group">
                        <input type="text" id="lastName" name="Name" placeholder=" Name" class="input" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="E-mail Address" class="input" required>
                    </div>
                </div>
                <div class="second">
                    <div class="form-group">
                        <input type="number" id="contact" name="contact" placeholder="Contact Number" class="input" required>
                    </div>
                    <div class="form-group">
                        <input type="date" id="dob" name="dob" placeholder="D.O.B" class="input" required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" id="message" name="message" placeholder="Message" class="input1" required>
                </div>
                <div class="button-container">
                    <button class="but" type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Google Maps Embed -->
    <div class="contain">
        <div class="iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117371.20041529769!2d79.92916776924727!3d23.181467777664804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3981ae047235df95%3A0xc6821d882e8b1b91!2sAxis%20Bank!5e0!3m2!1sen!2sin!4v1698300432713!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

</body>
</html>