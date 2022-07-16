<?php 

include 'processForm.php';

$sql = "SELECT * FROM services"; 

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

    <title>Profile</title>
</head>
<body>

   
                        <?php foreach($users as $user): ?>



                        
                            <img id="profileDisplay" src="images/<?php echo $user['error_image']; ?>" width="100%" height="100%"/>
                            
                        <?php endforeach; ?>

</body>
</html>