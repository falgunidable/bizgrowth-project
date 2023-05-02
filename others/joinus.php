<?php
include('../db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');

if (isset($_SESSION['notification'])) {
	$message = $_SESSION['notification'];
	$type = $_SESSION['notification_type'];
	// display notification using the appropriate CSS class
    echo '<div style="position:relative" class="d-flex justify-content-center"><div style="position:absolute" class="p-3 fst-italic notification ' . $type . '">' . $message . '</div></div>';
	// unset session variables to prevent displaying the notification multiple times
	unset($_SESSION['notification']);
	unset($_SESSION['notification_type']);
}
?>
<style>
    .joinus:hover {
        cursor: pointer;
        background-color: #372863 !important;
        color:white !important;
    }
    .notification {
        border-radius: 5px;
        background-color: #333;
	    color: #fff;
        padding: 10px;
        animation: fadeOut 5s ease-out forwards;
        z-index: 9999;
}

@keyframes fadeOut {
  from { opacity: 1; }
  to { opacity: 0; }
}

.notification.success {
	background-color: #4CAF50;
}

.notification.error {
	background-color: #f44336;
}
#customnotify {
    z-index:88887777777;
    display: none;
    width:400px;
    text-align:center;
    position: fixed;
    top: 15px;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 5px;
    background-color: #fff;
    color: white;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    }

    #customnotify.success{
    background-color: #2bdb31;
    }
    #customnotify.error{
    background-color: #f44336;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="container">
<div id="customnotify" class="p-2 fw-bold fst-italic"></div>
    <div class="row mt-5">
        <div class="col-md-6 text-center my-auto">
            <h4><b>Join Us in making Bizgrowth a bigger community</b></h4>
            <p class="text-muted" style="font-weight:bolder">( Job Profile: A person with good communication skills )</p>
            <img src="../images/joinus.png" width="100%" class="img-fluid"/>
        </div>
        <div class="col-md-6 mt-5">
            <form class="border border-2 border-dark rounded p-4" id="joinusForm">
                <input name="joinus" type="hidden"/>
                <div class="row g-3 mb-3">
                    <div class="col-md-12">
                        <label for="name" class="form-label"><b>Full Name<span class="text-danger"> *</span></b></label>
                        <input type="text" class="form-control border-dark border-2" id="name" name="name" placeholder="Enter Your Name">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label"><b>Email<span class="text-danger"> *</span></b></label>
                        <input type="text" class="form-control border-dark border-2" id="email" name="email" placeholder="Enter your Email">
                    </div>
                    <div class="col-md-6">
                        <label for="contact" class="form-label"><b>Contact No.<span class="text-danger"> *</span></b></label>
                        <input type="text" class="form-control border-dark border-2" id="contact" name="contact" placeholder="Enter your Contact Number">
                    </div>
                    <div class="col-md-6">
                        <label for="age" class="form-label"><b>Age<span class="text-danger"> * </span></b></label>
                        <input type="text" class="col-md-4 form-control border-dark border-2" id="age" name="age" placeholder="Enter your age"/>
                    </div>
                    <div class="col-md-6">
                        <label for="gender" class="form-label"><b>Gender<span class="text-danger"> * </span></b></label><br/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border-dark border-2" type="radio" name="gender" id="gendermale" value="male">
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border-dark border-2" type="radio" name="gender" id="genderfemale" value="female">
                            <label class="form-check-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border-dark border-2" type="radio" name="gender" id="genderother" value="other">
                            <label class="form-check-label">Other</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="exp" class="form-label"><b>Years of Experience<span class="text-danger"> *</span></b></label>
                        <input type="text" class="form-control border-dark border-2" id="exp" name="exp" placeholder="Enter in Years">
                    </div>
                    <div class="col-md-6">
                        <label for="company" class="form-label"><b>Previous Company<small class="text-muted"> (if worked)</small><span class="text-danger"> *</span></b></label>
                        <input type="text" class="form-control border-dark border-2" id="company" name="company" placeholder="Name of Company">
                    </div>
                </div>
                <br/>
                <input type="submit" value="Submit" id="joinusSubmit" name="joinusSubmit" class="joinus p-2 col-md-12"
                style="font-weight:bolder;background-color:white;border:2px solid #5A41A0;border-radius:10px;color:#5A41A0;"/>
            </form>
        </div>
    </div>
</div>
<script>

        $('#joinusSubmit').on('click', function(event) {
        event.preventDefault();

        if($('#name').val() === '' || $('#email').val() === '' || $('#contact').val() === '' || $('#age').val() === '' || 
        $('#exp').val() === '' || $('#company').val() === ''){
            $('#customnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
            setTimeout(function() {
                $('#customnotify').hide();
            }, 3000);
            return false;
        }

        $.ajax({
            url: './db_join',
            method: 'POST',
            data: $('#joinusForm').serialize(),
            success: function(response) {
                if(response === 'success'){
                    $('#customnotify').removeClass('error').addClass('success').text('Added').show();
                    setTimeout(function() {
                        $('#customnotify').hide();
                    }, 3000);
                    $('#joinusForm')[0].reset();
                }else{
                    $('#customnotify').removeClass('success').addClass('error').text('Please fill in all fields.').show();
                    setTimeout(function() {
                        $('#customnotify').hide();
                    }, 3000);
                }
            }
        });
    });
</script>