<?php include('conn.php')?>
<?php
if (isset($_POST["submit"])) {
    $username = $_POST["un"];
    $password = $_POST["psw"];
    $res=mysqli_query($conn, "SELECT * FROM users where username='$username' AND password='$password'");
    $row = mysqli_fetch_assoc($res);

         if(($row['username'] == $username)) {
            $_SESSION['user']=$row['username'];
                header("location: admin.html");
        }
        else if(($username == '') && ($password == '')) {
            echo "<script language='javascript'>";
            echo "alert('Invalid Inputs')";
            echo "</script>";
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
    
?>