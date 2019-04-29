<?php


require ("connect.php");
$sql = "SELECT * FROM applicants WHERE progress = '3' ORDER BY per DESC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        html{
            scroll-behavior: smooth;
        }

    </style>
</head>
<body>

<br><br><br><br><br>
<table>
    <tr><th>Rank</th><th>Name</th><th>Percentage</th><th>Photo</th><th>Marksheet</th><th>Aadhar</th></tr>
    <?php
    $i=1;
    while($row = $result->fetch_assoc())
    {
        ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['per']; ?></td>
        <td><a href="<?php echo $row['photo']; ?>">View Photo</a></td>
        <td><a href="<?php echo $row['marksheet']; ?>">View Marksheet</a></td>
        <td><a href="<?php echo $row['aadhar']; ?>">View Aadhar</a></td>
    </tr>
    <?php
        $i++;
    }
    ?>

</table>

</body>
</html>