<?php 
$msg = "";
$css_class = "";

$conn = mysqli_connect('localhost', 'root', '', 'e-solution');

    if (isset($_POST['save-user'])) {
        echo "<pre>", print_r($_FILES['profileImage']['name']),"</pre>";
        
        $error = $_POST['error'];
        $profileImage = time() . '_' . $_FILES['profileImage'] ['name'];
        $email = $_POST['email'];
        $anydesk = $_POST['anydesk'];
        $phone_number = $_POST['phonenumber'];
        $operation_system = $_POST['os'];
        $device_name = $_POST['device_name'];



        $target = 'images/' . $profileImage;

        if (move_uploaded_file($_FILES['profileImage'] ['tmp_name'], $target)){
            $sql = "INSERT INTO services (error_image,about_error,email,whatsapp_number,anydesk,operation_system,device_name) VALUES ('$profileImage', '$error','$email','$phone_number','$anydesk','$operation_system','$device_name')";
            if (mysqli_query($conn, $sql)) {
                $msg = "Image uploaded and save to database";
                $css_class = "alert-success";
            }else {
                $msg = "Database Error: Failed to save user";
                $css_class = "alert-danger";
            }


        }else {
            $msg = "failed to upload to upload";
            $css_class = "alert-danger";
        }

    }
?>
