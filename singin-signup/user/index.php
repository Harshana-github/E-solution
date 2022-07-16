<?php 
// i added to show pro pic on after signin
include 'Profile/processForm.php';

$sql = "SELECT * FROM profile_pic"; 

$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);

require_once 'controllers/authController.php'; 
$status = '';
// verify the user using token
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    verifyUser($token);
}

// verify the user using token
if (isset($_GET['password-token'])) {
    $passwordToken = $_GET['password-token'];
    resetPassword($passwordToken);
}

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 4 CSS -->
    
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../home/styl.css">
    <link rel="stylesheet" href="1styl.css">
    <link rel="stylesheet" href="1style.css">

    <link rel="stylesheet" href="Gallery/style.css">
    <title></title>
</head>
<body>
    
<div class="search">
        <div class="icon"></div>
        <div class="input">
            <input type="text" placeholder="Search" id="mysearch">
        </div>
        <span class="clear" onclick="document.getElementById('mysearch').value = ''">

        </span>
    </div>

    <script>
        const icon = document.querySelector('.icon');
        const search = document.querySelector('.search');
        icon.onclick = function() {
            search.classList.toggle('active')
        }
    </script>

</div>

<div class="banner">

<?php echo $status; ?>

<?php if(isset($_SESSION['message'])): ?>
    <div class="alert <?php echo $_SESSION['alert-class']; ?>">
        <?php 
            echo $_SESSION['message']; 
            unset($_SESSION['message']);
            unset($_SESSION['alert-class']);
        ?>
    </div>
    <?php endif; ?>

	


	<div class="content">
		
		<p>                
            <?php if(!$_SESSION['verified']): ?>
                <div class="alert alert-warning">
                    You need to verify your account.
                    Sign in to your email account and click on the 
                    verification link we just emailed you at
                    <strong><?php echo $_SESSION['email']; ?></strong>
                </div>
            <?php endif; ?>
        </p>
		
		
	</div>
	
</div>




<div class="action">
            <div class="profile" onclick="menuToggle();">
                <img src="avatar.png">
            </div>
            <div class="menu">
                <h3><?php echo $_SESSION['username']; ?><br><span>Customer</span></h3>
                <ul>
                    <li><img src="Icon/avatar.png"><a href="../user/Profile/profiles.php">My Profile</a></li>
                    <li><img src="Icon/edit.png"><a href="Profile/index.php">Edit Profile</a></li>
                    <li><img src="Icon/envelope.png"><a href="../admin/image_click/profiles.php">Inbox</a></li>
                    <li><img src="Icon/settings.png"><a href="../../checkout/">Payment</a></li>
                    <li><img src="Icon/paper-plane.png"><a href="../../contact/contact-us.php">Help</a></li>
                    <li><img src="Icon/logout.png"><a href="index.php?logout=1">Logout</a></li></a>
                </ul>
            </div>
 </div>
        <script>
            function menuToggle(){
                const toggleMenu = document.querySelector('.menu');
                toggleMenu.classList.toggle('active')
            }
        </script>

<!--Gallary-->
<input type="radio" name="Photos" id="check1" checked>
    <input type="radio" name="Photos" id="check2">
    <input type="radio" name="Photos" id="check3">
    <input type="radio" name="Photos" id="check4">

    <div class="container">
        <h1>OUR SERVICES</h1>
        <div class="top-content">
            <h3><a href="../../home/">Home</a></h3>
            <label for="check1">All SERVICES</label>
            <label for="check2">Linux</label>
            <label for="check3">Mac OS</label>
            <label for="check4">Windows</label>
        </div>

        <div class="photo-gallery">
            <div class="pic place">
                <a href="image_click/index.php"><img src="Gallery/img/place1.png"></a>
            </div>
            <div class="pic family">
                <a href="image_click/index.php"><img src="Gallery/img/family1.png"></a>
            </div>
            <div class="pic child">
                <a href="image_click/index.php"><img src="Gallery/img/child1.png"></a>
            </div>
            <div class="pic place">
                <a href="image_click/index.php"><img src="Gallery/img/place2.png"></a>
            </div>
            <div class="pic family">
                <a href="image_click/index.php"><img src="Gallery/img/family2.png"></a>
            </div>
            <div class="pic child">
                <a href="image_click/index.php"><img src="Gallery/img/child2.png"></a>
            </div>
            <div class="pic place">
                <a href="image_click/index.php"><img src="Gallery/img/place3.png"></a>
            </div>
            <div class="pic family">
                <a href="image_click/index.php"><img src="Gallery/img/family3.png"></a>
            </div>
            <div class="pic child">
                <a href="image_click/index.php"><img src="Gallery/img/child3.png"></a>
            </div>
            <div class="pic place">
                <a href="image_click/index.php"><img src="Gallery/img/place4.png"></a>
            </div>
            <div class="pic family">
                <a href="image_click/index.php"><img src="Gallery/img/family4.png"></a>
            </div>
            <div class="pic child">
                <a href="image_click/index.php"><img src="Gallery/img/child4.png"></a>
            </div>
        </div>

    </div>

    
</body>
</html>