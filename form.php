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
      <div class="col-xl-12">
        <h1 class="text-white mb-4">Registration Form</h1>
        <form method="post" enctype="multipart/form-data">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body">
                <div class = "row align-items-center pt-4 pb-3">
                    <div class="col-md-6 ps-5">
                      <h6 class="mb-0"><strong>CAR OWNER DETAILS:</strong></h6>
                    </div>
                 <div>
                <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-2 ps-5">
                        <h6 class="mb-0">Full name</h6>
                    </div>
                    <div class="col-md-4 pe-5">
                        <input type="text" class="form-control form-control-lg" placeholder="Full Name" name="fullname" required>
                    </div>
                    <div class="col-md-2 ps-5">
                        <h6 class="mb-0">Mobile No.</h6>
                    </div>
                    <div class="col-md-4 pe-5">
                        <input type="tel" class="form-control form-control-lg" placeholder="12345XXXXX" name="WhatsApp No" required>
                    </div>
                </div>

                <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-2 ps-5">
                        <h6 class="mb-0">Date of Birth</h6>
                    </div>
                    <div class="col-md-4 pe-5">
                        <input type="date" class="form-control form-control-lg" placeholder="DD-MM-YYYY" name="DOB" required>
                    </div>
                    <div class="col-md-2 ps-5">
                        <h6 class="mb-0">Email Id</h6>
                    </div>
                    <div class="col-md-4 pe-5">
                        <input type="email" class="form-control form-control-lg" placeholder="abc@gmail.com" name="email id" required>
                    </div>
                </div>

                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-2 ps-5">
                                        <h6 class="mb-0">Gender</h6>
                                    </div>
                                    <div class="col-md-4 pe-5">
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
                                    <div class="col-md-2 ps-5">
                                      <h6 class= "mb-0" >PAN Id</h6>
                                    </div>
                                    <div class="col-md-4 ps-5">
                                     <input type="text" class="form-control form-control-lg" placeholder="ABC123XXXX" name="pan" required>
                                    </div>
                 </div>

                 <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-2 ps-5">
                        <h6 class="mb-0">Company/Firm Name</h6>
                    </div>
                    <div class="col-md-10 ps-5">
                        <input type="text" class="form-control form-control-lg" placeholder="" name="firm" required>
                    </div>
                 </div>
                 <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-2 ps-5">
                        <h6 class="mb-0">Office Address</h6>
                    </div>
                    <div class="col-md-10 ps-5">
                        <input type="text" class="form-control form-control-lg" placeholder="" name="address" required>
                    </div>
                 </div>
                 <hr class="mx-n3">
                 <div class = "row align-items-center pt-4 pb-3">
                    <div class="col-md-6 ps-5">
                      <h6 class="mb-0"><strong>CAR DETAILS:</strong></h6>
                    </div>
                    <div class="col-md-6 ps-5">
                      <h6 class="mb-0"><strong>REQUIRED DOCUMENTS:</strong></h6>
                    </div>
                 <div>

                 <div class = "row align-items-center pt-4 pb-3">
                    <div class="col-md-2 ps-5">
                    <h6 class="mb-0">Model Name</h6>
                    </div>
                    <div class="col-md-4 ps-5">
                    <input type="text" class="form-control form-control-lg" placeholder="" name="Model" required>

                    </div>
                    <div class="col-md-2 ps-5">
                    <h6 class="mb-0"> Vehicle Registration Certificate (RC)</h6>
                    
                    </div>
                    <div class="col-md-4 ps-5">
                    <input class="form-control form-control-lg" id="RC" type="file" name="rc" required><br>
                                        
                    </div>

                 </div>

                 <div class = "row align-items-center pt-4 pb-3">
                    <div class="col-md-2 ps-5">
                    <h6 class="mb-0">Model No.</h6>
                    </div>
                    <div class="col-md-4 ps-5">
                    <input type="text" class="form-control form-control-lg" placeholder="" name="Modelno" required>

                    </div>
                    <div class="col-md-2 ps-5">
                    <h6 class="mb-0"> Vehicle Insurance</h6>
                    
                    </div>
                    <div class="col-md-4 ps-5">
                    <input class="form-control form-control-lg" id="insurance" type="file" name="insurance" required><br>
                                        
                    </div>

                 </div>

                 <div class = "row align-items-center pt-4 pb-3">
                    <div class="col-md-2 ps-5">
                    <h6 class="mb-0">Model Year</h6>
                    </div>
                    <div class="col-md-4 ps-5">
                    <input type="text" class="form-control form-control-lg" placeholder="" name="year" required>

                    </div>
                    <div class="col-md-2 ps-5">
                    <h6 class="mb-0"> Permit</h6>
                    
                    </div>
                    <div class="col-md-4 ps-5">
                    <input class="form-control form-control-lg" id="permit" type="file" name="permit" required><br>
                                        
                    </div>

                 </div>
                 <div class = "row align-items-center pt-4 pb-3">
                    <div class="col-md-2 ps-5">
                    <h6 class="mb-0">Car Number</h6>
                    </div>
                    <div class="col-md-4 ps-5">
                    <input type="text" class="form-control form-control-lg" placeholder="" name="carno" required>

                    </div>
                    <div class="col-md-2 ps-5">
                    <h6 class="mb-0"> Polution Control Certificate</h6>
                    
                    </div>
                    <div class="col-md-4 ps-5">
                    <input class="form-control form-control-lg" id="pcc" type="file" name="pcc" required><br>
                                        
                    </div>

                 </div>

                    <div class = "row align-items-center pt-4 pb-3">
                    <div class="col-md-2 ps-5">
                    <h6 class="mb-0">Seating Capacity</h6>
                    </div>
                    <div class="col-md-4 ps-5">
                    <input type="text" class="form-control form-control-lg" placeholder="" name="Model" required>

                    </div>
                    <div class="col-md-2 ps-5">
                    <h6 class="mb-0"> Tax Receipt</h6>
                    
                    </div>
                    <div class="col-md-4 ps-5">
                    <input class="form-control form-control-lg" id="tax" type="file" name="tax" required><br>
                                        
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
                                    <button type="submit" class="btn btn-primary btn-lg" name="carowners" value="submit">Submit</button>
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