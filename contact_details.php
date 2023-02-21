
<?php include('conn.php')?>
<h2> Welcome <?php echo $_SESSION['user']?><span style="font-size:15px"><i>(Admin)</i></span></h2>
<br>
<h3><i>Members information</i></h3>
<?php
$res=mysqli_query($conn, "SELECT * FROM contact_us");
if(mysqli_num_rows($res) > 0)
{
  echo'<table border=1>
 <tr>
  <th>NAME</th>
        <th>EMAIL</th>
  <th>SUBJECT</th>
        <th>MESSAGE</th>
        
    </tr>';
    while($r = mysqli_fetch_array($res))
 {
    echo '<tr>
        <td>'.$r["name"].'</td>
        <td>'.$r["email"].'</td>
        <td>'.$r["subject"].'</td>
        <td>'.$r["message"].'</td>
        
    </tr>';
    }
    echo '</table>
    <a href="logout.php">Logout</a>';
}


?>