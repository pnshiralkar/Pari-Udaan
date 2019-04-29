<?php
session_start();
if (!file_exists("documents/" . $_SESSION['email'])) {
    mkdir("documents/" . $_SESSION['email']);
}
$target_dir = "documents/" . $_SESSION['email'] . "/";
$name = $_POST['pic_name'];
$imageFileType = "." . strtolower(pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION));
$target_file = $target_dir . basename($name) . $imageFileType;
$uploadOk = 1;
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;

        require ("connect.php");
        $sql = "SELECT * FROM applicants WHERE email = '" . $_SESSION['email'] . "'";
        $row = $conn->query($sql)->fetch_assoc();
        if(isset($row[$name]))
        {
            unlink($target_dir . $row[$name]);
        }
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            $sql = "UPDATE applicants SET " . $name . " = '" . basename($name) . $imageFileType . "' WHERE email = '" . $_SESSION['email'] . "'";
            if ($conn->query($sql)) {

                header("Location: form.php");
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}