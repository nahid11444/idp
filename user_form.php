<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>VKHS - Virtual Kill house System</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">VKHS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">9 Sig Bn </span>has completed Kill House Fire
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Unit Authority </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="login.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                                <div id="submenu-1" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_db.html">User</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Notice Board</a>
                                <div id="submenu-2" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_nb.html">Published Notice <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_comp.html">Compose New Notice</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Formation</a>
                                <div id="submenu-3" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_unit.html">Unit List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Firing Result</a>
                                <div id="submenu-4" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_reg.php">Result Register</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_stat.html">Result Satictis</a>
                                        </li>
                                        </ul>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Firing Form</a>
                                <div id="submenu-5" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_form.php">Form Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Virtual Kill House System</h2>
                                <!-- <div>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Result</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Kill House Firing Result Register</li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <div class="main-content container-fluid p-0" class="col-lg-6">
                                        <div class="email-search">
                                            <div class="input-group input-search">
                                                <input class="form-control" type="text" placeholder="Search in Result Register..."><span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button></span>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "vkhs_ver3";

                         // create a connection
                        $conn = mysqli_connect($servername, $username, $password, $database);
                        $d = getdate();
                        // echo var_dump($d);
                        echo '<div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Date</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">'.$d["year"].'-'.$d["mon"].'-'. $d["mday"]. ' '. (($d["hours"]+4)%24). ':'. $d["minutes"].':'.$d["seconds"]  .'</li>
                                </ol>
                            </nav>
                        </div>';
                        $first_s_prac = 10;
                        $second_s_prac = 15;
                        $third_s_prac = 16;
                        $fourth_s_prac = 17;
                        $fifth_s_prac = 12;
                        $sixth_s_prac = 20;
                        $first_s_hit = 9;
                        $second_s_hit = 12;
                        $third_s_hit = 9;
                        $fourth_s_hit = 12;
                        $fifth_s_hit = 11;
                        $sixth_s_hit = 18;
                        $firing_officer = "";
                        $first_s_id = NULL;
                        $second_s_id = NULL;
                        $third_s_id = NULL;
                        $fourth_s_id = NULL;
                        $fifth_s_id = NULL;
                        $sixth_s_id = NULL;

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                            $firing_officer = $_POST['firing_officer'];
                            $first_s_id = $_POST['first_s_id'];
                            $second_s_id = $_POST['second_s_id'];
                            $third_s_id = $_POST['third_s_id'];
                            $fourth_s_id = $_POST['fourth_s_id'];
                            $fifth_s_id = $_POST['fifth_s_id'];
                            $sixth_s_id = $_POST['sixth_s_id'];
                            if($first_s_id <> NULL && $second_s_id <> NULL && $third_s_id <> NULL && $fourth_s_id <> NULL &&  $fifth_s_id <> NULL && $sixth_s_id <> NULL && $firing_officer <> NULL) {
                                $sql = "INSERT INTO `killing_house` (`datetime`, `firing_officer`, `first_s_id`, `second_s_id`, `third_s_id`, `fourth_s_id`, `fifth_s_id`, `sixth_s_id`, `first_s_prac`, `second_s_prac`, `third_s_prac`, `fourth_s_prac`, `fifth_s_prac`, `sixth_s_prac`, `first_s_hit`, `second_s_hit`, `third_s_hit`, `fourth_s_hit`, `fifth_s_hit`, `sixth_s_hit`) VALUES (current_timestamp(), '$firing_officer', '$first_s_id', '$second_s_id', '$third_s_id', '$fourth_s_id', '$fifth_s_id', '$sixth_s_id', '$first_s_prac', '$second_s_prac', '$third_s_prac', '$fourth_s_prac', '$fifth_s_prac', '$sixth_s_prac', '$first_s_hit', '$second_s_hit', '$third_s_hit', '$fourth_s_hit', '$fifth_s_hit', '$sixth_s_hit');";
                                $result = mysqli_query($conn, $sql);

                                
                                $sql =  "SELECT * FROM `soldiers` WHERE `soldier_id` = '$first_s_id'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                if(mysqli_num_rows($result)>=1) {
                                    $first_s_prac += $row["total_practice"];
                                    $first_s_hit += $row["total_hit"];
                                    $sql = "UPDATE `soldiers` SET `total_practice` = '$first_s_prac', `total_hit` = '$first_s_hit' WHERE `soldiers`.`soldier_id` = '$first_s_id';";
                                    $result = mysqli_query($conn, $sql);

                                    $sql =  "SELECT * FROM `soldiers` WHERE `soldier_id` = '$second_s_id'";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $second_s_prac += $row["total_practice"];
                                    $second_s_hit += $row["total_hit"];
                                    $sql = "UPDATE `soldiers` SET `total_practice` = '$second_s_prac', `total_hit` = '$second_s_hit' WHERE `soldiers`.`soldier_id` = '$second_s_id';";
                                    $result = mysqli_query($conn, $sql);

                                    $sql =  "SELECT * FROM `soldiers` WHERE `soldier_id` = '$third_s_id'";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $third_s_prac += $row["total_practice"];
                                    $third_s_hit += $row["total_hit"];
                                    $sql = "UPDATE `soldiers` SET `total_practice` = '$third_s_prac', `total_hit` = '$third_s_hit' WHERE `soldiers`.`soldier_id` = '$third_s_id';";
                                    $result = mysqli_query($conn, $sql);

                                    $sql =  "SELECT * FROM `soldiers` WHERE `soldier_id` = '$fourth_s_id'";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $fourth_s_prac += $row["total_practice"];
                                    $fourth_s_hit += $row["total_hit"];
                                    $sql = "UPDATE `soldiers` SET `total_practice` = '$fourth_s_prac', `total_hit` = '$fourth_s_hit' WHERE `soldiers`.`soldier_id` = '$fourth_s_id';";
                                    $result = mysqli_query($conn, $sql);

                                    $sql =  "SELECT * FROM `soldiers` WHERE `soldier_id` = '$fifth_s_id'";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $fifth_s_prac += $row["total_practice"];
                                    $fifth_s_hit += $row["total_hit"];
                                    $sql = "UPDATE `soldiers` SET `total_practice` = '$fifth_s_prac', `total_hit` = '$fifth_s_hit' WHERE `soldiers`.`soldier_id` = '$fifth_s_id';";
                                    $result = mysqli_query($conn, $sql);

                                    $sql =  "SELECT * FROM `soldiers` WHERE `soldier_id` = '$sixth_s_id'";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $sixth_s_prac += $row["total_practice"];
                                    $sixth_s_hit += $row["total_hit"];
                                    $sql = "UPDATE `soldiers` SET `total_practice` = '$sixth_s_prac', `total_hit` = '$sixth_s_hit' WHERE `soldiers`.`soldier_id` = '$sixth_s_id';";
                                    $result = mysqli_query($conn, $sql);
                                }
                            }

                    //         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    //     <strong>Success!</strong>  Your email ' . $email . ' and name ' . $name . ' has been submitted successfully!
                    //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    //   </div>';       
                        }
                        // echo "hello";
                        echo '<form action = "/VKHS/user_form.php" method = "post" required">
                            <div class="mb-3">
                                <label for="firing_officer" class="form-label">Firing Officer ID</label>
                                <input type="text" class="form-control" id="firing_officer" aria-describedby="emailHelp" name = "firing_officer" >
                            </div>
                            <!-- <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name = "email">
                                
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Description</label>
                                <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button> -->
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Pers No</th>
                                    <th>Prac</th>
                                    <th>Hit</th>
                                    <th>Missed</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="Pers No">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="first_s_id" aria-describedby="emailHelp" name = "first_s_id">
                                            </div>
                                        </td>
                                        <!-- <td data-label="Unit">14 EB</td> -->
                                        <!-- <td data-label="Name">Lt Hasan</td> -->
                                        <td data-label="Prac">'.$first_s_prac.'</td>
                                        <td data-label="Hit">'.$first_s_hit.'</td>
                                        <td data-label="Missed">'.($first_s_prac - $first_s_hit).'</td>
                                    </tr>
                        
                                    <tr>
                                        <td data-label="Pers No">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="second_s_id" aria-describedby="emailHelp" name = "second_s_id">
                                            </div>
                                        </td>
                                        <!-- <td data-label="Unit">4 BIR</td> -->
                                        <!-- <td data-label="Name">Lt Anidro</td> -->
                                        <td data-label="Prac">'.$second_s_prac.'</td>
                                        <td data-label="Hit">'.$second_s_hit.'</td>
                                        <td data-label="Missed">'.($second_s_prac - $second_s_hit).'</td>
                                    </tr>
                        
                                    <tr>
                                        <td data-label="Pers No">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="third_s_id" aria-describedby="emailHelp" name = "third_s_id">
                                            </div>
                                        </td>
                                        <!-- <td data-label="Unit">9 Sigs</td> -->
                                        <!-- <td data-label="Name">Lt Sabit</td> -->
                                        <td data-label="Prac">'.$third_s_prac.'</td>
                                        <td data-label="Hit">'.$third_s_hit.'</td>
                                        <td data-label="Missed">'.($third_s_prac - $third_s_hit).'</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Pers No">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="fourth_s_id" aria-describedby="emailHelp" name = "fourth_s_id">
                                            </div>
                                        </td>
                                        <!-- <td data-label="Unit">14 EB</td> -->
                                        <!-- <td data-label="Name">Lt Hasan</td> -->
                                        <td data-label="Prac">'.$fourth_s_prac.'</td>
                                        <td data-label="Hit">'.$fourth_s_hit.'</td>
                                    <td data-label="Missed">'.($fourth_s_prac - $fourth_s_hit).'</td>
                                </tr>
                    
                                <tr>
                                    <td data-label="Pers No">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="fifth_s_id" aria-describedby="emailHelp" name = "fifth_s_id">
                                        </div>
                                    </td>
                                    <!-- <td data-label="Unit">4 BIR</td> -->
                                    <!-- <td data-label="Name">Lt Anidro</td> -->
                                    <td data-label="Prac">'.$fifth_s_prac.'</td>
                                    <td data-label="Hit">'.$fifth_s_hit.'</td>
                                    <td data-label="Missed">'.($fifth_s_prac - $fifth_s_hit).'</td>
                                </tr>
                    
                                <tr>
                                    <td data-label="Pers No">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="sixth_s_id" aria-describedby="emailHelp" name = "sixth_s_id">
                                        </div>
                                    </td>
                                    <!-- <td data-label="Unit">9 Sigs</td> -->
                                    <!-- <td data-label="Name">Lt Sabit</td> -->
                                    <td data-label="Prac">'.$sixth_s_prac.'</td>
                                    <td data-label="Hit">'.$sixth_s_hit.'</td>
                                    <td data-label="Missed">'.($sixth_s_prac - $sixth_s_hit).'</td>
                                </tr>
                                
                                </tbody>
                                
                            </table>
                            <button type="submit" class="btn btn-primary">Publish</button>
                        </form>';
                        
                    ?>
                    
                               
                                <!-- ============================================================== -->
                                <!-- Result Table -->
                                <!-- ============================================================== -->
                                
                                <!-- <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Firing Officer</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Maj Asif, 14 EB</li>
                                        </ol>
                                    </nav>
                                </div> -->

                                <!-- <table class="table">
                                    <thead>
                                        <tr>
                                        <th>Pers No</th>
                                        <th>Unit</th>
                                        <th>Name</th>
                                        <th>Prac</th>
                                        <th>Hit</th>
                                        <th>Missed</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                <td data-label="Pers No">BA-10964</td>
                                                <td data-label="Unit">14 EB</td>
                                                <td data-label="Name">Lt Hasan</td>
                                                <td data-label="Prac">50</td>
                                                <td data-label="Hit">46</td>
                                            <td data-label="Missed">4</td>
                                        </tr>
                            
                                        <tr>
                                            <td data-label="Pers No">BA-10888</td>
                                            <td data-label="Unit">4 BIR</td>
                                            <td data-label="Name">Lt Anidro</td>
                                            <td data-label="Prac">50</td>
                                            <td data-label="Hit">40</td>
                                            <td data-label="Missed">10</td>
                                        </tr>
                            
                                        <tr>
                                            <td data-label="Pers No">BA-10985</td>
                                            <td data-label="Unit">9 Sigs</td>
                                            <td data-label="Name">Lt Sabit</td>
                                            <td data-label="Prac">50</td>
                                            <td data-label="Hit">35</td>
                                            <td data-label="Missed">15</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Pers No">BA-10964</td>
                                            <td data-label="Unit">14 EB</td>
                                            <td data-label="Name">Lt Hasan</td>
                                            <td data-label="Prac">50</td>
                                            <td data-label="Hit">46</td>
                                        <td data-label="Missed">4</td>
                                    </tr>
                        
                                    <tr>
                                        <td data-label="Pers No">BA-10888</td>
                                        <td data-label="Unit">4 BIR</td>
                                        <td data-label="Name">Lt Anidro</td>
                                        <td data-label="Prac">50</td>
                                        <td data-label="Hit">40</td>
                                        <td data-label="Missed">10</td>
                                    </tr>
                        
                                    <tr>
                                        <td data-label="Pers No">BA-10985</td>
                                        <td data-label="Unit">9 Sigs</td>
                                        <td data-label="Name">Lt Sabit</td>
                                        <td data-label="Prac">50</td>
                                        <td data-label="Hit">35</td>
                                        <td data-label="Missed">15</td>
                                    </tr>
                                    
                                    </tbody>
                                    
                                </table> -->

                                <div class="page-breadcrumb"><nav aria-label="breadcrumb"><ol class="breadcrumb"></ol></nav></div>
                                <!-- ============================================================== -->
                                <!-- end Result Table -->
                                <!-- ============================================================== -->

                                

                                <!-- ============================================================== -->
                                <!-- Result Table -->
                                <!-- ============================================================== -->

                                <!-- <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Date</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">12 MAY 2022</li>
                                        </ol>
                                    </nav>
                                </div>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Firing Officer</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Maj Noman, 4 BIR</li>
                                        </ol>
                                    </nav>
                                </div>


                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th>Pers No</th>
                                        <th>Unit</th>
                                        <th>Name</th>
                                        <th>Prac</th>
                                        <th>Hit</th>
                                        <th>Missed</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                <td data-label="Pers No">BA-10964</td>
                                                <td data-label="Unit">14 EB</td>
                                                <td data-label="Name">Lt Hasan</td>
                                                <td data-label="Prac">50</td>
                                                <td data-label="Hit">46</td>
                                            <td data-label="Missed">4</td>
                                        </tr>
                            
                                        <tr>
                                            <td data-label="Pers No">BA-10888</td>
                                            <td data-label="Unit">4 BIR</td>
                                            <td data-label="Name">Lt Anidro</td>
                                            <td data-label="Prac">50</td>
                                            <td data-label="Hit">40</td>
                                            <td data-label="Missed">10</td>
                                        </tr>
                            
                                        <tr>
                                            <td data-label="Pers No">BA-10985</td>
                                            <td data-label="Unit">9 Sigs</td>
                                            <td data-label="Name">Lt Sabit</td>
                                            <td data-label="Prac">50</td>
                                            <td data-label="Hit">35</td>
                                            <td data-label="Missed">15</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Pers No">BA-10964</td>
                                            <td data-label="Unit">14 EB</td>
                                            <td data-label="Name">Lt Hasan</td>
                                            <td data-label="Prac">50</td>
                                            <td data-label="Hit">46</td>
                                        <td data-label="Missed">4</td>
                                    </tr>
                        
                                    <tr>
                                        <td data-label="Pers No">BA-10888</td>
                                        <td data-label="Unit">4 BIR</td>
                                        <td data-label="Name">Lt Anidro</td>
                                        <td data-label="Prac">50</td>
                                        <td data-label="Hit">40</td>
                                        <td data-label="Missed">10</td>
                                    </tr>
                        
                                    <tr>
                                        <td data-label="Pers No">BA-10985</td>
                                        <td data-label="Unit">9 Sigs</td>
                                        <td data-label="Name">Lt Sabit</td>
                                        <td data-label="Prac">50</td>
                                        <td data-label="Hit">35</td>
                                        <td data-label="Missed">15</td>
                                    </tr>
                                    
                                    </tbody>
                                    
                                </table>

                                <div class="page-breadcrumb"><nav aria-label="breadcrumb"><ol class="breadcrumb"></ol></nav></div> -->
                                <!-- ============================================================== -->
                                <!-- end Result Table -->
                                <!-- ============================================================== -->
                        
                </div>
            

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <a>Copyright © IDP_gp6</a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->


        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->


    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->



    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>