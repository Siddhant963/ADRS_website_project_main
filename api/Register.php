
                        
                        
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADRS Techno</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-light">
<?php include './Nav.php'; ?>

    <div class="container my-5">
    <form action="../Controller/Registerinfo.php" class="form form-horizontal" method="POST">
    <legend>
                            <center>
                                <h2><b>Registration Form</b></h2>
                            </center>
                        </legend>
            <!-- First Name -->
            <div class="row mb-3">
                <label class="col-md-4 col-form-label">First Name <span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input name="first_name" type="text" placeholder="First Name" class="form-control" required>
                    </div>
                </div>
            </div>

            <!-- Last Name -->
            <div class="row mb-3">
                <label class="col-md-4 col-form-label">Last Name <span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input name="Last_name" type="text" placeholder="Last Name" class="form-control" required>
                    </div>
                </div>
            </div>

            <!-- Gender -->
            <div class="row mb-3">
                <label class="col-md-4 col-form-label">Gender <span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="Male" required>
                        <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="Female" required>
                        <label class="form-check-label">Female</label>
                    </div>
                </div>
            </div>

            <!-- Date of Birth -->
            <div class="row mb-3">
                <label class="col-md-4 col-form-label">Date Of Birth <span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-calendar"></i>
                        </span>
                        <input name="dob" type="date" class="form-control" placeholder="Date of Birth" required>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="row mb-3">
                <label class="col-md-4 col-form-label">E-Mail <span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input name="email" type="email" placeholder="E-Mail Address" class="form-control" required>
                    </div>
                </div>
            </div>

            <!-- Parents Number -->
            <div class="row mb-3">
                <label class="col-md-4 col-form-label">Parents No.<span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                        <input name="parents_contact" type="number" placeholder="(+91)" class="form-control" required>
                    </div>
                </div>
            </div>

            <!-- Student Number -->
            <div class="row mb-3">
                <label class="col-md-4 col-form-label">Student Number <span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                        <input name="studentNumber" type="number" placeholder="(+91)" class="form-control" required>
                    </div>
                </div>
            </div>

            <!-- Permanent Address -->
            <div class="row mb-3">
                <label class="col-md-4 col-form-label">Permanent Address <span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <textarea class="form-control" name="address" placeholder="Enter Address" rows="3" required></textarea>
                </div>
            </div>

            <!-- College/School/Company -->
            <div class="row mb-3">
                <label class="col-md-4 col-form-label">College / School / Company <span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <input type="text" placeholder="Enter College" class="form-control" name="college_name" required>
                </div>
            </div>

            <!-- Qualification -->
            <div class="row mb-3">
                <label class="col-md-4 col-form-label">Qualification <span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <input type="text" placeholder="Enter Qualification" class="form-control" name="qualification" required>
                </div>
            </div>

            <!-- Course -->
            <div class="row mb-3">
                <label class="col-md-4 col-form-label">Course <span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <select name="course" class="form-control" required>
                        <option selected>Choose Your course</option>
                        <optgroup label="Development">
                            <option value="web development">Web Development</option>
                            <option value="App development">App Development</option>
                            <option value="software development">Software Development</option>
                        </optgroup>
                        <optgroup label="Internship">
                            <option value="web development internship">Web Development</option>
                            <option value="App development internship">App Development</option>
                            <option value="mech internship">Mech.CAD / CAE</option>
                            <option value="civil internship">Civil CAD / CAE</option>
                        </optgroup>
                        <optgroup label="Programming Languages">
                            <option value="core java">Core Java</option>
                            <option value="java development">Java Development</option>
                            <option value="core php">Core PHP</option>
                            <option value="Laravel">Laravel Framework</option>
                            <option value="CodeIgniter">CodeIgniter Framework</option>
                            <option value="python">Python</option>
                            <option value="python with django">Python with Django</option>
                            <option value="python with machine learning">Python with Machine Learning</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <!-- Terms and Conditions -->
            <div class="row mb-3">
                <label class="col-md-4 col-form-label">Terms and Conditions <span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" required name="terms">
                        <label class="form-check-label">I agree to the terms and conditions</label>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <?php include './Footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script> function showCalendar() {
        const input = document.getElementById('datepicker');
        const calendar = document.createElement('input');
        calendar.type = 'date';
        calendar.classList.add('calendar');  // Apply calendar class for positioning
        
        // Listen for when the user selects a date
        calendar.onchange = function () {
            const selectedDate = new Date(calendar.value);
            const formattedDate = formatDate(selectedDate);
            input.value = formattedDate; // Display selected date in DD-MM-YYYY format
            document.body.removeChild(calendar); // Remove calendar after selection
        };

        // Insert the calendar into the document
        input.parentElement.appendChild(calendar);  // Attach calendar under input box
        calendar.focus();
    }
    </script>
