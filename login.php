<?php

require_once('connect.php');

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // This wont be used
    $pwd = md5($password); // This is what we will use
    $mail = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email) 
    VALUES ('$username', '$pwd', '$mail')";

    $sqla = "SELECT `email`, `username` FROM `users` WHERE `username`='".$username."' OR `email`='".$mail."'";
    $result = $conn->query($sqla);

    if($result->num_rows >= 1) 
    {
      echo "Email or Username already exist, try something else.";
    } 
    else 
    {
        if ($conn->query($sql) === TRUE) 
        {
          echo "New record created successfully";
        } 
        else 
        {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
}
?>
