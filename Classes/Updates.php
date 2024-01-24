<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "new_ajax";

    $connection = new mysqli($servername, $username, $password, $dbname);

    $action = isset($_POST['action']) ? $_POST['action'] : null;
    $id = isset($_POST['accountId']) ? $_POST['accountId'] : null;

    if($action === 'update' && isset($id)) {
        echo "update";
        // $action($id);

    }


    function update($id){
        global $connection;
        $name =$_POST['accountName'];
        $email =$_POST['accountEmail'];
        $password =$_POST['accountPassword'];

        $query = "INSERT INTO `user` WHERE ( `id`, `name`, `email`, `password`) VALUES ( Null,'$name','$email','$password')";
        $query = "UPDATE `user` SET `name`='$name',`email`='$email',`password`='$password' WHERE `id`='$id'";
        $result = $connection->query($query);
        if($result){
            echo "New record created successfully";
        }else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }
    

?>