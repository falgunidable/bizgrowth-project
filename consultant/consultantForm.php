<?php
include_once('../db/defineUrl.php');
include('../db/connect.php');
require_once(ROOT_FOLDER.'email/email.php');
session_start();

    $firstanme = $_POST['cfirstname'];
    $title = $_POST['cptitle'];
    $wexp = $_POST['cexperience'];
    $age = $_POST['cage'];
    $gender = $_POST['cgender'];
    $qualification = $_POST['cqualification'];
    $sector = $_POST['csector'];
    $csalary = $_POST['csalary'];
    $esalary = $_POST['esalary'];
    $skills = $_POST['skills'];
    $linkedin = $_POST['linkedin'];
    $twitter = $_POST['twitter'];
    $appointdate = $_POST['date'];
    $contact = $_POST['cphone'];
    $address = $_POST['caddress'];
    $state = $_POST['cstate'];
    $city = $_POST['ccity'];
    $pincode = $_POST['cpincode'];
    $username = $_POST['cusername'];
    $password = $_POST['cpassword'];
    $email = $_POST['cemail'];

    $token = md5($email).rand(10,9999);

    $photoDir = "../images/profile/";
    $targetPhoto = $photoDir . basename($_FILES["image_file"]["name"]);
    $photo = basename($_FILES["image_file"]["name"]);

    $resumeDir = "../images/resume/";
    $targetResume = $resumeDir . basename($_FILES["resume"]["name"]);
    $resume = basename($_FILES["resume"]["name"]);
  
    if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $targetPhoto) && move_uploaded_file($_FILES["resume"]["tmp_name"], $targetResume)) {
        $sql = "INSERT INTO `users`(`username`, `email`, `password`, `profile_img`,`email_verification_link`, `email_verified_at`, `last_login`) VALUES ('$username','$email','$password','$photo','$token',null,NOW())";
        if(regmail($email,$username,$token)){
            if(mysqli_query($conn,$sql)){
                $consultant_id = mysqli_insert_id($conn);
                $consultprofile = "INSERT INTO `profile_info`(`contact`, `address`, `state`, `city`, `pincode`, `uid`) VALUES ('$contact','$address','$state','$city','$pincode','$consultant_id')";           
                $consultant = "INSERT INTO `consultant`(`uid`,`name`, `ptitle`, `work_experinece`, `age`, `gender`, `highest_qualif`, `sector`, `resume`, `csalary`, `esalary`,`skills`, `certificates`, `linkedin`, `twitter`, `appointment`) VALUES 
                ('$consultant_id','$firstanme','$title','$wexp','$age','$gender','$qualification','$sector','$resume','$csalary','$esalary','$skills','','$linkedin','$twitter','$appointdate')";
            
                if(mysqli_query($conn, $consultant)){
                    if(mysqli_query($conn, $consultprofile)){
                        $_SESSION['notification'] = 'Email Sent';
                        $_SESSION['notification_type'] = 'success';
                        // echo "The file ". htmlspecialchars( basename( $_FILES["image_file"]["name"])). " has been uploaded.";
                        header('location:'.BASEURL);
                    }else{
                        echo 'error';
                    }
                }
            }
        }
    } else {
    echo "error";
    }
  
?>