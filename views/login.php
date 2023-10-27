<?php
?>
<html>
    <head>
        <title> Login</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/NewMVC/views/supporfiles/login.css">
    </head>
    <body>
        <div class="form-container">
            <?php if($action == 'admin'){?> 
                <form action="?Login/adminLogin" method="post">
                    <p class="form-title"> Admin login</p>
            <?php }else if($action == 'trainer'){?>
                <form action="?Login/trainerLogin" method="post">
                    <p class="form-title"> Trainer login</p>
            <?php }else{?>
                <form action="?Login/traineeLogin" method="post">
                    <p class="form-title"> Trainee login</p>
            <?php }?>
                <div class="form-content">
                    <div class="form-contents-fields">
                        <label for="username">Username</label>
                        <input type="text" name="username">
                    </div>
                    <div class="form-contents-fields">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="form-contents-btn">
                        <button type="submit" name="login">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>