<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registration Form</title>

</head>

<body>


<?php include 'header.php'?>

    <section class="form" style="background-color: #2779e2;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">
                    <h1 class="text-white mb-4">Registration Form</h1>
                    <form method="post" enctype="multipart/form-data">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body">
                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Full name</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" placeholder="Full Name" name="fullname" required>
                                    </div>
                                </div>
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Email address</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="email" class="form-control form-control-lg" placeholder="example@example.com" name="Email" required>
                                    </div>
                                </div>
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Mobile Number</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" placeholder="WhatsApp Number" name="phone" required>
                                    </div>
                                </div>
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">PAN Id</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" placeholder="ABC123XXXX" name="pan" required>

                                    </div>
                                </div>
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Gender</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" id="femaleGender" value="female" name="gender" required>
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" id="maleGender" value="male" name="gender" required>
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0">
                                            <input class="form-check-input" type="radio" id="otherGender" value="other" name="gender" required>
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>
                                    </div>
                                    <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Company/Firm Name</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" placeholder="" name="firm_name" required>
                                    </div>
                                </div>
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" placeholder="" name="address" required>
                                    </div>
                                </div>
                                </div>
                                <hr class="mx-n3">
                                   <h6 class="mb-0">Car Details:</h6>
                                   <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" placeholder="" name="address" required>
                                    </div>
                                </div>
                                    
                                <hr class="mx-n3">
                                
                                

                                <hr class="mx-n3">
                              


                                <!-- <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">College Name</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" placeholder="University Name" name="college_name" required>
                                    </div>
                                </div>
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Branch</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" placeholder="Eg: CSE" name="branch" required>
                                    </div>
                                </div>
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">College Roll No.:</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" placeholder="eg: 20/XXX" name="college_roll" required>
                                    </div>
                                </div>
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Current Year</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="current_year" id="firstyear" value="first">
                                            <label class="form-check-label" for="firstyear">1st Year</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="current_year" id="secondyear" value="second" required>
                                            <label class="form-check-label" for="secondyear">2nd Year</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0">
                                            <input class="form-check-input" type="radio" name="current_year" id="thirdyear" value="third" required>
                                            <label class="form-check-label" for="thirdyear">3rd Year</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0">
                                            <input class="form-check-input" type="radio" name="current_year" id="fourthyear" value="fourth" required>
                                            <label class="form-check-label" for="fourthyear">4rd Year</label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Current Sem</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" placeholder="eg: 2 sem" name="current_sem" required>
                                    </div>
                                </div>
                                <hr class="mx-n3">
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Intern In</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" id="intern" value="webDevelopment" name="intern_in" required>
                                            <label class="form-check-label" for="intern">Web Development</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- <hr class="mx-n3">
                                <div class="row align-items-center py-3">
                                    <div class="col-md-5 ps-5">
                                        <h6 class="mb-0"><strong>Pay here Resistration Fee:</strong></h6>
                                        <img src="assets/img/qr.jpg" alt="loading">
                                    </div>
                                    <div class="col-md-6 ps-5">
                                        <label for="paymentReceipt" class="form-label">Upload Payment receipt</label>
                                        <input class="form-control form-control-lg" id="paymentReceipt" type="file" name="payment" required><br>
                                        
                                        <h6 class="mb-0">img name : rahul20/461cse</h6>
                                    </div>
                                </div> -->
                                <hr class="mx-n3">
                                <div class="row align-items-center py-3">
                                    <div class="col-md-12 ps-5">
                                        <h6 class="mb-0"><strong>Instruction :</strong></h6>
                                        <ul>
                                            <li><strong>Resistration Fee for internship 200/- only.</strong></li>
                                            <li><strong>offer letter and offline stamp certificate will be provided.</strong></li>
                                            <li>In case any student do not completed there respected assign project / task, then the student have to pay Rs 1,000 /- for for certificate .</li>
                                            <li><strong> All guidence are provided by our mentors for completing your projects.</strong></li>
                                        </ul>
                                    </div>

                                </div> 

                                <hr class="mx-n3">
                                <div class="col-md-9 pe-5">
                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                            <label class="form-check-label" for="invalidCheck2">
                                    Agree to terms and conditions
                                </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-5 py-4">
                                    <button type="submit" class="btn btn-primary btn-lg" name="students" value="submit">Send application</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php.'?>

</body>

</html>