<?php
include('db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');
include(ROOT_FOLDER.'db/connect.php');
include(ROOT_FOLDER.'authentication/login.php');
if(isset($_SESSION['cusername']))
   {
    $email = $_SESSION['email'];

    if (isset($_SESSION['notification'])) {
        $message = $_SESSION['notification'];
        $type = $_SESSION['notification_type'];
        // display notification using the appropriate CSS class
        echo '<div style="position:relative" class="d-flex justify-content-center"><div style="position:absolute" class="p-3 fst-italic notification ' . $type . '">' . $message . '</div></div>';
        // unset session variables to prevent displaying the notification multiple times
        unset($_SESSION['notification']);
        unset($_SESSION['notification_type']);
    }

    $sql = "SELECT c.*, p.*, u.email,u.profile_img from consultant as c, users as u, profile_info as p where c.uid = u.uid and p.uid = u.uid and u.username = '$email'";
    $result = mysqli_query($conn,$sql);
    $fetch = mysqli_fetch_assoc($result);
?>
<style>
    a{
        color:black;
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
   .clients:hover {
        cursor: pointer;
        background-color: #372863  !important;
        color:white !important;
    }
    .socialicon:hover{
        color:white
    }
</style>
<div class="p-0" style=";height: 90.5vh;overflow: hidden;">
    <div class="row" style="height: 100%;">
        <div class="col-md-4" style="background-color:#7058B9;height: 100%;overflow: hidden;">
            <div class="d-flex justify-content-center mt-5">
                <img src="<?php echo BASEURL ?>images/profile/<?php echo $fetch['profile_img'] ?>" width="100px" height="110px" style="border-radius:80%"/>
            </div>
            <h4 class="text-white text-center" style="line-height:2"><b><?php echo $fetch['name'] ?></b></h4>
            <div class="text-center text-white" style="line-height:3">
                <h6><i class="bi bi-envelope-fill"></i> <?php echo $fetch['email'] ?></h6>
                <h6 style="color:#372863"><b><?php echo $fetch['ptitle'] ?></b></h6>
                <a class="socialicon" href="https://twitter.com/" target="_blank" style="margin-right:10px"><i class="bi bi-twitter" style="font-size: 1.6em;"></i></a>
                <a class="socialicon" href="https://www.linkedin.com/in/falgunidable/" target="_blank"><i class="bi bi-linkedin" style="font-size: 1.5em;"></i></a>
            </div>
            <div class="text-center rounded mt-5">
                <button class="col-md-6 p-2 clients border-0 text-white" style="background-color:#5A41A0;border-radius:10px;"
                onclick="showClients();"><b>Clients Assigned</b></button>
            </div>
        </div>
        <div class="col-md-8" style="height:100vh;overflow-y: auto;">
            <div class="row p-4" id="consultantinfo">
                <div class="col-md-6 gx-2">
                    <h5 class="p-2 text-white rounded" style="background-color:#7058B9"><b>Highest Qualification</b></h5>
                    <h6 style="color:#372863"><b><?php echo $fetch['highest_qualif'] ?></b></h6>
                </div>
                <div class="col-md-6 gx-2">
                    <h5 class="p-2 text-white rounded" style="background-color:#7058B9"><b>Personal Information</b></h5>
                    <h6><b>Age: <span style="color:#372863"><?php echo $fetch['age'] ?></span></b></h6>
                    
                    <h6><b>Gender: <span style="color:#372863"><?php echo $fetch['gender'] ?></span></b></h6>
                </div>
                <div class="col-md-12 mt-2 gx-2">
                    <h5 class="p-2 text-white rounded" style="background-color:#7058B9"><b>Work</b></h5>
                    <div class="row">
                        <h6 class="col-md-4" style="color:#372863"><b>Work Experience: <?php echo $fetch['work_experience'] ?></b></h6>
                        <h6 class="col-md-4" style="color:#372863"><b>Sector: <?php echo $fetch['sector'] ?></b></h6>
                        <h6 class="col-md-4"style="color:#372863"><b>Skills: <?php echo $fetch['skills'] ?></b></h6>
                        <h6 class="col-md-4" style="color:#372863"><b>Current Salary: <?php echo $fetch['csalary'] ?></b></h6>
                        <h6 class="col-md-4" style="color:#372863"><b>Expected Salary: <?php echo $fetch['esalary'] ?></b></h6>
                        <h6 class="col-md-4" style="color:#372863"><b>Fee Per Hour: <?php echo $fetch['fee'] ?></b></h6>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <h5 class="p-2 text-white rounded" style="background-color:#7058B9"><b>Address Details</b></h5>
                        <h6 class="col-md-3" style="color:#372863"><b>City: <?php echo $fetch['city'] ?></b></h6>
                        <h6 class="col-md-3" style="color:#372863"><b>State: <?php echo $fetch['state'] ?></b></h6>
                        <h6 class="col-md-2" style="color:#372863"><b>Pincode: <?php echo $fetch['pincode'] ?></b></h6>
                        <h6 class="col-md-4" style="color:#372863"><b>Address: <?php echo $fetch['address'] ?></b></h6>
                    </div>
                </div>
                <div class="col-md-12 mt-3 gx-2">
                    <h5 class="p-2 text-white rounded" style="background-color:#7058B9"><b>Resume</b></h5>
                    <embed src="<?php echo BASEURL ?>images/resume/<?php echo $fetch['resume'] ?>" type="application/pdf" width="100%" height="330px" />
                </div>
            </div>
            <div class="row p-4" id="clientsInfo" style="display:none">
                <i class="bi bi-arrow-left-circle-fill" style="font-size: 2em;cursor:pointer" onclick="goBack();"></i>
                <div class="p-4">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card border-dark border-2 mb-3" style="width: 25rem;">
                                <div class="card-body">
                                    <h5><b>Name:</b></h5>
                                    <h5><b>Email:</b></h5>
                                    <h5><b>Contact No.:</b></h5>
                                    <h5><b>Topic to Discuss:</b></h5><br/>
                                    <div class="d-flex justify-content-end">
                                        <h6 class="p-2 align-self-center"><b>Appointment Date: </b></h6>
                                        <h6 class="p-2 text-white align-self-center" style="background-color:#7058B9;border-radius:10px"> 2022-03-15</h6>
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

    function showClients() {
        $('#consultantinfo').hide();
        $('#clientsInfo').show();       
    }

    function goBack() {
        $('#clientsInfo').hide();
        $('#consultantinfo').show(); 
    }
</script>
<?php }else{
	$_SESSION['notification'] = 'Please Login to access the Profile';
	$_SESSION['notification_type'] = 'error';
	// header('Location:'.ROOT_FOLDER);
    ?> 
    <script> window.location.href="<?php echo BASEURL ?>"; </script>
    <?php
} ?>