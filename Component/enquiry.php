<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Enquiry Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            background-color: #243642;
            color: #629584;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .enquiry-div {
            background-color: #387478;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            position: relative;
            left: 20px;
        }
        h2 {
            color: #FFFFFF;
            margin-bottom: 1rem;
        }
        .enquiry-input-div, 
        .enquiry-message-div {
            background-color: #F8F8F8;
            border: none;
            color: #243642;
        }
        .enquiry-input-div::placeholder,
        .enquiry-message-div::placeholder {
            color: #999999;
        }
        .send-message-div {
            background-color: #387478;
            font-size: 1rem;
            border-radius: 5px;
        }
        .send-message-div a {
            color: #FFFFFF;
            text-decoration: none;
        }
        .send-message-div:hover {
            background-color: #2A595E;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="enquiry-div text-center">
                    <h2 class="mb-3">Enquiry Form</h2>
                    <input class="form-control enquiry-input-div mb-3" type="text" placeholder="Your Name" required>
                    <input class="form-control enquiry-input-div mb-3" type="email" placeholder="Your Email" required>
                    <input class="form-control enquiry-input-div mb-3" type="number" placeholder="Your Number" required>
                    <input class="form-control enquiry-input-div mb-3" type="text" placeholder="Your Course" required>
                    <textarea class="form-control enquiry-message-div mb-3" rows="4" placeholder="Your Message" required></textarea>
                    <div class="send-message-div py-2">
                        <a href="#">Send Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>