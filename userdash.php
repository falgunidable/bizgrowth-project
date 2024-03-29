<?php
include('db/defineUrl.php');
include 'db/connect.php';
include(ROOT_FOLDER.'Navbar/nav.php');

if(isset($_SESSION['username']))
   {
    $email = $_SESSION['email'];
    if (isset($_SESSION['notification'])) {
       $message = $_SESSION['notification'];
       $type = $_SESSION['notification_type'];
       echo '<div class="d-flex justify-content-center"><div class="p-3 fst-italic notification ' . $type . '">' . $message . '</div></div>';
       unset($_SESSION['notification']);
       unset($_SESSION['notification_type']);
    }

    $checkemail = "SELECT auth_method from authentication_method where email = '$email'";
    $checksql = mysqli_query($conn,$checkemail);
    $fetch = mysqli_fetch_assoc($checksql);

    if($fetch['auth_method'] == 'email-auth'){
        $profilequery = "SELECT * from users where `email` = '$email'";
        $result = mysqli_query($conn,$profilequery);
        $row = mysqli_fetch_assoc($result);
        $profileimg = !empty($row['profile_img']) ? $row['profile_img'] : 'profile_icon.png';
        $userPictureURL = 'images/profile/'.$profileimg;
    }else if($fetch['auth_method'] == 'google-auth'){
        $googlequery = "SELECT * from googleusers where `email` = '$email'";
        $resultg = mysqli_query($conn,$googlequery);
        $row= mysqli_fetch_assoc($resultg);
        $userPictureURL = $row['image'];
    }

    $uid = $row['uid'];

    $gst= "SELECT * from gst_service where uid = '$uid'";
    $gstdata = mysqli_query($conn,$gst);

    $dataprofile = "SELECT * from profile_info where uid = '$uid'";
    $resultdata = mysqli_query($conn,$dataprofile);
    $rowdata = mysqli_fetch_assoc($resultdata);

    $udyam = "SELECT * from udyam_service where uid = '$uid'";
    $udyamdata = mysqli_query($conn,$udyam);

    $social = "SELECT * from social_service where uid = '$uid'";
    $socialdata = mysqli_query($conn,$social);
?>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
rel="stylesheet"
crossorigin="anonymous">
<script
   src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
   crossorigin="anonymous"></script>
<script
   src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
   crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="<?php echo BASEURL ?>js/cities.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<style>
    a{
        color:black;
        text-decoration:none;
    }
    .actives{
    background-color:#FE7F10;
    color:white;
    border-radius: 10px 10px 0px 0;
    }
    .actives a{
    color:white;
    }
    .actives h6:hover{
    color:white !important
    }
    .slist h6:hover{
    color:#FE7F10;
    font-weight: bolder;
    }
    .slist{
    cursor: pointer;
    text-align:center
    }
   .upper img{
   border-radius: 50px;
   }
   .active{
    background-color:#6348b5;
    color:white;
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
   .error-message {
    display: none;
    font-size: 12px;
    color: red;
    margin-top: 5px;
    }
    .feedback:hover {
        cursor: pointer;
        background-color: #372863  !important;
        color:white !important;
    }
</style>

<div class="card p-0 border-0">
  <div class="card-body shadow p-0" style="overflow:hidden">
    <div class="row">
        <div class="col-5 col-md-3 col-sm-5 text-center text-white" style="background-color:#7058B9;min-height:90vh;">
            <div class="upper">
                <form method="post" action="./update_image.php" enctype="multipart/form-data" id="picUploadForm" target="uploadTarget">
                    <input type="hidden" name="email" value="<?php echo $row['email'] ?>" />
                    <input type="file" name="picture" id="fileInput" accept="image/*" style="display:none">
                </form>
                <iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                <?php if($fetch['auth_method'] == 'email-auth'){ ?>
                    <img src="<?php echo $userPictureURL ?>" id="profile-img" alt="Profile Image" width="80" height="80"/>
                <?php }else{ ?>
                    <img src="<?php echo $userPictureURL ?>" id="google-img" alt="Profile Image" width="80" height="80"/>
                <?php } ?>
            </div><br/>
            <h4 class="mb-0"><b><?php echo $_SESSION['username'] ?></b></h4>
            <span class="d-block mb-2"><?php echo $_SESSION['email'] ?></span><br/>
            <div class="text-center rounded mt-5">
                <button class="col-md-10 p-2 feedback border-0 text-white" style="background-color:#5A41A0;border-radius:10px;"
                onclick=""><b>Services</b></button><br/><br/>
                <button class="col-md-10 p-2 feedback border-0 text-white" style="background-color:#5A41A0;border-radius:10px;"
                onclick="showClients();"><b>Feedback</b></button>
            </div>
        </div>
        <div class="col-8 col-md-9 col-sm-8 p-4">
            <nav class="navbar navbar-expand-sm text-center rounded" style="border-bottom:2px solid #7058B9">
                <ul class="navbar-nav" id="navitem" style="cursor:pointer">
                    <li id="profileSettings" class="col-md-4 nav-item rounded p-2 active">Profile Settings</li>
                    <li id="servicesAvailed" class="col-md-4 nav-item rounded p-2">Services Avalied</li>
                    <li id="documents" class="col-md-4 nav-item p-2 rounded">Documents Uploaded</li>
                    <li id="appointments" class="col-md-4 nav-item p-2 rounded">Appointments</li>
                </ul>
            </nav>
            <div class="row p-4">
                <div class="col-12 col-md-12 col-sm-10 p-3 shadow bg-white" id="profileDiv">
                    <?php if(mysqli_num_rows($resultdata) == 0){ ?>
                        <h6>No Details Registered. Avail any <b>Service</b> from the <a style="text-decoration-none" class="text-dark" href="<?php echo BASEURL ?>"><b>Home page</b></a></h6>
                    <?php }else{ ?>
                    <form class="row g-3" id="profileUpdate">
                        <input type="hidden" name="id" value="<?php echo $uid ?>"/>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" value="<?php echo $_SESSION['email'] ?>" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Contact No.</label>
                            <input type="text" class="form-control" id="phone" name="phone" 
                            value="<?php echo $rowdata['contact'] ?>"
                            maxlength="10"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                            pattern="[0-9]{10}"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" value="<?php echo $rowdata['address'] ?>" required>
                        </div>
                        <div class="col-md-4" id="stateDiv">
                            <label for="inputState" class="form-label">State</label>
                            <select
                            id="formState"
                            name="state"
                            class="form-control shadow-sm"
                            onchange="print_city('formCity',this.selectedIndex);" style="display:none"></select>
                            <input type="text" class="form-control" id="inputState" name="state" value="<?php echo $rowdata['state'] ?>"/>
                        </div>
                        <div class="col-md-4">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity" name="city" value="<?php echo $rowdata['city'] ?>">
                            <select id="formCity" name="city" class="form-control shadow-sm" style="display:none;"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Pincode</label>
                            <input type="text" class="form-control" id="pincode" 
                            name="pincode" value="<?php echo $rowdata['pincode'] ?>"
                            maxlength="6"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                            pattern="[0-9]{6}"/>
                            <div class="error-message"></div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" id="updateBtn">Update</button>
                        </div>
                    </form>
                    <?php } ?>
                </div>
                <div class="col-12 col-md-12 col-sm-10 p-3 shadow bg-white" id="servicesDiv" style="display:none;min-height:60vh">
                    <div class="container">
                        <div class="row text-center" id="servicesnav" style="cursor:pointer">
                            <div class="col-md-2 p-2 active" id="gst">
                                GST
                            </div>
                            <div class="col-md-2 p-2" id="udyam">
                                Udyam
                            </div>
                            <div class="col-md-2 p-2" id="social">
                                Social Media
                            </div>
                            <div class="col-md-2 p-2" id="rent">
                                Rent Agreement
                            </div>
                            <div class="col-md-2 p-2" id="itr">
                                ITR Filing
                            </div>
                            <div class="col-md-2 p-2" id="business">
                                Business Analysis
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-sm-10 p-3 bg-white table-responsive-md">
                        <table class="table table-hover table-bordered" id="gsttable">
                            <thead class="bg-secondary text-white">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Position</th>
                                <th scope="col">Business Name</th>
                                <th scope="col">Sector</th>
                                <th scope="col">Pan No.</th>
                                <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count=1; while($row = mysqli_fetch_assoc($gstdata)){
                                    $status = $tooltip = '';
                                    if($row['status'] == 'Pending'){
                                        $status = 'bg-info';
                                        $tooltip ='Your Application is Pending to be Reviewed';
                                    }else if($row['status'] == 'Under Review'){
                                        $status = 'bg-warning';
                                        $tooltip ='Your Application is Under Review';
                                    } ?>
                                <tr>
                                    <th scope="row"><?php echo $count ?></th>
                                    <td><?php echo $row['position'] ?></td>
                                    <td><?php echo $row['pan_name'] ?></td>
                                    <td><?php echo $row['sector'] ?></td>
                                    <td><?php echo $row['pan_no'] ?></td>
                                    <td><button type="button" class="btn <?php echo $status ?>"  href="#" data-toggle="tooltip" data-placement="bottom" title="<?php echo $tooltip ?>"><?php echo $row['status'] ?></button></td>
                                </tr>
                                <?php $count++; } ?>
                            </tbody>
                        </table>
                        <table class="table table-hover table-bordered" id="udyamtable" style="display:none">
                            <thead class="bg-secondary text-white">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Aadhar No.</th>
                                <th scope="col">Business Name</th>
                                <th scope="col">Pan No.</th>
                                <th scope="col">GST</th>
                                <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $count=1; while($row = mysqli_fetch_assoc($udyamdata)){
                                $status = $tooltip = '';
                                if($row['status'] == 'Pending'){
                                    $status = 'bg-info';
                                    $tooltip ='Your Application is Pending to be Reviewed';
                                }else if($row['status'] == 'Under Review'){
                                    $status = 'bg-warning';
                                    $tooltip ='Your Application is Under Review';
                                }
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $count ?></th>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['aadhar'] ?></td>
                                    <td><?php echo $row['businessname'] ?></td>
                                    <td><?php echo $row['panNo'] ?></td>
                                    <td><?php echo $row['gst'] ?></td>
                                    <td><button type="button" class="btn <?php echo $status ?>" href="#" data-toggle="tooltip" data-placement="bottom" title="<?php echo $tooltip ?>"><?php echo $row['status'] ?></button></td>
                                </tr>
                                <?php $count++; } ?>
                            </tbody>
                        </table>
                        <table class="table table-hover table-bordered" id="socialtable" style="display:none">
                            <thead class="bg-secondary text-white">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Service Plan</th>
                                <th scope="col">Service Charge</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $count=1; while($row = mysqli_fetch_assoc($socialdata)){ 
                                $status = $tooltip = '';
                                if($row['status'] == 'Pending'){
                                    $status = 'bg-info';
                                    $tooltip ='Your Application is Pending to be Reviewed';
                                }else if($row['status'] == 'Under Review'){
                                    $status = 'bg-warning';
                                    $tooltip ='Your Application is Under Review';
                                }
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $count ?></th>
                                    <td><?php echo $row['service_plan'] ?></td>
                                    <td><?php echo $row['service_charge'] ?></td>
                                    <td>Pending</td>
                                    <td><button type="button" class="btn <?php echo $status ?>" href="#" data-toggle="tooltip" data-placement="bottom" title="<?php echo $tooltip ?>"><?php echo $row['status'] ?></button></td>
                                </tr>
                                <?php $count++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<script>
    var btnContainer = document.getElementById("filterservice");
    var btns = btnContainer.getElementsByClassName("slist");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("actives");
        current[0].className = current[0].className.replace(" actives", "");
        this.className += " actives";
        });
    }
