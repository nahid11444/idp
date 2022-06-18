<!DOCTYPE html>
<html lang="en">
<head>
    <title>Publish Firing Result</title>
    <link href="result.css" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head> 
<?php
    
    $dbname = 'idp';
    $dbuser = 'root';  
    $dbpass = ''; 
    $dbhost = 'localhost';

    $mysqli = new mysqli($dbhost, $dbuser,
    $dbpass, $dbname);

    // Checking for connections
    if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
    }


    $sql = "SELECT * FROM `hitcount`" ;
    $result = $mysqli->query($sql);
    $mysqli->close();

    
?> 
<form action="user_view.php">    
<div class="container">
<center><u><h1>Firing Result Publish By Admin</h1></u></center>
  <table class="responsive-table">
    
    <thead>
      <tr>
        <th scope="col">Date</th>
        <th scope="col">No</th>
        <th scope="col">Rank</th>
        <th scope="col">Name</th>
        <th scope="col">Unit</th>
        <th scope="col">Total_fired</th>
        <th scope="col">Total_hit</th>
      </tr>
    </thead>
    <?php
        // LOOP TILL END OF DATA
        while($rows=$result->fetch_assoc())
        {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['Date'];?></td>
                <td><?php echo $rows['No'];?></td>
                <td><?php echo $rows['Rank'];?></td>
                <td><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['Unit'];?></td>
                <td><?php echo $rows['Total_fired'];?></td>
                <td><?php echo $rows['Total_hit'];?></td>
            </tr>
            <?php
                }
            ?>
  </table>
</div>
<div class="container">
  <a href="user_view.php"> <button style="border: 2px solid red;" type="submit">Publish</button></a>
  <?php
    // $Date= $_POST['Date'];
    // $No= $_POST['No'];
    // $Rank= $_POST['Rank'];
    // $Name= $_POST['Name'];
    // $Unit= $_POST['Name'];
    // $Total_fired= $_POST['Total_fired'];
    // $Total_hit= $_POST['Total_hit'];

    $Date = copy('admin_result_reg.php', 'user_view.php');
    $No = copy('admin_result_reg.php', 'user_view.php');
    $Rank = copy('admin_result_reg.php', 'user_view.php');
    $Name = copy('admin_result_reg.php', 'user_view.php');
    $Unit= copy('admin_result_reg.php', 'user_view.php');
    $Total_fired = copy('admin_result_reg.php', 'user_view.php');
    $Total_hit= copy('admin_result_reg.php', 'user_view.php');
  ?>
</div>
</form>
</body>
</html>