<?php
session_start();
require('admin/database/DBcontroller.php');
require('admin/database/Blogs.php');
require('admin/database/Home.php');
require('admin/database/Contact.php');
require('admin/database/Services.php');
$db = new DBcontroller;
$blogs = new Blogs($db);
$home = new Home($db);
$contact = new Contact($db);
$services = new Services($db);
$succuss = '';
$error = '';
