<?php include('../config/config.php'); ?>
<?php include('../lib/database.php'); ?>
<?php include('../helpers/format.php'); ?>
<?php $db = new database();?>
<?php $fm = new format();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog. - <?php echo htmlspecialchars($title); ?> </title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <!-- custom css -->
    <link rel="stylesheet" href="../style/style.css">
    <!-- nav bar -->
    <nav id="header">
        <div class="logo">
            <h1>Afghan Blog</h1>
        </div>
        <div class="item-list" id="menu">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
            </ul>
        </div>
        <div class="humber-btn" id="humber-btn">
            <a href="javascript:void(0)">
                <i class='bx bx-bar-chart'></i>
            </a>
        </div>
    </nav>
</head>

<body>