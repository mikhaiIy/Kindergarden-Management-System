<?php include 'dbconnect.php';
 $acc_ID = $_SESSION['acc_ID'];
?>
<?php include 'headerparent.php' ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php">
                <div class="sidebar-brand-icon "><img src="img/lLogo.png" style="width: 30px; height: 50px;"></div>
                <div class="sidebar-brand-text mx-1"><img src="img/rLogo.png" style="width: 70px; height: 50px;"></div>

            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link active" href="parent_main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>

                <li class="nav-item"><a class="nav-link" href="parent_attendance.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
<!--                <li class="nav-item"><a class="nav-link" href="parent_assessment.php"><i class="far fa-user-circle"></i><span>Assessment</span></a></li>-->
                <li class="nav-item"><a class="nav-link" href="financial(Parent).php"><i class="fas fa-user-circle"></i><span>Payment</span></a></li>
                <li class="nav-item"><a class="nav-link" href="student_register.php"><i class="fas fa-user-circle"></i><span>Register child</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
<!--                    <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">-->
<!--                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>-->
<!--                    </form>-->
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                    <span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo  $_SESSION['firstName']. "   " .$_SESSION['lastName'] ?></span>
                                    <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                    <a class="dropdown-item" href="parent_profile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
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
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0"> <?php echo "Welcome back,  " .$_SESSION['firstName']. "   " .$_SESSION['lastName']; ?></h3>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-start-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <?php
                                        $sqlstudent = mysqli_query($con, "SELECT * FROM student WHERE acc_ID = '$acc_ID'");
                                        $totals = mysqli_fetch_array($sqlstudent);
                                        $counts = mysqli_num_rows($sqlstudent);
                                        ?>
                                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Student </span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span> <?php echo $counts ?> Student(s)</span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <?php
                                        $sql= "SELECT SUM(fee_Outstanding) AS outs FROM student_fee 
                                                    JOIN student s on student_fee.s_ID = s.s_ID
                                                    JOIN parent p on s.acc_ID = p.acc_ID
                                                    WHERE p.acc_ID = '$acc_ID '";
                                        $result = mysqli_query($con, $sql);
                                        $outs = mysqli_fetch_array($result);
                                        ?>
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Total Outstanding</span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span><?php echo "RM "; echo $outs['outs']?></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-start-info py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <?php
                                        $sqlp = "SELECT SUM(fee_Debit) AS debit,SUM(fee_Credit) AS credit FROM student_fee JOIN student s on s.s_ID = student_fee.s_ID WHERE acc_ID='$acc_ID'";
                                        $resultp = mysqli_query($con, $sqlp);
                                        $rowp = mysqli_fetch_array($resultp);
                                        $paymentProgress = ($rowp['credit']/$rowp['debit'])*100;
                                        $paymentProgress = number_format((float)$paymentProgress,0,'.','');
                                        //                                                echo "Debit: " .$rowp['debit'];
                                        //                                                echo "Credit: " .$rowp['credit'];

                                        ?>
                                        <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Payment Progress</span></div>
                                        <div class="row g-0 align-items-center">
                                            <div class="col-auto">
                                                <div class="text-dark fw-bold h5 mb-0 me-3"><span><?php echo $paymentProgress;?>%</span></div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-info" aria-valuenow="<?php echo $paymentProgress;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $paymentProgress;?>%"><span class="visually-hidden">50%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $sqls = "SELECT * FROM student_fee_pdf JOIN student_fee sf on sf.fee_ID = student_fee_pdf.fee_ID JOIN student s on s.s_ID = sf.s_ID WHERE acc_ID='$acc_ID' AND fee_PaymentStatus=0";
                    $results = mysqli_query($con, $sqls);
                    $rows = mysqli_fetch_array($results);
                    $countpending = mysqli_num_rows($results);

                    ?>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-start-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>Payment Status</span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span><?php echo $countpending; ?> Pending</span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Announcement Parent-->
                    <div class="row">

                        <h3>Parent</h3>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <div class="card shadow mb-4">
                                <div id="carouselP" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * from announcement WHERE announce_Type=1 AND ( announce_Category=0  OR announce_Category=2) ORDER BY announce_Time DESC Limit 3");

                                    ?>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <?php $row=mysqli_fetch_array($sql);?>
                                            <img src="img/announcement/<?php echo $row['announce_Media']?>" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5><?php echo $row['announce_Title']?></h5>
                                                <p><?php echo $row['announce_Desc']?></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <?php $row=mysqli_fetch_array($sql);?>
                                            <img src="img/announcement/<?php echo $row['announce_Media']?>" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5><?php echo $row['announce_Title']?></h5>
                                                <p><?php echo $row['announce_Desc']?></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <?php $row=mysqli_fetch_array($sql);?>
                                            <img src="img/announcement/<?php echo $row['announce_Media']?>" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5><?php echo $row['announce_Title']?></h5>
                                                <p><?php echo $row['announce_Desc']?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselP" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselP" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <!--TO DO LIST-->



                            <script type="text/javascript" src="app.js"></script>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <!-- Playgroup -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Playgroup this friday</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div>
                                        <?php
                                        $sql = "SELECT * from announcement WHERE announce_Type=2 ORDER BY aLIMIT 1";

                                        ?>
                                        <div class="row">
                                            <div id="carouselPlaygroupP" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="img/p1.jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Activity -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Activity</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div>
                                        <div class="row">
                                            <div id="carouselActivityP" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="img/a1.jpg" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="img/a2.jpg" alt="Second slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselActivityP" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselActivityP" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php include 'footersecond.php' ?>
    </div>
</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme.js"></script>
    <script>
        window.onload = function()
        {
            var error = "<?php echo $_GET['error']; ?>";
            if(error)
            {
                alert(error);
            }
        }
        document.writeln()
    </script>
</body>



