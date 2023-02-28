<?php
include('googlelogin.php');
include('Navbar/nav.php');
if($login_button == '')
   {
?>
<h1>WELCOME USER</h1>
<?php
echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
echo '<h3><a href="logout">Logout</h3></div>';
   }else{
    header('location:login');
   }
include('Footer/footer.php');
?>