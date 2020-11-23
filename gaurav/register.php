<?php
include_once('conn.php');
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$city = $_POST['city'];

$pin = $_POST['pin'];
$state = $_POST['state'];
$country = $_POST['country'];


$sql = "insert into user (name,email,contact,address,city,pin,state,country) values('$name','$email','$contact','$address','$city','$pin','$state','$country')";

if (mysqli_query($con, $sql)) {
    $target_dir = "testupload/";

    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
     

    if (isset($_POST["submit"])) {

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $last_id = mysqli_insert_id($con);
            $sql = "insert into user_document (path,user_id) values('$target_file',$last_id)";
            if (mysqli_query($con, $sql)) {
                echo "USER REGISTRED SUCCESSFULLY";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
else{
    echo "failed to register";
}
