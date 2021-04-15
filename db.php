<?php

$conn=new mysqli("localhost","root","","servers");
if($conn->connect_error)
{
    echo('<script>alert("Connection Error")</script>');
}

?>