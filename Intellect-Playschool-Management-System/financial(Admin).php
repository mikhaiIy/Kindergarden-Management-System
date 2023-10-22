<?php
include('dbconnect.php');
include 'modalDeleteFee.php';
include 'modalPayProcess.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Financial - Admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
<!--    <link rel="stylesheet" href="assets/css/untitled.css">-->
    <script type="text/javascript" src="assets/js/javascript.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <style>
        #bgcolor1{
            padding-top: 20px;
            background-color: whitesmoke;
        }
        #bgcolor2{
            background-color: whitesmoke;
        }
        #buttonRow{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40px;
            margin-top: 5px;
            margin-bottom: 15px;
        }
        input[type="submit"]{
            background-color: gold;
            color: darkslategrey;
            padding: 10px 15px;
            border: none;
            border-radius: 100px;
            cursor: pointer;
            font-size: 16px;
            margin: auto;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
            color: gold;
        }

        #table-wrapper {
            position:relative;
        }
        #table-scroll {
            height:auto;
            max-height: 250px;
            overflow:auto;
            margin-top:20px;
        }
        #table-wrapper table {
            width:100%;

        }
        #table-wrapper table * {
            /*background:yellow;*/
            /*color:black;*/
        }


    </style>
</head>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <!--  LEFT SIDEBAR  -->
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon "><img src="img/lLogo.png" style="width: 30px; height: 50px;"></div>
                <div class="sidebar-brand-text mx-1"><img src="img/rLogo.png" style="width: 70px; height: 50px;"></div>

            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link" href="admin_main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <!--                    <li class="nav-item"><a class="nav-link" href="admin_profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>-->
                <li class="nav-item"><a class="nav-link" href="admin_attendance.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_announcement.php"><i class="far fa-user-circle"></i><span>Announcement</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_activity.php"><i class="far fa-user-circle"></i><span>Activity</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_assessment.php"><i class="fas fa-user-circle"></i><span>Assessment</span></a></li>
                <li class="nav-item"><a class="nav-link active" href="financial(Admin)menu.php"><i class="fas fa-user-circle"></i><span>Financial</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_pending.php"><i class="fas fa-user-circle"></i><span>Pending request</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <!--  TOP BAR  -->
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <!--                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">-->
                    <!--                            <div class="input-group"><input class="bg-light border-0 form-control form-control small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>-->
                    <!--                        </form>-->
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <!--                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>-->
                        <!--                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">-->
                        <!--                                    <form class="me-auto navbar-search w-100">-->
                        <!--                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">-->
                        <!--                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>-->
                        <!--                                        </div>-->
                        <!--                                    </form>-->
                        <!--                                </div>-->
                        <!--                            </li>-->
                        <!--                            <li class="nav-item dropdown no-arrow mx-1">-->
                        <!--                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>-->
                        <!--                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">-->
                        <!--                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">-->
                        <!--                                            <div class="me-3">-->
                        <!--                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>-->
                        <!--                                            </div>-->
                        <!--                                            <div><span class="small text-gray-500">December 12, 2019</span>-->
                        <!--                                                <p>A new monthly report is ready to download!</p>-->
                        <!--                                            </div>-->
                        <!--                                        </a><a class="dropdown-item d-flex align-items-center" href="#">-->
                        <!--                                            <div class="me-3">-->
                        <!--                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>-->
                        <!--                                            </div>-->
                        <!--                                            <div><span class="small text-gray-500">December 7, 2019</span>-->
                        <!--                                                <p>$290.29 has been deposited into your account!</p>-->
                        <!--                                            </div>-->
                        <!--                                        </a><a class="dropdown-item d-flex align-items-center" href="#">-->
                        <!--                                            <div class="me-3">-->
                        <!--                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>-->
                        <!--                                            </div>-->
                        <!--                                            <div><span class="small text-gray-500">December 2, 2019</span>-->
                        <!--                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>-->
                        <!--                                            </div>-->
                        <!--                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </li>-->

                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                    <span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo  $_SESSION['firstName']. "   " .$_SESSION['lastName'] ?></span>
                                    <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                    <a class="dropdown-item" href="admin_profile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                    <!--                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>-->
                                    <!--                                    <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>-->
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
<!--                GREETINGS-->
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0"><?php echo "Hi " .$_SESSION['firstName']. "   " .$_SESSION['lastName']. "!" ?></h3>
                </div>
<!--                end GREETINGS-->
<!--                CREATE FEE-->
                <form action="financial(Admin)_createprocess.php?" method="post">
                    <div class="row" id="bgcolor1">
                        <div class="col-xl-4">
                            <!--                            PROGRAM SELECTION-->
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary fw-bold m-0">Program Selection</h6>
                                </div>
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <div class="form-group overflow-auto" style="display: flex; align-items: center;">
<!--                                        <span style="font-weight: 700;">Program:</span>-->
                                        <select id="fee_Program" name="fee_Program" class="fee_Program form-select" style="display: inline-block; margin-left: 10px; height: 40px; min-height: 40px; min-width: 300px;" required>
                                            <option hidden disabled selected value> -- select a program -- </option>
                                            <?php
                                            $sql = "SELECT * FROM academic_prog_desc";
                                            $result = mysqli_query($con, $sql);
                                            while($row = mysqli_fetch_array($result)) {
                                                echo"<option value = '".$row['acad_Prog']."'>".$row['description']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function (){
                                $(".fee_Program").change(function (){
                                    var acadProg = $(this).val();
                                    var post_Data = 'prog=' + acadProg;

                                    $.ajax({
                                        type: "POST",
                                        url: "ajaxStudentName.php",
                                        data: post_Data,
                                        cache: false,
                                        success: function (student){
                                            $(".student").html(student)
                                        }
                                    })
                                })
                            })
                        </script>
                        <div class="col-xl-5">
