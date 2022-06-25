<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Publish Firing Result</title>
    <link href="result.css" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css'>
    <link rel="stylesheet" href="style2.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="demo.css">
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
<div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand">
         <a href="#">Brand</a></div></div>
       <li><a href="#home">Home</a></li>
       <li><a href="#about">About</a></li>
       <li><a href="#events">Events</a></li>
       <li><a href="#team">Team</a></li>
       <li class="dropdown">
       <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Works <span class="caret"></span></a>
     <ul class="dropdown-menu animated fadeInLeft" role="menu">
      <div class="dropdown-header">Dropdown heading</div>
      <li><a href="#pictures">Pictures</a></li>
      <li><a href="#videos">Videeos</a></li>
      <li><a href="#books">Books</a></li>
      <li><a href="#art">Art</a></li>
      <li><a href="#awards">Awards</a></li>
      </ul>
      </li>
      <li><a href="#services">Services</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#followme">Follow me</a></li>
      </ul>
  </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2" style="margin: auto; background: #fff">
                        
            <header class="intro">
            <h1> Bootstrap Sidebar Menu with Submenu Example </h1>
            <p> A fancy toggle sidebar navigation created with Bootstrap.</p>
            <div class="action">
            <a href="https://www.codehim.com/bootstrap/bootstrap-navbars/bootstrap-sidebar-menu-with-submenu/" title="Back to download and tutorial page" class="btn back">Back to Tutorial</a>
            
            </div>
           </div>
          </div>
          </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
<!-- partial -->


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
</form>
</body>
</html>