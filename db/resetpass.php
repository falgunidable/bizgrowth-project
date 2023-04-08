<?php
include('../db/connect.php');
include('./defineUrl.php');

if(isset($_GET['key']) && isset($_GET['reset']))
{
  $email = $_GET['key'];
  $pass = $_GET['reset'];

  $query = "SELECT * FROM `users` where `email` = '$email'";
  $res = mysqli_query($conn, $query);

  if(mysqli_num_rows($res) == 1)
  {
     ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    *{
        font-family: 'Poppins', sans-serif;
    }
    body{
        /* background-color:#eac5ec */
        background-color:#e3b2e6
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
</style>
<div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center min-vh-100">
        <div class="col-md-6">
                <img src="../images/fgpass.png" width="80%"/>
        </div>
        <div id="respass" class="col-md-5">
            <div class="d-flex justify-content-center">
                <div id="customnotification" class="p-2 fw-bold fst-italic"></div>
            </div><br/><br/>
            <div class="card shadow rounded border-0">
                <div class="card-header bg-secondary text-white">
                    <h5><b>Reset Password</b></h5>
                </div>
                <div class="card-body">
                    <form id="resetpass">
                        <input type="hidden" name="resetmail"/>
                        <input type="hidden" name="email" value="<?php echo $email;?>" />
                        <div class="row mb-3">
                            <label for="password" class="col-sm-6 col-form-label"><b>Enter New Password</b></label>
                            <div class="col-sm-6">
                                <input id="password" type="password" class="form-control" name='password' placeholder="New password"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-6 col-form-label"><b>Re-Enter New Password</b></label>
                            <div class="col-sm-6">
                                <input id="repassword" type="password" class="form-control" name='repassword' placeholder="Re-Enter New password"/>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button id="resetbtn" type="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="succpass" class="col-md-5" style="display:none">
            <div class="card shadow rounded border-0">
                <div class="card-header bg-success text-white">
                    <h5><b>Password has been Reset !</b></h5>
                </div>
                <div class="card-body">
                    <h4>Login In to Avail Services.</h4><br/>
                    <a class="btn btn-outline-primary" href="<?php echo BASEURL ?>">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
}
    }  ?>
    <script>
     
     $('#resetbtn').on('click', function(event) {
         event.preventDefault();
 
         $.ajax({
             url: '<?php echo BASEURL ?>db/services_form',
             method: 'POST',
             data: $('#resetpass').serialize(),
             success: function(response) {
                 if(response === 'empty'){
                    $('#customnotification').removeClass('success warning').addClass('error').text('Enter a Password').show();
                    setTimeout(function() {
                        $('#customnotification').hide();
                    }, 4000);
                 }else if(response === 'notsame'){
                    $('#customnotification').removeClass('success error').addClass('warning').text("Passwords Don't Match").show();
                    setTimeout(function() {
                         $('#customnotification').hide();
                    }, 4000);
                 }else if(response === 'success'){
                    $('#respass').hide();
                    $('#succpass').show();
                 }else{
                    $('#customnotification').removeClass('success warning').addClass('error').text('Not Reset').show();
                    setTimeout(function() {
                        $('#customnotification').hide();
                    }, 4000);
                 }
             }
         });
 
     });
 </script>