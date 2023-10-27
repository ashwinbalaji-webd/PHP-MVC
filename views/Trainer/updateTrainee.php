<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://localhost/NewMVC/views/supporfiles/style.css">
    </head>
    <body>
        
        <div class="form-container">
            <form  method="POST" action="?action=addBook">
                <p class="form-title"> Edit/Update </p>
                <div class="form-contents">
                        <div class="form-contents-fields">
                            <input type="text" name="traineeName" placeholder="Trainee Name"><br>
                        </div>
                        <div class="form-contents-fields">
                            <input type="text" name="traineeQualification" placeholder="Trainee Qualification"><br>
                        </div>
                        <div class="form-contents-fields">
                            <input type="email" name="traineeMail" placeholder="Email id"><br>
                        </div>
                        <div class="form-contents-fields">
                            <input type="text" name="traineeMobileNo" placeholder="Mobile No"><br>
                        </div>
                        <div class="form-contents-fields">
                            <textarea name="traineeAddress" placeholder="Address"></textarea><br>
                        </div>
                        <div class="form-contents-btn">
                            <button type="submit" value="edit" name="save">Save</button>
                        </div>
                </div>
            </form>
        </div>
    </body>
</html>