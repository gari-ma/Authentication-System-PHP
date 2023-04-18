<?php
$conn=new mysqli('localhost','root','','logindb');
if (!$conn) {
    die("connection failed!");
    # code...
} else {
    # code...
    // echo "success";
    $username=$_POST['uName'];
    $password=$_POST['pass'];

    echo $password;
    $hashed_pass=sha1($password);
    echo $hashed_pass;~

    $sql =  "SELECT * FROM login_db WHERE username='$username' && password='$hashed_pass' limit 1;";
    $result=$conn->query($sql);
    if ($result->num_rows>0) {
        //initialized session
       session_start(); 
       $_SESSION["loggedIn"] = true;
       header('location:hidden.php');
        
    } 
    else {
        # code...
        echo "user does not exists.";
    }
    

}

?>