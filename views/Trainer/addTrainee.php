<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://localhost/NewMVC/views/supporfiles/style.css">
    </head>
    <body>
        
        <div class="form-container">
            <form  method="POST" action="?Trainer/addTrainee">
                <p class="form-title"> Add Trainee </p>
                <div class="form-contents">
                        <div class="form-contents-fields">
                            <input type="text" name="traineeName" placeholder="Trainee Name"><br>
                        </div>
                        <div class="form-contents-fields">
                            <input type="text" name="traineeQualification" placeholder="Trainee Qualification"><br>
                        </div>
                        <div class="form-contents-fields">
                            <input type="email" name="traineeEmail" placeholder="Email id"><br>
                        </div>
                        <div class="form-contents-fields">
                            <input type="text" name="traineeMobile" placeholder="Mobile No"><br>
                        </div>
                        <div class="form-contents-fields">
                            <textarea name="traineeAddress" placeholder="Address"></textarea><br>
                        </div>
                        <div class="form-contents-btn">
                            <button type="submit" name="save">Add</button>
                        </div>
                </div>
            </form>
        </div>
    </body>
</html>