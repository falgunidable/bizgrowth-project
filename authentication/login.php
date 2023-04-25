<?php
include(ROOT_FOLDER.'authentication/googlelogin.php');
$jsFileContents = file_get_contents(ROOT_FOLDER.'js/loginvalidation.js');
?>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo BASEURL ?>styles/login.css"/>

<div id="spinner-overlay"></div>
<div class="d-flex justify-content-center">
  <div id="spinner" class="spinner-border text-dark" style="width: 5rem; height: 5rem;" role="status">
  </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body">
            <div id="custom-notification" class="p-2 fw-bold fst-italic"></div>
                <div class="login-page" style="display:flex;align-items: center;">
                    <div id="signIn" class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-6 p-5 border-end">
                                <div id="right-div" class="form-right h-100 text-center"> 
                                    <img src="<?php echo BASEURL ?>images/logo.png"/><br/><br/>
                                    <h6><b>Don't have an account?</b></h6>
                                    <div class="d-flex justify-content-center">
                                        <button class="goLogin col-md-10 p-2" onclick="showSignUp()"><b>SignUp</b></button>
                                    </div><br/>
                                    <div class="line-container">
                                        <hr style="width:95%;text-align:center">
                                        <span class="line-text"><b>or</b></span>
                                    </div>
                                    <div class="p-3">
                                        <?php echo $login_button; ?>
                                        <button
                                            type="button"
                                            class="consultant p-3 border-0 col-12"
                                            data-bs-target="#consultantForm"
                                            data-bs-toggle="modal"
                                            data-bs-dismiss="modal">
                                            Consultant Registration
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-5 border-start">
                                <div class="form-left h-100">
                                    <h4><b>Login To Avail Services</b></h4>
                                    <small class="text-muted">*All fields are mandatory</small><br/><br/>
                                    <form id="loginForm" class="row g-4">
                                        <input name="submitLogin" type="hidden"/>
                                        <div class="col-12">
                                            <i class="bi bi-person-fill" style="font-size: 1.4em;color:#7058B9"></i><label><b> Username</b>
                                            </label>
                                            <div class="input-group">
                                                <input id="lusername" type="text" name="lusername" class="p-2 form-control border-dark border-2 rounded" placeholder="Enter Username">
                                                <div class="col-12 error-message"></div>
                                            </div>                                           
                                        </div>
                                        <div class="col-12">
                                            <i class="bi bi-lock-fill" style="font-size: 1.4em;color:#7058B9"></i><label><b> Password</b>
                                            </label>
                                            <div class="input-group">
                                                <input id="lpassword" type="text" name="lpassword" class="p-2 form-control border-dark border-2 rounded" placeholder="Enter Password">
                                                <div class="col-12 error-message"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <a href="<?php echo BASEURL ?>db/forgetpassword" style="color:#7058B9" class="float-end"><b>Forgot Password?</b></a>
                                        </div>
                                        <div class="col-12" style="margin-top:0px">
                                            <button id="submitLogin" type="submit" class="socialbtn p-3 px-4 float-end mt-4 text-white">SignIn</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="signUp" class="bg-white shadow rounded" style="display:none">
                        <div class="row">
                            <div class="col-md-6 p-5">
                                <div id="right-div" class="form-right h-100 text-center">
                                    <img src="<?php echo BASEURL ?>images/logo.png"/><br/><br/> 
                                    <h6><b>Already Registered ?</b></h6> 
                                    <div class="d-flex justify-content-center">
                                        <button class="goLogin col-md-10 p-2" onclick="showSignIn()"><b>SignIn</b></button>
                                    </div><br/>
                                    <div class="line-container">
                                        <hr style="width:95%;text-align:center">
                                        <span class="line-text"><b>or</b></span>
                                    </div>
                                    <div class="p-3">
                                        <?php echo $login_button; ?>
                                        <button
                                            type="button"
                                            class="consultant p-3 border-0 col-12"
                                            data-bs-target="#consultantForm"
                                            data-bs-toggle="modal"
                                            data-bs-dismiss="modal">
                                            Consultant Registration
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-5">
                                <div class="form-left h-100">
                                    <h4><b>SignUp Now</b></h4>
                                    <small class="text-muted">*All fields are mandatory</small><br/><br/>
                                    <form id="signUpForm" class="row g-4">
                                        <input name="signupSubmit" type="hidden"/>
                                        <div class="col-12">
                                            <i class="bi bi-person-fill" style="font-size: 1.4em;color:#7058B9"></i><label><b>Username</b></label>
                                            <div class="input-group">
                                                <input id="susername" name="susername" type="text" class="form-control border-dark border-2 rounded" placeholder="Enter Username">
                                                <div class="col-12 error-message"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <i class="bi bi-person-fill" style="font-size: 1.4em;color:#7058B9"></i><label><b>Email</b></label>
                                            <div class="input-group">
                                                <input id="semail" name="semail" type="text" class="form-control border-dark border-2 rounded" placeholder="Enter Email">
                                                <div class="col-12 error-message"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <i class="bi bi-lock-fill" style="font-size: 1.4em;color:#7058B9"></i><label><b>Password</b></label>
                                            <div class="input-group">
                                                <input id="spassword" name="spassword" type="text" class="form-control border-dark border-2 rounded" placeholder="Enter Password">
                                                <div class="col-12 error-message"></div>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin-top:0px">
                                            <button id="submitSignup" name="signupSubmit" type="submit" class="socialbtn p-3 px-4 float-end mt-4 text-white">SignUp</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="consultantForm" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #fe7f10;color:white">
        <h5 class="modal-title"><b>Consultant Registration</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id="customnotification" class="p-2 fw-bold fst-italic"></div>
            <form id="consultForm" method="post" action="<?php echo BASEURL ?>consultant/consultantForm.php" enctype="multipart/form-data">
                <div class="row g-3 p-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="cfirstname" name="cfirstname" placeholder="Full Name" />
                        <div class="error-message"></div>
                    </div>
                    <div class="col-md-4">
                        <input type="email" class="form-control" id="cemail" name="cemail" placeholder="Email">
                        <div class="error-message"></div>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="cptitle" name="cptitle" placeholder="Professional Title (Eg. Web Developer)"/>
                        <div class="error-message"></div>
                    </div>
                </div>
                <div class="row g-3 p-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="cexperience" name="cexperience" placeholder="Work Experience (in months)"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2);"
                        pattern="[0-9]{1,2}"/>
                        <div class="error-message"></div>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="cage" name="cage" placeholder="Age"
                        maxlength="2"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 2);"
                        pattern="[0-9]{1,2}"/>
                        <div class="error-message"></div>
                    </div>
                    <div class="col-md-5">
                        Gender <span style="color:red">*</span> -  
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cgender" id="cgender" value="male">
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cgender" id="cgender" value="female">
                            <label class="form-check-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cgender" id="cgender" value="other">
                            <label class="form-check-label">Other</label>
                        </div>
                    </div>
                </div>
                <div class="row g-3 p-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="cqualification" name="cqualification" placeholder="Highest Qualification"/>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control" id="csector" name="csector">
                            <option selected disabled>Sector of Consultancy</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Sales">Sales</option>
                            <option value="HR">Human Resources</option>
                            <option value="Operations">Operations</option>
                            <option value="Finance">Finance</option>
                            <option value="Technology">Technology</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label for="resume" class="col-sm-3 col-form-label">Resume</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" accept="application/pdf" id="resume" name="resume"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 p-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="csalary" name="csalary" placeholder="Current Salary"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6);"
                        pattern="[0-9]{1,6}"/>
                        <div class="error-message"></div>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="esalary" name="esalary" placeholder="Expected Salary"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6);"
                        pattern="[0-9]{1,6}"/>
                        <div class="error-message"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label for="photo" class="col-sm-3 col-form-label">Photo</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="image_file" accept="image/*" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 p-2">
                    <div class="col-md-6">
                        <textarea type="text" class="form-control" rows="1" placeholder="Skills" name="skills" id="skills"></textarea>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="certificates" class="col-sm-5 col-form-label">Certificates <span class="text-muted">(Optional)</span></label>
                            <div class="col-sm-7">
                                <input type="file" class="form-control form-control-sm" id="certificates" name="certificates"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 p-2">
                    <div class="col-md-3">
                        <select
                            id="cState"
                            name="cstate"
                            class="form-control"
                            onchange="print_city('cCity',this.selectedIndex);"></select>
                    </div>
                    <div class="col-md-3">
                        <select id="cCity" name="ccity" class="form-control"></select>  
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" placeholder="Pincode"
                            id="cpincode"
                            name="cpincode"
                            maxlength="6"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                            pattern="[0-9]{6}"/>
                            <div class="error-message"></div>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="caddress" name="caddress" placeholder="Address (1 line)"/>
                        <div class="error-message"></div>
                    </div>
                </div>
                <div class="row g-3 p-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Linkedin Link"/>
                        <div class="error-message"></div>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter Link"/>
                        <div class="error-message"></div>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="cphone" name="cphone" placeholder="Contact No."
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                        maxlength="10"
                        pattern="[0-9]{10}"/>
                        <div class="error-message"></div>
                    </div>
                </div>
                <div class="row g-3 p-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="cusername" name="cusername" placeholder="Username"/>
                        <div class="error-message"></div>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="cpassword" name="cpassword" placeholder="Password"/>
                        <div class="error-message"></div>
                    </div>
                    <div class="col">
                        <div class="input-group date" id="datepicker">
                            <span class="input-group-append">
                                <span class="input-group-text bg-light d-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" fill="currentColor" class="bi bi-calendar-week-fill" viewBox="0 0 16 16">
                                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zM2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                                    </svg>
                                </span>
                            </span>
                            <input type="text" class="form-control" placeholder="Book an Appointment" id="date" name="date"
                            onfocus="(this.type='date')"
                            onblur="(this.type='text')"/>
                        </div>     
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn consult" data-bs-target="#loginModal" data-bs-toggle="modal" data-bs-dismiss="modal"
                    style="background-color:transparent;border-radius:10px;color:#fe7f10"><b>Back to Login</b></button>
                    <button type="submit" id="consultSubmit" class="btn consult" name="consultSubmit"
                    style="background-color:transparent;border-radius:10px;color:#fe7f10"><b>Register</b></button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>

