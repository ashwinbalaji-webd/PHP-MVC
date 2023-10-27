<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://localhost/NewMVC/views/supporfiles/style.css">
    </head>
    <body>
        
        <div class="form-container">
            <form  method="POST" action="?admin/addTrainer">
                <p class="form-title"> Add Trainee </p>
                <div class="form-contents">
                        <div class="form-contents-fields">
                            <input type="text" name="trainerName" placeholder="Trainer Name"><br>
                        </div>
                        <div class="form-contents-fields">
                            <input type="email" name="trainerEmail" placeholder="Email id"><br>
                        </div>
                        <div class="form-contents-fields">
                            <input type="text" name="trainerMobile" placeholder="Mobile No"><br>
                        </div>
                        <div class="form-contents-fields">
                            <input type="password" name="trainerPassword" placeholder="password"><br>
                        </div>
                        <div class="form-contents-btn">
                            <button type="submit" name="save">Add</button>
                        </div>
                </div>
            </form>
        </div>
    </body>
</html>