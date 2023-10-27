
<html>

    <head>
       <title>Trainees Data</title>
       <link rel="stylesheet"  href="http://localhost/NewMVC/views/supporfiles/style.css">
    </head>
    <body>
        
        <center>

        <button type="button" onclick="location.href='?trainer/addTrainee'">Add</button>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Qualification</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            <?php foreach($trainees as $trainee){ ?>
            <tr>
                <td><?=$trainee['trainee_id']?></td>
                <td><?=$trainee['trainee_name']?></td>
                <td><?=$trainee['trainee_qualification']?></td>
                <td><?=$trainee['trainee_email']?></td>
                <td><?=$trainee['trainee_mobile']?></td>
                <td><?=$trainee['trainee_Address']?></td>
                <td><button type="button" onclick="location.href='?trainer/deleteTrainee/id=<?php echo $trainee['trainee_id']?>'">Delete</button></td>
                <td><button type="button" onclick="location.href='?trainer/deleteTrainee/id=<?php echo $trainee['trainee_id']?>'">Edit</button></td>
                <!-- <td><a href="?trainer/deleteTrainee/id=<?php echo $trainee['trainee_id']?>">delete</a></td> -->
                <!-- <td><a href="?trainer/updateTrainee/id=<?php echo $trainee['trainee_id']?>">update</a></td> -->
            </tr>
            <?php } ?>
        </table>
        <center>
    </body>
</html>