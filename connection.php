<?php
session_start();

 $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'peopledb' ) or die(mysqli_error($db));

        $logout=$_GET['logout'];
 
        if ($logout == "" && $logout == "onigbero") {
          session_stop();
          header("location:index.php");
        }
?>