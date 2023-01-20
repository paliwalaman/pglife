<?php
    session_start();
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
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    // $sql="select * from users";
    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    $row=mysqli_fetch_assoc($result);
    if ($row)
    {
        echo "Hello ".$row['name']."<br/>";
        $_SESSION['name']=$row['name'];
        $_SESSION['user_id']=$row['id'];
        // setcookie("user_id", $row['id'], time()+3600);
        // setcookie("name", $row['name'], time()+3600);
        ?>
        <a href="dashboard.php">click here</a>
        <?php
    }
    else
    {
        echo "Login Failed<br/>";
    }
    // while($row=mysql_fetch_assoc($result);)
    // {
    //     echo $row['name']."<br/>";
    // }
    mysqli_close($conn);

    // $email=$_POST['email'];
    // $password=$_POST['password'];
    // echo $email;
    // echo $password;
?>