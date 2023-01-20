<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="test";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo "Connection failed: ".mysqli_connect_error();
        exit;
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql= "INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')";
    $result= mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "Error: ".mysql_error($conn);
        exit;
    }
    echo "<script>alert("Registration sucessfull")</script>";
    mysqli_close($conn);
    // echo $name;
    // echo $email;
    // echo $password;
?>