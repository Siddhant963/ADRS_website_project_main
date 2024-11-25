<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Responsive CV Form</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #243642; /* Background color */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #629584; /* Paragraph color */
        }

        .container {
            background-color: #387478; /* Container background matches button */
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 1200px;
            margin-top: 20px;
            margin-bottom: 20px;
            width: 100%;
            border-radius: 10px;
        }

        .image img {
            width: 100%;
            height: auto;
            max-width: 400px;
            margin: 0 auto;
            display: block;
            border-radius: 5px;
        }

        .submit-button {
            background-color: #29575a; /* Button color */
            color: #fff; /* White text for button */
            transition: background-color 0.3s;
            width: 50%;
            margin-left: 25%;
            border: none;
            padding: 10px;
        }

        .submit-button:hover {
            background-color: #517975; /* Darker shade for hover effect */
            cursor: pointer;
            color: #ffffff;
        }

        h1 {
            text-decoration: underline rgba(255, 255, 255, 0.75) 0.75px;
            color: #ffffff; /* Heading color */
        }

        label {
            color: #ffffff; /* Label text color */
        }

        input, .form-control {
            border-radius: 5px;
            border: 1px solid #629584; /* Input border matches paragraph color */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="text-center mb-4">Submit Your CV</h1>
        <div class="row">
            <!-- Image Section -->
            <div class="col-lg-6 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                <div class="image">
                    <img src="Form boy.png" alt="Form illustration">
                </div>
            </div>

            <!-- Form Section -->
            <div class="col-lg-6">
                <form>
                    <!-- First and Last Name -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last Name" required>
                        </div>
                    </div>

                    <!-- Date of Birth and Contact Number -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" id="dob" name="dob" class="form-control" placeholder="D.O.B" required>
                        </div>
                        <div class="col-md-6">
                            <label for="contact" class="form-label">Contact Number</label>
                            <input type="tel" id="contact" name="contact" class="form-control" placeholder="Contact Number" required>
                        </div>
                    </div>

                    <!-- Email Address and Qualification -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
                        </div>
                        <div class="col-md-6">
                            <label for="qualification" class="form-label">Highest Qualification</label>
                            <input type="text" id="qualification" name="qualification" class="form-control" placeholder="Highest Qualification" required>
                        </div>
                    </div>

                    <!-- File Upload -->
                    <div class="mb-3">
                        <label for="pdf" class="form-label">Upload CV</label>
                        <input type="file" id="pdf" name="pdf" accept=".pdf,.doc,.docx" class="form-control" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button class="btn submit-button" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>