<?php
    session_start();
    if(isset($_session['user_id']))
    {
        $id=$_session['user_id'];
        $name=$_session['name'];
    }
    echo "Hello ".$name; 
   // echo $_session['user_id']
?>