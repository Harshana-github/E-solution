<?php include 'solution_details_processform.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="Profile/style.css">
    <title>Profile</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-4 form-div">
                <form action="Profile/index.php" method="POST" enctype="multipart/form-data">
                    
                    <h3 class="text-center">Create Profile</h3>

                    <?php if(!empty($msg)): ?>
                        <div class="alert <?php echo $css_class; ?>">
                            <?php echo $msg; ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-group text-center">
                        <img src="Profile/Images/avatar.png" onclick="triggerClick()" id="profileDisplay" />
                        <label for="profileImage">Profile Image</label>
                        <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" style="display: none;" >
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea name="bio" id="bio" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="phonenumber">Phone Number</label>
                        <input type="text" name="phonenumber" id="phonenumber" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="birthday">Birthday</label>
                        <input type="date" name="birthday" id="birthday" class="form-control">
                    </div>
                    <br><br>
                    <div class="form-group">
                        <button type="submit" name="save-user" class="btn btn-primary btn-block">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="Profile/script.js"></script>
</body>
</html>