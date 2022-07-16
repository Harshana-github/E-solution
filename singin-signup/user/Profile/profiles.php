<?php 

include 'processForm.php';

$sql = "SELECT * FROM profile_pic"; 

$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style02.css">
    <title>Profile</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-4 form-div">

                


                        <?php foreach($users as $user): ?>

                            <div class="container">
                                <h1><b>My Profile</b></h1>
                            </div>

                            <div>
                                <img id="profileDisplay" src="images/<?php echo $user['profile_image']; ?>" width="150" height="150"/>
                            </div>
                            <br>
                            <div><h4><ul>
                            <li>Bio - <?php echo $user['bio']; ?></li> 
                            <li>E-mail - <?php echo $user['email']; ?></li> 
                            <li>First Name - <?php echo $user['first_name']; ?></li> 
                            <li>Last Name - <?php echo $user['last_name']; ?></li> 
                            <li>Phone Number - <?php echo $user['phone_number']; ?></li> 
                            <li>Birthday - <?php echo $user['birthday']; ?></li> 
                            </ul>
                            </h4>
                            </div>
                            

                        
                        <?php endforeach; ?>


            </div>
        </div>
    </div>

</body>
</html>