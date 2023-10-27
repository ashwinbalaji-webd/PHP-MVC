<html>

    <head>
        <title>Trainers List</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/NewMVC/views/supporfiles/style.css">
    </head>
    <body>
        
        <center>
        <button><a href="?action=addBook">Add</a></button>
        <table>
           
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Mail</th>
                <th>Mobile</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            <?php foreach($books as $book){ ?>
            <tr>
                <td><?php echo $book['book_id']?></td>
                <td><?php echo $book['book_title']?></td>
                <td><?php echo $book['book_author'] ?></td>
                <td><?php echo $book['book_category'] ?></td>
                <td><?php echo $book['book_pages'] ?></td>
                <td><?php echo $book['book_price'] ?></td>
                <td><a href="?action=deleteBook&id=<?php echo $book['book_id']?>">delete</a></td>
                <td><a href="?action=updateBook&id=<?php echo $book['book_id']?>">update</a></td>
            </tr>
            <?php } ?>
        </table>
        <center>
    </body>
</html>