<?php
// include("connection.php");
// require('../server.php');

// Escape user inputs for security
$con = mysqli_connect('localhost','root','','wafa_portal');


if(isset($_POST)){
  $complain_user_id=$_POST['complain_user_id'];
  $complain_user_name=$_POST['complain_user_name'];
  $complain_user_phone=$_POST['complain_user_phone'];
  $complain_user_status=$_POST['complain_user_status'];
  $complain_user_email=$_POST['complain_user_email'];
 
  
    $sql = "INSERT INTO complain_status (`complain_user_id`,`complain_user_name`, `complain_user_phone`, `complain_user_status`, `complain_user_email`)
    VALUES ('$complain_user_id', '$complain_user_name', '$complain_user_phone', '$complain_user_status','$complain_user_email')";
    $query= mysqli_query($con, $sql);
    if($query){
        echo "Data Inserted Successfully";
    } else {
        echo "data Not Inseerted Successfuly";
    }
    $to=$complain_user_email;
    $subject ="You Complain Status";
    $txt=$complain_user_status;
    $headers="From: wafa@example.com";
    
    // mail($to,$subject,$txt,$headers);
    $retval = mail($to,$subject,$txt,$headers);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
   
}



?>