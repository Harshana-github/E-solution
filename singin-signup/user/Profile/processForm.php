<?php 
$msg = "";
$css_class = "";

$conn = mysqli_connect('localhost', 'root', '', 'e-solution');

    if (isset($_POST['save-user'])) {
        echo "<pre>", print_r($_FILES['profileImage']['name']),"</pre>";
        
        $bio = $_POST['bio'];
        $profileImage = time() . '_' . $_FILES['profileImage'] ['name'];
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone_number = $_POST['phonenumber'];
        $birthday = $_POST['birthday'];

        $target = 'images/' . $profileImage;

        if (move_uploaded_file($_FILES['profileImage'] ['tmp_name'], $target)){
            $sql = "INSERT INTO profile_pic (profile_image,bio,email,first_name,last_name,phone_number,birthday) VALUES ('$profileImage', '$bio','$email','$fname','$lname',' $phone_number','$birthday')";
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
