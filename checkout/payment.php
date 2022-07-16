<?php 
$msg = "";
$css_class = "";

$conn = mysqli_connect('localhost','root','','e-solution');

    if (isset($_POST['pay'])) {
        
        $email = $_POST['email'];
        $card_holder_name = $_POST['card_holder'];
        $card_number = $_POST['card_number'];
        $expiry_date = $_POST['expiry-data'];
        $cvc = $_POST['cvc'];

        $sql = "INSERT INTO payment (email,card_holder,card_number,expiry_date,cvc) VALUES ('$email','$card_holder_name','$card_number','$expiry_date','$cvc')";

        if (mysqli_query($conn,$sql)){
            $msg = "Save to database";
            $css_class = "alert-success";
        }else{
            $msg = "Database error";
            $css_class = "alert_danger";
        }
    }

?>