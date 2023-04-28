<?php
include('db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');
include(ROOT_FOLDER.'authentication/login.php');

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
</style>
<div class="container" style="margin:0;height: 90.5vh;">
    <div class="row" style="height: 100%;overflow: hidden;">
        <div class="col-md-4" style="background-color:#7058B9;height: 100%;">

        </div>
        <div class="col-md-8">
            <div class="container">
                <div class="row" id="filterservice" style="border-bottom:3px solid #FE7F10;">
                    <div class="col-md-3 slist actives" id="ele1">
                        <a href="javascript:;"><h6 class="p-2" style="font-weight:bolder;">Profile Settings</h6></a>
                    </div>
                    <div class="col-md-4 slist" id="ele3">
                        <h6 class="p-2" style="font-weight:bolder;">Services Availed</h6>
                    </div>
                    <div class="col-md-3 slist" id="ele2">
                        <a href="javascript:;"><h6 class="p-2" style="font-weight:bolder;">Documents Uploaded</h6></a>
                    </div>
                    <div class="col-md-2 slist" id="ele4">
                        <h6 class="p-2" style="font-weight:bolder;">Appointments</h6>
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