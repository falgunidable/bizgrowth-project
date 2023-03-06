<?php
include(ROOT_FOLDER.'authentication/googlelogin.php');
$jsFileContents = file_get_contents(ROOT_FOLDER.'js/loginvalidation.js');
?>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo BASEURL ?>styles/login.css"/>
<div class="modal fade"
id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body">
            <div id="custom-notification" class="p-2 fw-bold fst-italic"></div>
                <div class="login-page" style="display:flex;align-items: center;">
                    <div id="signIn" class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <h4 class="mb-3">Login To Avail Services</h4>
                                    <h6>Please Login to organize the Business.</h6>
                                    <small class="text-muted">*All fields are mandatory</small>
                                    <br/><br/>
                                    <form id="loginForm" class="row g-4">
                                        <div class="col-12">
                                            <label>Username<span class="text-danger">*</span>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="bi bi-person-fill"></i>
                                                </div>
                                                <input id="lusername" type="text" class="form-control" placeholder="Enter Username">
                                                <div class="col-12 error-message"></div>
                                            </div>                                           
                                        </div>
                                        <div class="col-12">
                                            <label>Password<span class="text-danger">*</span>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="bi bi-lock-fill"></i>
                                                </div>
                                                <input id="lpassword" type="text" class="form-control" placeholder="Enter Password">
                                                <div class="col-12 error-message"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                                <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="#" class="float-end text-primary">Forgot Password?</a>
                                        </div>
                                        <div class="col-12" style="margin-top:0px">
                                            <button id="submitLogin" type="submit" class="socialbtn btn-primary px-4 float-end mt-4">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 ps-0 ">
                                <div id="right-div" class="form-right h-100 border-start text-center pt-5"> 
                                        <div class="p-3">
                                            <h6 id="login-social" style="margin-top:60px"><b>Social Login</b></h6>
                                            <a href="#" class="fb socialbtn">
                                            <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                                            </a>
                                            <?php echo $login_button; ?>
                                        </div>
                                    <h6 style="">Don't have an account?</h6> 
                                    <div style="display: flex;
                                        justify-content: center;
                                        align-items: center;">
                                        <button class="goLogin" onclick="showSignUp()">
                                        <span class='text'>SignUp</span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="icon bi bi-arrow-right-short"
                                            viewBox="0 0 16 16">
                                            <path
                                                fill-rule="evenodd"
                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                                        </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="signUp" class="bg-white shadow rounded" style="display:none">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <h4 class="mb-3">SignUp Now</h4>
                                    <h6>Please Register below, to organize your Business.</h6>
                                    <small class="text-muted">*All fields are mandatory</small>
                                    <br/><br/>
                                    <form id="signUpForm" class="row g-4">
                                        <div class="col-12">
                                            <label>Username<span class="text-danger">*</span>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="bi bi-person-fill"></i>
                                                </div>
                                                <input id="susername" name="susername" type="text" class="form-control" placeholder="Enter Username">
                                                <div class="col-12 error-message"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label>Email<span class="text-danger">*</span>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="bi bi-person-fill"></i>
                                                </div>
                                                <input id="semail" name="semail" type="text" class="form-control" placeholder="Enter Email">
                                                <div class="col-12 error-message"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label>Password<span class="text-danger">*</span>
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="bi bi-lock-fill"></i>
                                                </div>
                                                <input id="spassword" name="spassword" type="text" class="form-control" placeholder="Enter Password">
                                                <div class="col-12 error-message"></div>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin-top:0px">
                                            <button id="submitSignup" type="submit" class="socialbtn btn-primary px-4 float-end mt-4">SignUp</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 ps-0 ">
                                <div id="right-div" class="form-right h-100 border-start text-center pt-5"> 
                                        <div class="p-3">
                                            <h6 id="login-social" style="margin-top:60px"><b>Social Login</b></h6>
                                            <a href="#" class="fb socialbtn">
                                            <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                                            </a>
                                            <?php echo $login_button; ?>
                                        </div>
                                    <h6 style="">Already Registered ?</h6> 
                                    <div style="display: flex;
                                        justify-content: center;
                                        align-items: center;">
                                        <button class="goLogin" onclick="showSignIn()">
                                        <span class='text'>SignIn</span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="icon bi bi-arrow-right-short"
                                            viewBox="0 0 16 16">
                                            <path
                                                fill-rule="evenodd"
                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                                        </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script><?php echo $jsFileContents; ?></script>

<script>
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

        if ($('#lusername').val() === '' || $('#lpassword').val() === '') {
        
            $('#custom-notification').removeClass('success').addClass('error').text('Please fill in all fields.').show();
            
            setTimeout(function() {
                $('#custom-notification').hide();
            }, 4000);
            
            return false; // prevent form submission
        }
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
            success: function(response) {
                var isFormValid = true;

                if (susernameInput.classList.contains('is-invalid') || semailInput.classList.contains('is-invalid') || spasswordInput.classList.contains('is-invalid')) {
                    isFormValid = false;
                }
                if(response === 'success' && isFormValid){
                        $('#custom-notification').removeClass('error').addClass('success').text('Registered Successfully !').show();
                        setTimeout(function() {
                            $('#custom-notification').hide();
                        }, 50000);
                        window.location.href="<?php echo BASEURL ?>";
                    // Hide the first modal
                }else{
                    $('#custom-notification').removeClass('success').addClass('error').text('Please fill in all fields.').show();
                    setTimeout(function() {
                        $('#custom-notification').hide();
                    }, 4000);
                }
            }
        });
    });

</script>