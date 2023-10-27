<?php
    if(isset($_SESSION['username'])){
        include('adminNav.php');
?>






<?php
    }else{
        echo "<h1>page not found</h1>";
    }