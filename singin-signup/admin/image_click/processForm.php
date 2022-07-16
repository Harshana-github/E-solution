<?php 
$msg = "";
$css_class = "";

$conn = mysqli_connect('localhost', 'root', '', 'e-solution');

    if (isset($_POST['send'])) {

        
        $error = $_POST['error'];
        $email = $_POST['email'];
        $zoom = $_POST['zoom'];


            $sql = "INSERT INTO accept (email,error,zoom) VALUES ('$email','$error','$zoom')";
            if (mysqli_query($conn, $sql)) {
                $msg = "Sent to user";
                $css_class = "alert-success";
            }else {
                $msg = "Database Error: Failed to save user";
                $css_class = "alert-danger";
            }


        }else {
            $msg = "failed to upload to upload";
            $css_class = "alert-danger";
        }

    
?>
