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
        require_once("connect.php");
        $data->email = $_SESSION['email'];

        $sql = "SELECT * FROM applicants WHERE email = '" . $_SESSION['email'] . "'";
        $row = $conn->query($sql)->fetch_assoc();
        $data->progress = (int)$row['progress'];
        if (isset($row['name'])) {
            $data->fn = explode(" ", $row['name'])[0];
            $data->mn = explode(" ", $row['name'])[1];
            $data->ln = explode(" ", $row['name'])[2];
        }
        if (isset($row['email'])) {
            $data->email = $row['email'];
        }
        if (isset($row['dob'])) {
            $data->dob = $row['dob'];
        }
        if (isset($row['contact'])) {
            $data->contact = $row['contact'];
        }
        if (isset($row['mother'])) {
            $data->mother = $row['mother'];
        }
        if (isset($row['address'])) {
            $data->address = $row['address'];
        }
        if (isset($row['class'])) {
            $data->class = $row['class'];
        }
        if (isset($row['board'])) {
            $data->board = $row['board'];
        }
        if (isset($row['marks'])) {
            $data->marks = $row['marks'];
        }
        if (isset($row['tmarks'])) {
            $data->tmarks = $row['tmarks'];
        }
        if (isset($row['per'])) {
            $data->per = $row['per'];
        }
        if (isset($row['school'])) {
            $data->school = $row['school'];
        }
        if (isset($row['schooladd'])) {
            $data->schooladd = $row['schooladd'];
        }
        if (isset($row['photo']) && strlen($row['photo']) >= 1) {
            $data->photo = $row['photo'];
        }
        if (isset($row['marksheet']) && strlen($row['marksheet']) >= 1) {
            $data->marksheet = $row['marksheet'];
        }
        if (isset($row['aadhar']) && strlen($row['aadhar']) >= 1) {
            $data->aadhar = $row['aadhar'];
        }


        if ($_POST['step'] == '1') {

            $sql = "UPDATE applicants SET address = '" . $_POST['address'] . "', mother = '" . $_POST['mother'] . "', progress = '1' WHERE email = '" . $_SESSION['email'] . "'";
            if ($conn->query($sql)) {
                $data->progress = 1;
            } else {
                $data->progress = 0;
            }
        }

        if ($_POST['step'] == '2') {
            $sql = "UPDATE applicants SET class = '" . $_POST['class'] . "', board = '" . $_POST['board'] . "', marks = '" . $_POST['marks'] . "', tmarks = '" . $_POST['tmarks'] . "', per = '" . $_POST['per'] . "', school = '" . $_POST['school'] . "', schooladd = '" . $_POST['schooladd'] . "', progress = '2' WHERE email = '" . $_SESSION['email'] . "'";
            if ($conn->query($sql)) {
                $data->progress = 2;
            } else {
                $data->progress = 1;
            }
        }

        if ($_POST['step'] == '3') {
            if(isset($data->photo) && isset($data->marksheet) && isset($data->aadhar)) {
                $sql = "UPDATE applicants SET progress = '3' WHERE email = '" . $_SESSION['email'] . "'";
                if ($conn->query($sql)) {
                    $data->progress = 3;
                } else {
                    $data->progress = 2;
                }
            }else{
                $data->progress = 2;
            }

        }

    }
    echo json_encode($data);
}