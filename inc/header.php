<?php include('../config/config.php'); ?>
<?php include('../lib/database.php'); ?>
<?php include('../helpers/format.php'); ?>
<?php  $db = new database();?>
<?php $fm = new format();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog. - <?php echo htmlspecialchars($title); ?> </title>
    <!-- icons -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- google fonts, only for logo -->
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="../style/style.css">

</head>

<body>
    <!-- header -->
    <nav id="header">
        <span class="logo">
            <a href="javascript:void(0)" onclick="OpenNew();"> Afghan Blog</a>
        </span>
        <div class="menu" id="menu">
            <ul>
                <li><a href="javascript:void(0)" onclick="OpenHome();">Home</a></li>
                <li><a href="javascript:void(0)" onclick="All_post();">Posts</a></li>
                <li><a href="javascript:void(0)">About</a></li>
                <li><a href="javascript:void(0)">Contact</a></li>
            </ul>
        </div>
       
        <i id="burger" class="fas fa-bars"></i>
    </nav>