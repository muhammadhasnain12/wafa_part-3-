
<?php
//   require('../server.php');


// echo "Connection established";
$con = mysqli_connect('localhost','root','','wafa_portal');

if(isset($_POST)){
    $userid = $_POST['delete_user_id'];
    $sql = "DELETE * FROM complain_form WHERE id='$userid'";
    $query= mysqli_query($con, $sql);
    if($query){
        echo "Data Deleted From Database.";
    }else {
       echo "Some Server Error";
    }
}

?>