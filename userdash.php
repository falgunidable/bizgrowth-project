<?php
include('db/defineUrl.php');
include(ROOT_FOLDER.'authentication/googlelogin.php');
include(ROOT_FOLDER.'Navbar/nav.php');
if(isset($_SESSION['username']))
   {
      if (isset($_SESSION['notification'])) {
         $message = $_SESSION['notification'];
         $type = $_SESSION['notification_type'];
         echo '<div class="p-3 fst-italic notification ' . $type . '">' . $message . '</div>';
         unset($_SESSION['notification']);
         unset($_SESSION['notification_type']);
      }
?>
<style>
   @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");
body{
 background-color:#545454;
}
.card{
 width: 500px;
 border: none;
 border-radius: 15px;
 padding: 8px;
 background-color: #fff;
 position: relative;
 height: 370px;
}
.upper{
 height: 100px;
}
.upper img{
 width: 100%;
 border-top-left-radius: 10px;
 border-top-right-radius: 10px;
}
.user{
 position: relative;
}
.profile img{
 height: 80px;
 width: 80px;
 margin-top:2px;
}
.profile{
 position: absolute;
 top:-50px;
 left: 40%;
 height: 90px;
 width: 90px;
 border-radius: 50%;
}
.follow{
 border-radius: 15px;
 padding-left: 20px;
 padding-right: 20px;
 height: 35px;
}
.stats span{
 font-size: 29px;
}
.notification {
   display:inline-block;
   position: fixed;
   top: 40px;
   right: 500px;
   border-radius: 5px;
   background-color: #333;
   color: #fff;
   padding: 10px;
   text-align: center;
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
</style>

<div class="container d-flex justify-content-center align-items-center" style="height: 70vh;">
   <div class="card">
      <div class="upper">
         <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid"/>
      </div>
      <div class="user text-center">
         <div class="profile">
            <img src="images/profile_icon.png" class="rounded-circle" width="80"/>
         </div>
      </div>
      <div class="mt-5 text-center">
         <h4 class="mb-0"><?php echo $_SESSION['username'] ?></h4>
         <span class="text-muted d-block mb-2"><?php echo $_SESSION['email'] ?></span>
         <button class="btn btn-primary btn-sm follow">Follow</button>
         <div class="d-flex justify-content-between align-items-center mt-4 px-4">
            <div class="stats">
                  <h6 class="mb-0">Services Availed</h6>
                  <span>2</span>
            </div>
            <div class="stats">
                  <h6 class="mb-0">Projects</h6>
                  <span>5</span>
            </div>
            <div class="stats">
                  <h6 class="mb-0">Consulted</h6>
                  <span>-</span>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
include(ROOT_FOLDER.'Footer/footer.php');
   }else{
   //  header('location:../');
   }
?>