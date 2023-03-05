<?php
include('db/defineUrl.php');
include(ROOT_FOLDER.'authentication/googlelogin.php');
include(ROOT_FOLDER.'Navbar/nav.php');
if($login_button == '')
   {
?>
<h1>WELCOME USER</h1>
<?php
echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
?>
<h3><a href="authentication/logout">Logout</h3></div>
<?php
   }else{
   //  header('location:../');
   }
include(ROOT_FOLDER.'Footer/footer.php');
?>