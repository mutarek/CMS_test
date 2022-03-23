<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .blog{
            height:auto;
            width: 300px;
            padding: 10px;
            box-shadow:2px 2px 5px 0px grey;
            margin: 10px;
        }
        .blog img{
            height:200px;
            width: 300px;
            border-radius: 15px;
        }
    </style>
</head>
<body>
<div class="grid">


<div class="header">
  <a href="http://localhost/cms/" class="logo">CompanyLogo</a>
</div>
<div class="menu">
    <div>
        <?php
        $username = $_SESSION['username'];
        ?>
        <p><?php echo "Hey!<br>"."<strong>$username</strong><br>"."Good Evening"; ?></p>
    </div>
<ul class="menubar">
    <a href="addpost.php">
    <li>Add Post</li>
    </a>
    <a href="">
    <li>Add User</li>
    </a>
    <a href="">
    <li>Category</li>
    </a>
    <a href="adminlogout.php">
    <li>Logout</li>
    </a>
</ul>
</div>