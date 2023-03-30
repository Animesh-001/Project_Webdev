<?php
session_start();

if($_SESSION['user']=='')
{
    header("location:index1.html");
}


?>