</script>
<script src="<?php echo BASEURL ?>js/profile.js"></script>
<script>
    print_state('formState');

    var pincodeInput = document.getElementById('pincode');
    var errorContainer = pincodeInput.nextElementSibling;
    var mobileInput = document.getElementById('phone');
    var contactContainer = mobileInput.nextElementSibling;

    pincodeInput.addEventListener('input', function() {
        let regex = /^\d{6}$/;
        if (pincodeInput.value.trim() === '') {
            errorContainer.textContent = 'Enter pincode';
            errorContainer.style.display = 'block';
            pincodeInput.classList.add('is-invalid');
        }else if(!regex.test(pincodeInput.value)){
            errorContainer.textContent = 'Invalid pincode';
            errorContainer.style.display = 'block';
            pincodeInput.classList.add('is-invalid');
        } else {
            errorContainer.style.display = 'none';
            pincodeInput.classList.remove('is-invalid');
            pincodeInput.classList.add('is-valid');
        }
    });

    mobileInput.addEventListener('input', function() {
        let mobileRegex = /^[6-9]\d{9}$/;
        if (mobileInput.value.trim() === '') {
            contactContainer.textContent = 'Enter Mobile number';
            contactContainer.style.display = 'block';
            mobileInput.classList.add('is-invalid');
        }else if(!mobileRegex.test(mobileInput.value)){
            contactContainer.textContent = 'Invalid Number';
            contactContainer.style.display = 'block';
            mobileInput.classList.add('is-invalid');
        } else {
            contactContainer.style.display = 'none';
            mobileInput.classList.remove('is-invalid');
            mobileInput.classList.add('is-valid');
        }
    });

    $('#updateBtn').on('click',function(event){
    event.preventDefault();

        $.ajax({
            url:'<?php echo BASEURL ?>db/updateProfile',
            method:'POST',
            data:$('#profileUpdate').serialize(),
            success: function(response) {
                if (pincodeInput.classList.contains('is-invalid')) {
                    alert('Please remove the Errors');
                }else if(response == 'empty'){
                    alert('One or More Fields is Empty');
                }else if(response == 'success'){
                    alert('Profile Updated');
                }else{
                    alert('Not Updated')
                }
            }
        })
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

</script>
<?php }else{
	$_SESSION['notification'] = 'Please Login to access the Profile';
	$_SESSION['notification_type'] = 'error';
	// header('Location:'.ROOT_FOLDER);
    ?> 
    <script> window.location.href="<?php echo BASEURL ?>"; </script>
    <?php
} ?>
