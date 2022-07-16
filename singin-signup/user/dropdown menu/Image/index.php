<?php
?>
<html>
    <head>
        <title>Action Menu Button</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="action">
            <div class="profile" onclick="menuToggle();">
                <img src="avatar.png">
            </div>
            <div class="menu">
                <h3>Some Famous<br><span>Website Designer</span></h3>
                <ul>
                    <li><img src="Icon/avatar.png"><a href="#">My Profile</a></li>
                    <li><img src="Icon/edit.png"><a href="#">Edit Profile</a></li>
                    <li><img src="Icon/envelope.png"><a href="#">Inbox</a></li>
                    <li><img src="Icon/settings.png"><a href="#">Settings</a></li>
                    <li><img src="Icon/paper-plane.png"><a href="#">Payment</a></li>
                    <li><img src="Icon/logout.png"><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
        <script>
            function menuToggle(){
                const toggleMenu = document.querySelector('.menu');
                toggleMenu.classList.toggle('active')
            }
        </script>
    </body>
</html>