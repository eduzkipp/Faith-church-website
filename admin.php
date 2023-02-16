
<?php include('conn.php')?>
<h2> Welcome <?php echo $_SESSION['user']?><span style="font-size:15px"><i>(Admin)</i></span></h2>
<br>
<h3><i>Members information</i></h3>
<?php
$res=mysqli_query($conn, "SELECT * FROM members_details");
if(mysqli_num_rows($res) > 0)
{
  echo'<table border=1>
 <tr>
  <th>First name</th>
        <th>Last name</th>
  <th>Address</th>
        <th>Phone</th>
        <th>Age</th>
    </tr>';
    while($r = mysqli_fetch_array($res))
 {
    echo '<tr>
        <td>'.$r["first_name"].'</td>
        <td>'.$r["last_name"].'</td>
        <td>'.$r["address"].'</td>
        <td>'.$r["phone"].'</td>
        <td>' .$r["age"].'</td>
    </tr>';
    }
    echo '</table>
    <a href="logout.php">Logout</a>';
}


?>