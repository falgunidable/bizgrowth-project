<?php
include('../db/defineUrl.php');
include(ROOT_FOLDER.'authentication/googlelogin.php');
include(ROOT_FOLDER.'Navbar/nav.php');
?>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<style>   
    a {
        text-decoration: none;
    }
    .login-page {
        width: 100%;
        height: 85vh;
        display: inline-block;
        display: flex;
    }
    .form-right i {
        font-size: 100px;
    }
    .go {
	width: 120px;
	height: 40px;
	cursor: pointer;
	display: flex;
	align-items: center;
	border: 2px solid #76287C;
	border-radius: 5px;
	box-shadow: 1px 1px 3px rgba(0,0,0,0.15);
	background: none;
}

.go .text {
	transform: translateX(5px);
	color: #76287C;
	font-weight: bold;
}

.go .icon {
	position: absolute;
	border:none;
	transform: translateX(75px);
	height: 36px;
	width: 35px;
	display: flex;
	align-items: center;
	justify-content: center;
  background-color: yellow;
}

.go svg {
	width: 15px;
	fill: #76287C;
  font-weight: bold;
}

.go:hover svg {
	fill: white;
}

.go:hover .icon {
  width: 35px;
	border-left: none;
	background-color:purple;
	transform: translateX(75px);
}
 
/* style inputs and link buttons */
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  display: inline-block;
  line-height: 20px;
  text-decoration: none;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
    #right-div{
        border-left:0px;
        border-top:2px solid black;
    }
    #login-social{
        margin-top:0px
    }
}
</style>
<div class="login-page bg-light" style="display:flex;align-items: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div id="signIn" class="bg-white shadow rounded">
                    <div class="row">
                        <div class="col-md-7 pe-0">
                            <div class="form-left h-100 py-5 px-5">
                                <h4 class="mb-3">Login To Avail Services</h4>
                                <h6>Please Login to organize the Business.</h6>
                                <small class="text-muted">*All fields are mandatory</small>
                                <br/><br/>
                                <form action="" class="row g-4">
                                    <div class="col-12">
                                        <label>Username<span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter Username">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Password<span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="bi bi-lock-fill"></i>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter Password">
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
                                        <a type="submit" href="testlogin" class="btn btn-primary px-4 float-end mt-4">Sign In</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 ps-0 ">
                            <div id="right-div" class="form-right h-100 border-start text-center pt-5"> 
                                    <div class="p-3">
                                        <h6 id="login-social" style="margin-top:60px"><b>Social Login</b></h6>
                                        <a href="#" class="fb btn">
                                        <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                                        </a>
                                        <?php echo $login_button; ?>
                                    </div>
                                <h6 style="">Don't have an account?</h6> 
                                <div style="display: flex;
                                    justify-content: center;
                                    align-items: center;">
                                    <button class="go" onclick="showSignUp()">
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
                                <form action="" class="row g-4">
                                    <div class="col-12">
                                        <label>Username<span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter Username">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Email<span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter Email">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label>Password<span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="bi bi-lock-fill"></i>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter Password">
                                        </div>
                                    </div>
                                    <div class="col-12" style="margin-top:0px">
                                        <a type="submit" href="testlogin" class="btn btn-primary px-4 float-end mt-4">SIGNUP</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 ps-0 ">
                            <div id="right-div" class="form-right h-100 border-start text-center pt-5"> 
                                    <div class="p-3">
                                        <h6 id="login-social" style="margin-top:60px"><b>Social Login</b></h6>
                                        <a href="#" class="fb btn">
                                        <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                                        </a>
                                        <?php echo $login_button; ?>
                                    </div>
                                <h6 style="">Already Registered ?</h6> 
                                <div style="display: flex;
                                    justify-content: center;
                                    align-items: center;">
                                    <button class="go" onclick="showSignIn()">
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
<script>
   function showSignUp(){
    document.getElementById('signIn').style.display = 'none';
    document.getElementById('signUp').style.display = 'block';
   }
   function showSignIn(){
    document.getElementById('signUp').style.display = 'none';
    document.getElementById('signIn').style.display = 'block';
   }
</script>