</body>


</html>

                        <!-- <br> -->
                        <!-- <p class="bold"><b>All <span class="danger">*</span>fields are required</b></p> -->
                         <!-- <div class="col-md-6 col-12">
                             
                                                     <label class="label-tag">First Name <span class="danger">*</span></label>
                                                     <i class="fa-solid fa-user"></i>   
                                                     <input name="first_name" type="text" placeholder="First Name" class="form-control " required>

                         </div>
                         <div class="col-md-6 col-12">
                             
                                                    <label class="col-md-4 label-tag">Last Name <span class="danger">*</span></label>
                                                    <i class="fa-solid fa-user"></i>   
                                                    <input name="Last_name" type="text" placeholder="Last Name" class="form-control" required>

                         </div>
                         <div class="col-md-6 col-12" >
                             
                                                    <label class="col-md-4 label-tag">Gender <span class="danger">*</span></label>
                         <i class="fa-solid fa-user"></i>   
                         <label class="radio-inline">
                                        <input type="radio" name="gender" value="Male" required> Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="female" required> Female
                                    </label>
                         </div>
                         <div class="col-md-4 col-6">
                             
                                                     <label class="label-tag">First Name <span class="danger">*</span></label>
                                                     <i class="fa-solid fa-user"></i>   
                                                     <input name="first_name" type="text" placeholder="First Name" class="form-control " required>

                         </div>
                         
                          -->


                        <!-- First Name -->
                        <!-- <div class="form-input ">
                            <label class="col-md-4 label-tag">First Name <span class="danger">*</span></label>
                            <div class="col-md-4 inputContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa-solid fa-user"></i>                                    </span>
                                    <input name="first_name" type="text" placeholder="First Name" class="form-control" required>
                                </div>
                            </div>
                        </div> -->
                    
                        <!-- Last Name -->
                        <!-- <div class="form-input">
                            <label class="col-md-4 label-tag">Last Name <span class="danger">*</span></label>
                            <div class="col-md-4 inputContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa-solid fa-user"></i>                                    </span>
                                    <input name="Last_name" type="text" placeholder="Last Name" class="form-control" required>
                                </div>
                            </div>
                        </div> -->

                        <!-- Gender -->
                        <!-- <div class="form-input">
                            <label class="col-md-4 label-tag">Gender <span class="danger">*</span></label>
                            <div class="col-md-4 inputContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-m"></i>
                                    </span>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="Male" required> Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="female" required> Female
                                    </label>
                                </div>
                            </div>
                        </div> -->
                        
                        <!-- Date of Birth -->
                        <!-- <div class="form-input">
                            <label class="col-md-4 label-tag">Date Of Birth <span class="danger">*</span></label>
                            <div class="col-md-4 inputContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                    </span>
                                    <input name="dob" type="date" class="form-control" placeholder="Date of Birth" required>
                                </div>
                            </div>
                        </div> -->

                        <!-- Email -->
                        <!-- <div class="form-input">
                            <label class="col-md-4 label-tag">E-Mail <span class="danger">*</span></label>
                            <div class="col-md-4 inputContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </span>
                                    <input name="email" type="email" placeholder="E-Mail Address" class="form-control" required>
                                </div>
                            </div>
                        </div> -->

                        <!-- Parents No -->
                        <!-- <div class="form-input">
                            <label class="col-md-4 label-tag">Parents No.<span class="danger">*</span></label>
                            <div class="col-md-4 inputContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa-solid fa-phone"></i>                                    </span>
                                    <input name="parents_contact" type="number" placeholder="(+91)" class="form-control" required>
                                </div>
                            </div>
                        </div> -->

                        <!-- Student Number -->
                        <!-- <div class="form-input">
                            <label class="col-md-4 label-tag">Student Number <span class="danger">*</span></label>
                            <div class="col-md-4 inputContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa-solid fa-phone"></i>                                    </span>
                                    <input name="studentNumber" type="number" placeholder="(+91)" class="form-control" required>
                                </div>
                            </div>
                        </div> -->

                        <!-- Permanent Address -->
                        <!-- <div class="form-input">
                            <label class="col-md-4 label-tag">Permanent Address <span class="danger">*</span></label>
                            <div class="col-md-4 inputContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <textarea class="form-control" name="address" placeholder="Enter Address" rows="6" cols="30" required></textarea>
                                </div>
                            </div>
                        </div> -->

                        <!-- College/School/Company -->
                        <!-- <div class="form-input">
                            <label class="col-md-4 label-tag">College / School / Company <span class="danger">*</span></label>
                            <div class="col-md-4 inputContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-home"></i>
                                    </span>
                                    <input type="text" placeholder="Enter College" class="form-control" name="college_name" required>
                                </div>
                            </div>
                        </div> -->

                        <!-- Qualification -->
                        <!-- <div class="form-input">
                            <label class="col-md-4 label-tag">Qualification <span class="danger">*</span></label>
                            <div class="col-md-4 inputContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-education"></i>
                                    </span>
                                    <input type="text" placeholder="Enter Qualification" class="form-control" name="qualification" required>
                                </div>
                            </div>
                        </div> -->

                        <!-- Course -->
                        <!-- <div class="form-input">
                            <label class="col-md-4 label-tag">Course <span class="danger">*</span></label>
                            <div class="col-md-4 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-list"></i>
                                    </span>
                                    <select name="course" class="form-control selectpicker" required>
                                        <option selected> Choose Your course </option>
                                        <optgroup label="Development">
                                            <option value="web development">Web Development</option>
                                            <option value="App development">App Development</option>
                                            <option value="software development">Software Development</option>
                                        </optgroup>
                                        <optgroup label="Internship">
                                            <option value="web development internship">Web Development</option>
                                            <option value="App development internship">App Development</option>
                                            <option value="mech internship">Mech.CAD / CAE</option>
                                            <option value="civil internship">Civil CAD / CAE</option>
                                        </optgroup>
                                        <optgroup label="Programming Languages">
                                            <option value="core java">Core Java</option>
                                            <option value="java development">Java Development</option>
                                            <option value="core php">Core PHP</option>
                                            <option value="Laravel">Laravel Framework</option>
                                            <option value="CodeIgniter">CodeIgniter Framework</option>
                                            <option value="python">Python</option>
                                            <option value="python with django">Python with Django</option>
                                            <option value="python with machine learning">Python with Machine Learning</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div> -->

                        <!-- Terms and Conditions -->
                        <!-- <div class="form-input">
                            <label class="col-md-4 label-tag">Terms and Conditions <span class="danger">*</span></label>
                            <div class="col-md-8">
                                <input type="checkbox" required name="terms"> I agree to the terms and conditions
                            </div>
                        </div> -->

                        <!-- <div class="form-input">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div> -->
                <!-- </form>
            </div>
            </div>
        </div>
    </div>
    
</body>
</html> -->