<script><?php echo $jsFileContents; ?></script>
<script src="<?php echo BASEURL ?>js/cities.js"></script>
<script>
    print_state('cState');

   function showSignUp(){
    document.getElementById('signIn').style.display = 'none';
    document.getElementById('signUp').style.display = 'block';
   }
   function showSignIn(){
    document.getElementById('signUp').style.display = 'none';
    document.getElementById('signIn').style.display = 'block';
   }

    $(document).ready(function(){
        $('#loginModal').on('hidden.bs.modal', function () {
        // Reset the form
            $('#loginForm')[0].reset();
            $('#signUpForm')[0].reset();
            $(this).find('input').removeClass('is-invalid');
            $(this).find('input').removeClass('is-valid');
            $('.error-message').hide();
        });
    });

    $('#submitLogin').on('click', function(event) {
        event.preventDefault();

        $.ajax({
            url: '<?php echo BASEURL ?>db/db_insert.php',
            method: 'POST',
            data: $('#loginForm').serialize(),
            beforeSend: function() {
                // Show spinner
                $('#spinner-overlay').show();
                $('#spinner').show();
            },
            success: function(response) {
                // Hide spinner
                $('#spinner-overlay').hide();
                $('#spinner').hide();
                
                var isFormValid = true;

                if (lusernameInput.classList.contains('is-invalid') || lpasswordInput.classList.contains('is-invalid')) {
                    isFormValid = false;
                }
                
                if(response === 'wrong'){
                        $('#custom-notification').removeClass('success').addClass('error').text('Invalid Credentials !').show();
                        setTimeout(function() {
                            $('#custom-notification').hide();
                        }, 4000);
                }
                else if(response === 'success' && isFormValid){
                        window.location.href="<?php echo BASEURL ?>userdash";
                }else if(response === 'admin' && isFormValid){
                        window.location.href="<?php echo BASEURL ?>admin/";
                }
                else{
                    $('#custom-notification').removeClass('success').addClass('error').text('Please Fill all the fields.').show();
                    setTimeout(function() {
                        $('#custom-notification').hide();
                    }, 4000);
                }
            }
        });
    });

    $('#submitSignup').on('click', function(event) {
        event.preventDefault();

        if ($('#susername').val() === '' || $('#semail').val() === '' || $('#spassword').val() === '') {

            $('#custom-notification').removeClass('success').addClass('error').text('Please fill in all fields.').show();
            
            setTimeout(function() {
                $('#custom-notification').hide();
            }, 4000);
            
            return false; // prevent form submission
        }

        $.ajax({
            url: '<?php echo BASEURL ?>db/db_insert.php',
            method: 'POST',
            data: $('#signUpForm').serialize(),
            beforeSend: function() {
                // Show spinner
                $('#spinner-overlay').show();
                $('#spinner').show();
            },
            success: function(response) {
                // Hide spinner
                $('#spinner-overlay').hide();
                $('#spinner').hide();
                
                var isFormValids = true;

                if (susernameInput.classList.contains('is-invalid') || semailInput.classList.contains('is-invalid') || spasswordInput.classList.contains('is-invalid')) {
                    $('#custom-notification').removeClass('success').addClass('error').text('Please fill in all the fields.').show();
                    setTimeout(function() {
                        $('#custom-notification').hide();
                    }, 3000);
                    isFormValids = false;
                }else if(response === 'usernameexist'){
                        $('#custom-notification').removeClass('success').addClass('error').text('Username Already Exist !').show();
                        setTimeout(function() {
                            $('#custom-notification').hide();
                        }, 3000);
                }else if(response === 'emailexist'){
                        $('#custom-notification').removeClass('success').addClass('error').text('Email Already Exist !').show();
                        setTimeout(function() {
                            $('#custom-notification').hide();
                        }, 3000);
                }else if(response === 'success' && isFormValids){
                        window.location.href="<?php echo BASEURL ?>";
                    // Hide the first modal
                }else if(response === 'notsend'){
                        $('#custom-notification').removeClass('success').addClass('error').text('Email Not Sent !').show();
                        setTimeout(function() {
                            $('#custom-notification').hide();
                        }, 3000);
                }else{
                    $('#custom-notification').removeClass('success').addClass('error').text('Please fill in all the fields.').show();
                    setTimeout(function() {
                        $('#custom-notification').hide();
                    }, 3000);
                }
            }
        });
    });

    $('#consultForm').submit(function(event) {
        // Prevent the form from submitting
            event.preventDefault();

            // Validate each input field
            var firstName = $('#cfirstname').val();
            var email = $('#cemail').val();
            var title = $('#cptitle').val();
            var experience = $('#cexperience').val();
            var age = $('#cage').val();
            var gender = $('input[name=cgender]:checked', '#consultForm').val();
            var qualification = $('#cqualification').val();
            var sector = $('#csector').val();
            var salary = $('#csalary').val();

            // Check if any field is empty
            if (firstName == '' || email == '' || title == '' || experience == '' || age == '' || gender == undefined || qualification == '' || sector == null || resume == '' || salary == '') {
            // Show an error message
            $('#customnotification').removeClass('success').addClass('error').text('Username Already Exist !').show();
                setTimeout(function() {
                    $('#customnotification').hide();
                }, 3000);
            } else {
                $('#spinner-overlay').show();
                $('#spinner').show();
                // Submit the form if all fields are filled
                $('#consultForm').unbind('submit').submit();
            }
        });

</script>