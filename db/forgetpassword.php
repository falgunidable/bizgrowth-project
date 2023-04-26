<?php include('./defineUrl.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    *{
        font-family: 'Poppins', sans-serif;
    }
    #customnotification {
        display: none;
        width:400px;
        text-align:center;
        position: fixed;
        border-radius: 5px;
        background-color: #fff;
        color: white;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        z-index:9999;
    }
    #customnotification.success{
        background-color: #2bdb31;
    }
    #customnotification.error{
        background-color: #f44336;
    }
    #customnotification.warning{
        background-color: #ffcc00;
    }
    #spinner-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 100;
    display: none;
    }

    #spinner {
    text-align:center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 101;
    display: none;
    }
    #fgpass:hover{
        background-color:#372863
    }
</style>
</head>

<body>
    <div id="spinner-overlay"></div>

    <div id="spinner">
        <i class="fa fa-spinner fa-spin fa-4x fa-fw"></i><br/><br/>
        <span><b>Sending Email</b><span>
    </div>
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-md-6">
                <img src="../images/fgpass.png" width="80%"/>
            </div>
            <div id="fgemail" class="col-md-5">
                <div class="d-flex justify-content-center">
                    <div id="customnotification" class="p-2 fw-bold fst-italic"></div>
                </div><br/><br/>
                <div class="card shadow rounded border-dark border-2" style="border-radius:10px">
                    <div class="card-body p-5">
                        <div class="mb-4">
                            <h5><b>Forgot Password?</b></h5>
                            <p class="mb-2">Enter your registered email ID to proceed.
                            </p>
                        </div>
                        <form id="pwreset">
                            <input type="hidden" name="passreset"/>
                            <div class="mb-3">
                                <label for="email" class="form-label">Registered Email ID</label>
                                <input type="email" id="email" class="form-control border-dark border-2" name="email" placeholder="abc@gmail.com" style=""/>
                            </div><br/>
                            <div class="mb-3 d-grid">
                                <button id="fgpass" type="submit" class="btn text-white" style="background-color:#5A41A0">
                                    Reset Password
                                </button>
                            </div>
                            <span>Don't have an account? <a href="<?php echo BASEURL ?>" style="text-decoration:none;color:#5A41A0"><b>Sign Up</b></a></span>
                        </form>
                    </div>
                </div>
            </div>
            <div id="fgmess" class="col-md-5" style="display:none">
                <div class="card shadow rounded border-0">
                    <div class="card-body">
                        <div class="mb-4">
                            <h5><b>Reset Password</b></h5><br/>
                            <h4 style="color:#33cc33"><b>An Email has been sent to reset your Password !</b></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('#fgpass').on('click', function(event) {
        event.preventDefault();

        $.ajax({
            url: '<?php echo BASEURL ?>db/services_form',
            method: 'POST',
            data: $('#pwreset').serialize(),
            beforeSend: function() {
                // Show spinner
                $('#spinner-overlay').show();
                $('#spinner').show();
            },
            success: function(response) {
                 // Hide spinner
                $('#spinner-overlay').hide();
                $('#spinner').hide();
                if(response === 'error'){
                    $('#customnotification').removeClass('success error').addClass('warning').text('Email Id not Registered').show();
                    setTimeout(function() {
                        $('#customnotification').hide();
                    }, 4000);
                }else if(response === 'notsent'){
                    $('#customnotification').removeClass('success warning').addClass('error').text('Email Not Sent').show();
                    setTimeout(function() {
                        $('#customnotification').hide();
                    }, 4000);
                }else if(response === 'success'){
                    $('#fgemail').hide();
                    $('#fgmess').show();
                }else{
                    $('#customnotification').removeClass('success warning').addClass('error').text('Please Enter the Email Id').show();
                    setTimeout(function() {
                        $('#customnotification').hide();
                    }, 4000);
                }
            },
            error: function() {
                // Hide spinner
                $('#spinner').hide();
                alert('Error occurred while sending email. Please try again later.');
            }
        });

    });
</script>

</html>