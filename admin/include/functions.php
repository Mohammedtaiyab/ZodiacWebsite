<?php
session_start();
require ('database/DBcontroller.php');
require ('database/Blogs.php');
require ('database/Home.php');
require ('database/Contact.php');
require ('database/Services.php');
$db= new DBcontroller;
$blogs=new Blogs($db);
$home=new Home($db);
$contact= new Contact($db);
$services=new Services($db);
$succuss='';
$error='';

?>