<!--                            STUDENT SELECTION-->
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary fw-bold m-0">Student Selection</h6>
                                </div>
                                <div class="card-body d-flex align-items-center justify-content-center ">
                                    <div class="form-group overflow-auto" style="display: flex; align-items: center;">
<!--                                        <span style="font-weight: 700;">All Student: </span>-->

                                        <select id="student" name="s_ID" class="student form-select" onchange="selectFee()" style="display: inline-block; margin-left: 10px; height: 40px; min-height: 40px; min-width: 300px;" required>
                                            <option hidden disabled selected value> -- select a program first -- </option>
                                        </select>
                                        <span style="font-weight: 1000; padding-left: 1rem;">Session: </span>
                                        <span class="student_session" style="font-weight: 1000; padding-left: 15px;"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function (){
                                $(".student").change(function (){
                                    var s_ID = $(this).val();
                                    var post_ID = 'id=' + s_ID;

                                    $.ajax({
                                        type: "POST",
                                        url: "ajaxStudentSession.php",
                                        data: post_ID,
                                        cache: false,
                                        success: function (session){
                                            $(".student_session").html(session)
                                        }
                                    })
                                })
                            })
                        </script>
                        <!--                            FEE CATEGORY SELECTION-->
                    <div class="row" id="bgcolor2">
                        <div class="col-xl-4">

                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center ">
                                    <h6 class="text-primary fw-bold m-0">Category Selection</h6>
                                </div>
                                <div class="card-body d-flex align-items-center justify-content-center ">
                                    <div class="form-group overflow-auto" style="display: flex; align-items: center;">
                                        <select id="fee_Category" name="fee_Category" class="form-select" style="display: inline-block; margin-left: 10px; height: 40px; min-height: 40px; min-width: 300px;" required>
                                            <option hidden disabled selected value> -- select an option -- </option>
                                            <?php
                                            $sql = "SELECT * FROM student_fee_category_desc";
                                            $result = mysqli_query($con, $sql);
                                            while($row = mysqli_fetch_array($result)) {
                                                echo"<option value = '".$row['fee_Category']."'>".$row['fee_CategoryDesc']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-4">

                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center ">
                                    <h6 class="text-primary fw-bold m-0">Fee Due Date</h6>
                                </div>
                                <div class="card-body d-flex align-items-center justify-content-center ">
                                    <div class="form-group overflow-auto" style="display: flex; align-items: center;">
                                        <input type="date" name="feeDue" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                        FEE DUE-->
                        <div class="row" id="bgcolor2">

                        </div>
<!--                        END FEE DUE-->
<!--                    --><?php
//                    $sql = "SELECT * FROM student_fee
//                        LEFT JOIN student_session_desc ON student_fee.fee_Session = student_session_desc.prog_Session
//                        LEFT JOIN student_fee_status_desc ON student_fee.fee_Status = student_fee_status_desc.fee_Status
//                        LEFT JOIN academic_prog_desc ON student_fee.fee_Program = academic_prog_desc.acad_Prog
//                        LEFT JOIN student_fee_category_desc ON student_fee.fee_Category = student_fee_category_desc.fee_Category
//                        LEFT JOIN student ON student_fee.s_ID = student.s_ID";
//                    $query = mysqli_query($con,$sql);
//                    $data=mysqli_fetch_array($query);
//                    $create="financial(Admin)_create.php?s_ID=".$data['s_ID'];
//                    ?>

                        <div id="buttonRow" >
                            <input type="submit" style="text-align: center;" value="Create Fee">
                        </div>
                    </div>
                </form>
                <!--end CREATE FEES-->
                <!--CREATED FEES-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary fw-bold m-0">Created Fees</h6>

                                <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                                        <p class="text-center dropdown-header">filter:</p>
                                        <label for="allfee" style="padding-left: 10px; padding-right:7px">All Student</label><input type="radio" name="feefilter" onchange="selectAllFee()"><br>
                                        <label for="overduefee" style="padding-left: 10px; padding-right:7px">Overdue Only</label><input type="radio" name="feefilter" onchange="selectOverdueFee()"><br>
                                        <label for="completedfee" style="padding-left: 10px; padding-right:7px">Completed Only</label><input type="radio" name="feefilter" onchange="selectCompletedFee()"><br>
                                        <label for="duefee" style="padding-left: 10px; padding-right:7px">Due Only</label><input type="radio" name="feefilter" onchange="selectDueFee()"><br>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div id="table-wrapper">
                                <div id="table-scroll" >
                                    <table class="table table-hover" >
                                        <thead style="text-align: left; text-justify: auto;">
                                        <tr >
                                            <th>No.</th>
                                            <th>Year</th>
                                            <th>Category</th>
                                            <th>Fee Due</th>
<!--                                            <th>Class <br> Session</th>-->
                                            <th>Status</th>
                                            <th>Debit (RM)</th>
                                            <th>Credit (RM)</th>
                                            <th>Outstanding (RM)</th>
                                            <th>Payment History</th>
                                            <th>Operation</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tableStudentFee" style="text-align: left; ">


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end CREATED FEE -->
<!--                PAYMENT HISTORY-->
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="text-primary fw-bold m-0">Payment History</h6>
                            </div>
                            <div class="card-body">
                                <div style="overflow-x:auto;">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Reference No.</th>
                                            <th>Amount (RM)</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th>Slip</th>
                                            <th>Operation</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tableStudentPayment">

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end PAYMENT HISTORY-->
            </div>
        </div>

        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/theme.js"></script>
</body>
</body>

</html>