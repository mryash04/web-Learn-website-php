<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo "connected succesfuliy";
}else{
    echo "connection break";
}

mysqli_select_db($con, 'userdata');

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['number'];
$comments = $_POST['comment'];

$query = " insert into userinfodata (username, email, mobile, comment)
values ('$username', '$email', '$mobile', '$comments') " ;

mysqli_query($con, $query);

?>