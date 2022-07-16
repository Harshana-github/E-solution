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
    <link rel="stylesheet" href="../Profile/style.css">
    <title>Profile</title>
</head>
<body>
    <h1>CUSTOMER REQUST</h1>

    <table class="table table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Profile Image</th>
                        <th>Error</th>
                        <th>Anydesk</th>
                        <th>Phone Number</th>
                        <th>Operation System</th>
                        <th>Device Name</th>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                        <tr>

                            <td><?php echo $user['id']; ?></td>
                            <td><a href="../../admin/image_click/index.php"> <?php echo $user['email']; ?></a></td>
                            <td><a href="error_image_full.php">Click here to view error image </a> </td>
                            <td><?php echo $user['about_error']; ?></td>
                            <td><?php echo $user['anydesk']; ?></td>
                            <td><?php echo $user['whatsapp_number']; ?></td>
                            <td><?php echo $user['operation_system']; ?></td>
                            <td><?php echo $user['device_name']; ?></td>
                        </tr>
                        
                        <?php endforeach; ?>
                    </tbody>
                </table>

</body>
</html>