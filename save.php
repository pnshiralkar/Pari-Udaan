<?php

if (isset($_POST['step'])) {
    $data = (object)array();
    session_start();


    ////////////////////////////////////////////////////////////////////////////////////////////////

    $_SESSION['email'] = "pnshiralkar@gmail.com";

    ////////////////////////////////////////////////////////////////////////////////////////////////

    $data->auth = true;
    if (!isset($_SESSION['email'])) {
        $data->auth = false;
    } else {
        $data->email = $_SESSION['email'];
        if($_POST['step']=='1')
        {
            require_once ("connect.php");
            $sql = "UPDATE applicants SET name = '" . $_POST['name'] . "' WHERE email = '" . $_SESSION['email'] . "'";
            if($conn->query($sql)) {
                $data->success = true;
            }else{$data->success = false;}
        }
    }
    echo json_encode($data);
}