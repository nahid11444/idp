

<html  xml:lang="en" lang="en">

<head>
<title>Virtual Kill House</title>
<meta http-equiv="content-language" content="en-us" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="author" content="Sabit Haque" />
<link rel="stylesheet" type="text/css" media="screen,projection" href="master.css" />
<!--[if lt ie 7]><link rel="stylesheet" type="text/css" media="screen,projection" href="ie-win.css" /><![endif]-->
<link rel="start" title="Virtual Kill House" href="#" />
<link rel="stylesheet" href="styles.css">
<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/f5b477e1ab.js" crossorigin="anonymous"></script>
</head>


<body>

  <div id="header">
    <h1><a href="index.html"><i class="fa fa-person-military-rifle"></i> Virtual Kill House System</a></h1>
  </div>


<div class="bg-img">
  <form action="login.php" class="regform" method="post">

    <div>
      <h1>LOGIN</h1>
    </div>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "vkhs_ver3";

      // create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);

      $uname = NULL;
      $psw = NULL;
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $uname = $_POST['uname'];
          $psw = $_POST['psw'];
          function validate($data){

            $data = trim($data);
     
            $data = stripslashes($data);
     
            $data = htmlspecialchars($data);
     
            return $data;
     
          }
          $uname = validate($uname);
          $psw = validate($psw);
          if($uname <> NULL && $psw <> NULL) {
            $sql =  "SELECT * FROM `users` WHERE `username` = '$uname'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)) {
              $row = mysqli_fetch_assoc($result);
              if($row["password"] == $psw) {
                if($row["designation"] == "adm") {
                  header("Location: admin_db.html");
                }
                else {
                  header("Location: user_db.html");
                }
              }
              else {
                echo '<p style = "color: red">&emsp;Wrong Password</p>';
              }
            }
            else {
              echo '<p style = "color: red">&emsp;Username not found</p>';
            }
          }
          else {
            echo '<p style = "color: red">&emsp;Username not found</p>';
          }
      }
    ?>
    
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
  
      <!-- <a href="admin_db.html"><button type="submit">Login</button></a> -->
      <button type="submit">Login</button>
      <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label> -->
    </div>
  
    <!-- <div class="container">
      <a href="index.html"><button type="button" class="cancelbtn">Cancel</button></a>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div> -->

    <!-- <div class="container signin">
      <p>Not an Admin? <a href="user_in.html">User Login</a>.</p>
    </div> -->

  </form>
</div>
  
</body>
</html>
