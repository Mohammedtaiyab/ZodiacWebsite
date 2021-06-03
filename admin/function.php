<?php
require("include/functions.php");


if (isset($_POST["save"])) {

    $topic = $_POST["topic"];
    $description = $_POST["description"];
    $buttontitle = $_POST["buttontitle"];
    $cpbody = trim($_POST['paragraph']);
    // $cpbody = preg_replace("/\<p\>\&nbsp\;\<\/p\>/", "", $cpbody);
    // $cpbody = preg_replace("/\&nbsp\;+/", " ", $cpbody);
    // $cpbody = preg_replace("/\s+/", " ", $cpbody);
    $paragraph = $cpbody;
    $buttonlink = $_POST["buttonlink"];
    $page = $_POST["page"];
    $filename = $_FILES['image']['name'];
    if (!empty($filename)) {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $new_filename = rand(10, 10000) . "_" . $topic . '.' . $ext;
        move_uploaded_file($_FILES['image']['tmp_name'], '../assets/images/' . $new_filename);
    } else {
        $new_filename = '';
    }
    $save = $home->updateheader($topic, $description, $paragraph, $buttontitle, $buttonlink, $new_filename, $page);
    if ($_POST["pagename"] == "header") {
        header('Location: home.php');
    } else {
        header('Location: aboutus.php');
    }
}








if (isset($_POST["saveservice"])) {

    $topic = $_POST["topic"];
    $description = $_POST["description"];
    $buttontitle = $_POST["buttontitle"];
    $cpbody = trim($_POST['paragraph']);
    $cpbody = preg_replace("/\<p\>\&nbsp\;\<\/p\>/", "", $cpbody);
    $cpbody = preg_replace("/\&nbsp\;+/", " ", $cpbody);
    $cpbody = preg_replace("/\s+/", " ", $cpbody);
    $paragraph = $cpbody;
    $buttonlink = $_POST["buttonlink"];
    $page = $_POST["page"];
    $filename = $_FILES['image']['name'];
    if (!empty($filename)) {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $new_filename = rand(10, 10000) . "_" . $topic . '.' . $ext;
        move_uploaded_file($_FILES['image']['tmp_name'], '../assets/images/' . $new_filename);
    } else {
        $new_filename = '';
    }
    $save = $services->updateservice($topic, $description, $paragraph, $buttontitle, $buttonlink, $new_filename, $page);

    if ($_POST["pagename"] == "experts") {
        header('Location: services.php');
    } else if ($_POST["pagename"] == "faq") {
        header('Location: faq.php');
    } else {
        header('Location: astrologers.php');
    }
}


if (isset($_POST["addservice"])) {

    $topic = $_POST["topic"];
    $description = $_POST["description"];
    $buttontitle = $_POST["buttontitle"];
    $cpbody = trim($_POST['paragraph']);
    $cpbody = preg_replace("/\<p\>\&nbsp\;\<\/p\>/", "", $cpbody);
    $cpbody = preg_replace("/\&nbsp\;+/", " ", $cpbody);
    $cpbody = preg_replace("/\s+/", " ", $cpbody);
    $paragraph = $cpbody;
    $buttonlink = $_POST["buttonlink"];
    $page = $_POST["pagename"];
    $filename = $_FILES['image']['name'];
    if (!empty($filename)) {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $new_filename = rand(10, 10000) . "_" . $topic . '.' . $ext;
        move_uploaded_file($_FILES['image']['tmp_name'], '../assets/images/' . $new_filename);
    } else {
        $new_filename = '';
    }
    $save = $services->addservice($topic, $description, $paragraph, $buttontitle, $buttonlink, $new_filename, $page);

    if ($_POST["pagename"] == "experts") {
        header('Location: services.php');
    } else if($_POST["pagename"] == "faq") {
        header('Location: faq.php');
    }else{
        header('Location: astrologers.php');
    }
}



if (isset($_POST["astroloid"])) {

    $id = $_POST["astroloid"];
    $services = $services->getdatabyid($id);
    echo json_encode($services);
}
if (isset($_POST["aboutusid"])) {

    $id = $_POST["aboutusid"];
    $home = $home->getdatabyid($id);
    echo json_encode($home);
}
if (isset($_POST["contact"])) {

    $id = $_POST["contact"];
    $home = $home->getcontactbyid($id);
    echo json_encode($home);
}

if (isset($_POST["statusid"])) {

    $id = $_POST["statusid"];
    $status = $_POST["status"];
    $services = $services->changestatus($id, $status);
    echo json_encode($services);
}
if (isset($_POST["delete"])) {

    $id = $_POST["delete"];
    $services = $services->delete($id);
    echo json_encode($services);
}



if (isset($_POST["username"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $login = $home->login($username, $password);
                if($login==true){
            $_SESSION['admin']=true;
                }
                echo json_encode($login);
            }

if (isset($_GET["logout"])) {
    if ($_GET["logout"] == true) {
        session_destroy();
        header('location: login.php'); 
    }

}
                ?>