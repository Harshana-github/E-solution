<?php 

include 'processForm.php';

$sql = "SELECT * FROM accept"; 

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
    <link rel="stylesheet" href="../../user/Profile/style.css">
    <title>Profile</title>
</head>
<body>
    <h1>NOTIFICATION</h1>

    <table class="table table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Error</th>
                        <th>Zoom Link</th>
                        <th>Feedback</th>

                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                        <tr>

                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['error']; ?></td>
                            <td><?php echo $user['zoom']; ?></td>
                            <td><a href="../../user/feedback/">click here to send your feedback</a> </td>

                        </tr>
                        
                        <?php endforeach; ?>
                    </tbody>
                </table>

</body>
</html>