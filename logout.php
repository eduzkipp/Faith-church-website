<?php include('conn.php')?>
<h2>Welcome <?php echo $_SESSION['user'] ?> <span style="font-size:15px"><i>(user)</i></span></h2>
<a href="logout.php">Logout</a>
logout.php
<?php
session_start();
session_unset();
session_destroy();
header("Location: index.html");
?>