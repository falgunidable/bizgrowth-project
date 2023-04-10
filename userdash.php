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
      $profilequery = "SELECT * from users where `email` = '$email'";
      $result = mysqli_query($conn,$profilequery);
      $row = mysqli_fetch_assoc($result);
      $profileimg = !empty($row['profile_img']) ? $row['profile_img'] : 'profile_icon.png';
      $userPictureURL = 'images/profile/'.$profileimg;
?>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
crossorigin="anonymous">
<script
   src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
   integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
   crossorigin="anonymous"></script>
<script
   src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
   integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
   crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<style>
   .upper img{
   border-radius: 50px;
   border:1px solid white;
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
</style>

<div class="card p-5 border-0">
  <div class="card-body shadow p-0">
    <div class="row">
        <div class="col-5 col-md-3 col-sm-5 text-center text-white" style="background-color:#6348b5">
            <div class="upper">
                <form method="post" action="./update_image.php" enctype="multipart/form-data" id="picUploadForm" target="uploadTarget">
                    <input type="hidden" name="email" value="<?php echo $row['email'] ?>" />
                    <input type="file" name="picture" id="fileInput" accept="image/*" style="display:none">
                </form>
                <iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                <img src="<?php echo $userPictureURL ?>" id="profile-img" alt="Profile Image" width="80" height="80"/>
            </div><br/>
            <h4 class="mb-0"><b><?php echo $_SESSION['username'] ?></b></h4>
            <span class="d-block mb-2"><?php echo $_SESSION['email'] ?></span><br/>
            <nav class="navbar">
                <div class="container-fluid">
                    <ul class="navbar-nav col-md-12">
                        <li class="nav-item p-1">
                            <a class="pe-auto nav-link btn btn-outline-light" href="#">Notifications</a>
                        </li><br/>
                        <li class="nav-item p-1">
                            <a class="pe-auto nav-link btn btn-outline-light" href="#">Feedback</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-8 col-md-9 col-sm-8" style="background-color:#fff1e6">
            <nav class="navbar navbar-expand-sm text-center">
                <ul class="navbar-nav" id="navitem" style="cursor:pointer">
                    <li class="col-md-5 nav-item p-2 active">Profile Settings</li>
                    <li class="col-md-5 nav-item p-2">Services Avalied</li>
                    <li class="col-md-6 nav-item p-2">Documents Uploaded</li>
                    <li class="col-md-5 nav-item p-2">Appointments</li>
                </ul>
            </nav>
            <div class="row p-4">
                <div class="col-12 col-md-12 col-sm-10 p-3 shadow bg-white">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<script>
   $(document).ready(function () {

      $( "#navitem .nav-item" ).bind( "click", function(event) {
         var clickedItem = $( this );
         $( "#navitem .nav-item" ).each( function() {
               $( this ).removeClass( "active" );
         });
         clickedItem.addClass( "active" );
      });

      //If image edit link is clicked
      $("#profile-img").on('click', function(e){
         e.preventDefault();
         $("#fileInput:hidden").trigger('click');
      });

      //On select file to upload
      $("#fileInput").on('change', function(){
         var image = $('#fileInput').val();
         var img_ex = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
         
         //validate file type
         if(!img_ex.exec(image)){
               alert('Please upload only .jpg/.jpeg/.png/.gif file.');
               $('#fileInput').val('');
               return false;
         }else{
               $( "#picUploadForm" ).submit();
         }
      });
   });

   //After completion of image upload process
   function completeUpload(success, fileName) {
      if(success == 1){
         $('#profile-img').attr("src", "");
         $('#profile-img').attr("src", fileName);
         $('#fileInput').attr("value", fileName);
         alert('Profile Pic Changed');
      }else{
         alert('There was an error during file upload!');
      }
      return true;
   }

</script>
<?php
   }else{
   //  header('location:../');
   }
?>
