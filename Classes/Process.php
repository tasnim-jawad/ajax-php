<?php
    // $servername = "127.0.0.1";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "new_ajax";
    
    // try {
    //     //code...
    //     $connection = new mysqli($servername, $username, $password, $dbname);
        
    // } catch (Throwable $th) {
    //     throw $th;
    // }
    $connection = new mysqli($servername, $username, $password, $dbname);
    
    // if ($mysqli->connect_errno) {
    //     echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    //     exit();
    // }
    
    // echo "Connected to MySQL successfully! <br>";
    
    // $query = "SELECT * FROM user LIMIT 1";
    // $result = $mysqli->query($query);
    
    // if ($result) {
    //     $row = $result->fetch_assoc();
    //     print_r($row['name']);
    // } else {
    //     echo "Error executing query: " . $mysqli->error;
    // }
    
    // $mysqli->close();

    
    $action = isset($_POST['action']) ? $_POST['action'] : null;
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $editId = isset($_POST['accountId']) ? $_POST['accountId'] : null;

    if($action === 'delete' && isset($id)) {
        // echo "delete";
        $action($id);

    }else if($action === 'edit' && isset($id)){
        // echo "edit clicked";
        $action($id);
    }else if($action === 'update' && isset($editId)){
        echo "update";
        $action($editId);
    }else if($action != null){
        // echo $editId;
        // echo "others";
        $action();
    } 
    
    

    function insert(){
        global $connection;
        $name =$_POST['accountName'];
        $email =$_POST['accountEmail'];
        $password =$_POST['accountPassword'];

        if($name != null && $email != null && $password != null){
            // echo " name field is empty ";
            $query = "INSERT INTO `user`( `id`, `name`, `email`, `password`) VALUES ( Null,'$name','$email','$password')";
            $result = $connection->query($query);
            if($result){
                echo "New record created successfully";
            }else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
        }else{
            echo "name or email or password is empty";
        }
        
    }

    function show(){
        // echo "nothing";
        global $connection;
        $query = "SELECT * FROM `user`";
        $result = $connection->query($query);
        global $connection;
        $query = "SELECT * FROM `user`";
        $result = $connection->query($query);
        if($result){
            $i =1;
            foreach($result as $account){?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><?= $account['name']?></td>
                    <td><?= $account['email'] ?></td>
                    <td><?= $account['password'] ?></td>
                    <td>
                        <button class="editAccount btn btn-warning btn-sm" edit_id ="<?= $account['id'] ?>">edit</button>
                        <button class="deleteAccount btn btn-danger btn-sm" delete_id ="<?= $account['id'] ?>">delete</button>
                    </td>
                </tr>
                
            <?php
            }
        }else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }

    function delete($id){
        global $connection;
        $query = "DELETE FROM `user` WHERE `id`='$id'";
        $result = $connection->query($query);
        if($result){
            echo "Record delete successfully";
        }
    }

    function edit($id){
        // echo "edit id is $id";
        global $connection;
        $query = "SELECT * FROM `user` WHERE `id`='$id'";
        $result = $connection->query($query);
        if($result){
            // echo "new record found";

            
            // echo "<pre>";
            // print_r($result->fetch_assoc());
            // alert($result);
            $data = $result->fetch_assoc();
            echo json_encode($data);
        }
    }

    function update($id){
        global $connection;
        $name =$_POST['accountName'];
        $email =$_POST['accountEmail'];
        $password =$_POST['accountPassword'];

        $query = "UPDATE `user` SET `name`='$name',`email`='$email',`password`='$password' WHERE `id`='$id'";
        $result = $connection->query($query);
        if($result){
            echo "data record updated successfully";
        }else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }
?>