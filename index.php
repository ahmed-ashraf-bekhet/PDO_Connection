<?php
include_once "conn.php";

        $conn = new DBConnection();
        // var_dump($conn);
        if($conn){
            // echo $conn;
            // $sql  = 'SELECT * FROM users';
            $stmt = $conn->prepare("select * from users");
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            var_dump($result);
        }
        else{
            echo 'failed';
        }
    

?>