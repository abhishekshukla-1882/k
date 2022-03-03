<?php
    require('db.php');
    class regis{
        function signup($username,$password){
            $sql = "INSERT INTO user (username,password, authen)
            VALUES ($username,$password, 0)";
            $conn->exec($sql);

            echo "New record created successfully";
            $conn = null;
        }
    }

?>