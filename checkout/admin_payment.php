<?php 

include 'payment.php';

$sql = "SELECT * FROM payment"; 

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
    <link rel="stylesheet" href="../singin-signup/user/Profile/style.css">
    <title>Payment details</title>
</head>
<body>


<h1>PAYMENT DETAILS</h1>


                        <table class="table table-bordered">
                    <thead>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Card Holder</th>
                                <th>Card Number</th>
                                <th>Expiry Date</th>
                                <th>CVC</th>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                        <tr>

                                 <td><?php echo $user['id']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['card_holder']; ?></td>
                                <td><?php echo $user['card_number']; ?></td>
                                <td><?php echo $user['expiry_date']; ?></td>
                                <td><?php echo $user['cvc']; ?></td>
                        </tr>
                        
                        <?php endforeach; ?>
                    </tbody>
                </table>


</body>
</html>