<?php
include('db/defineUrl.php');
include(ROOT_FOLDER.'authentication/googlelogin.php');
include(ROOT_FOLDER.'Navbar/nav.php');
if(isset($_SESSION['username']))
   {
?>
<h1>WELCOME USER</h1>
<?php
echo '<h3><b>Name :</b> '.$_SESSION['username'].'</h3>';
echo '<h3><b>Email :</b> '.$_SESSION['email'].'</h3>';
?>
<h3><a href="authentication/logout">Logout</h3></div>
<?php
   }else{
   //  header('location:../');
   }
include(ROOT_FOLDER.'Footer/footer.php');
?>