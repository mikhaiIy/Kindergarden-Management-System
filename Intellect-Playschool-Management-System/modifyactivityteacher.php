<?php
    include('dbconnect.php');

    if(isset($_GET['aa_id']))
    {
        $cid = $_GET['aa_id'];
    }

    
?>
<?php include 'headerstaff.php' ?>
<link rel="stylesheet" href="assets/bootstrap/css/Articles-Cards-images.css">
<link rel="stylesheet" href="assets/sweetalert2.css">
<link rel="stylesheet" href="assets/sweetalert2.min.css">
<script src="assets/sweetalert2.all.js"></script>
<script src="assets/sweetalert2.all.min.js"></script>
<script src="assets/sweetalert2.js"></script>
<script src="assets/sweetalert2.min.js"></script>
<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php">
        <div class="sidebar-brand-icon "><img src="img/lLogo.png" style="width: 30px; height: 50px;"></div>
                    <div class="sidebar-brand-text mx-1"><img src="img/rLogo.png" style="width: 70px; height: 50px;"></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link" href="teacher_main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item"><a class="nav-link" href="teacher_attendancemenu.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
                <li class="nav-item"><a class="nav-link" href="teacher_announcement.php"><i class="far fa-user-circle"></i><span>Announcement</span></a></li>
                <li class="nav-item"><a class="nav-link active" href="teacher_activity.php"><i class="far fa-user-circle"></i><span>Activity</span></a></li>
                <li class="nav-item"><a class="nav-link" href="teacher_assessment.php"><i class="fas fa-user-circle"></i><span>Assessment</span></a></li>
                <li class="nav-item"><a class="nav-link" href="teacher_salary.php"><i class="fas fa-user-circle"></i><span>Salary</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn border-0 rounded-circle" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group"><input class="bg-light border-0 form-control form-control small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                    </form><ul class="navbar-nav flex-nowrap ms-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="me-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                        <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 12, 2019</span>
                                            <p>A new monthly report is ready to download!</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 7, 2019</span>
                                            <p>$290.29 has been deposited into your account!</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 2, 2019</span>
                                            <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                        </div>
                                    </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                            <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                            <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                            <div class="bg-warning status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                            <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                        </div>
                                    </a><a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="fw-bold">
                                            <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                            <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                        </div>
                                    </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </div>
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo  $_SESSION['firstName']. "   " .$_SESSION['lastName'] ?></span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
<!--MODIFY ANNOUNCEMENT-->
<div class="container">
    <br>
    <?php 
        $sql="SELECT * FROM announcement WHERE announce_ID='$cid'"; // KIV here
        $result = mysqli_query($con, $sql);
        $row=mysqli_fetch_array($result);
    ?>
    <form method="POST" action="modifyactivityteacherprocess.php" enctype="multipart/form-data">
        <fieldset>
            <legend class="text-cursive h5 text-red d-block" style="font-size: 35px">Modify an announcement</legend>
            <fieldset>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Content Title</label>
                    <input type="text" name=cTitle class="form-control" id="exampleFormControlInput1"
                        value="<?php echo $row['announce_Title']?>" required>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Start of event</label>
                    <input type="date" name="sdate" class="form-control" id="" value="<?php echo $row['announce_Start']?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">End of event</label>
                    <input type="date" name="edate" class="form-control" id="" value="<?php echo $row['announce_End']?>" required>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category (View)</label>
                    <?php

                        $sqlA = "SELECT * FROM announcement_category_desc";
                        $resultA = mysqli_query($con,$sqlA);

                        echo '<select class="form-select" name="ccategory" id="exampleSelect1" required>';
                        while ($rowA = mysqli_fetch_array($resultA)) {
                            if($row['announce_Category']==$rowA['announce_Category'])
                            {
                                echo "<option selected = 'selected' value = '" . $rowA['announce_Category'] . "'>" . $rowA['category_Desc'] . "</option>";
                            }
                            else
                            {
                                echo "<option value = '" . $rowA['announce_Category'] . "'>" . $rowA['category_Desc'] . "</option>";
                            }
                        }
                        echo '</select>';

                    ?>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Type</label>
                    <?php

                        $sqlB = "SELECT * FROM announcement_type_desc";
                        $resultB = mysqli_query($con,$sqlB);

                        echo '<select class="form-select" name="ctype" id="exampleSelect1" required>';
                        while ($rowB = mysqli_fetch_array($resultB)) {
                            if($row['announce_Type']==$rowB['announce_Type'])
                            {
                                echo "<option selected = 'selected' value = '" . $rowB['announce_Type'] . "'>" . $rowB['type_Desc'] . "</option>";
                            }
                            else
                            {
                                echo "<option value = '" . $rowB['announce_Type'] . "'>" . $rowB['type_Desc'] . "</option>";
                            }
                        }
                        echo '</select>';

                    ?>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="cdesc" id="exampleFormControlTextarea1" rows="3"> <?php echo $row['announce_Desc']; ?> </textarea>
                </div>
            </fieldset>
            <fieldset>
                      <br><div class="form-group">
                        <label>Select Image File:</label>
                        <input type="file" name="cmedia" id="cmedia" required>
                        <br><br>
                        <button type="reset" class="btn btn-info">Reset</button>
                        <button type="submit" name="submit" class="btn btn-info">Submit</button>
                        <input type="hidden" name="cid" value="<?php echo $row['announce_ID']?>" required>
                        <br><br><br>
                    </div>
            </fieldset>
        </fieldset>
    </form>
</div>
<script>
              function confirmDelete(aa_id) {
                Swal.fire({
                  title: 'Are you sure you want to modify?',
                  text: "",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, modify it!'
                }).then((result) => {
                  if (result.value) {
                    window.location.href = 'modifyactivityteacherprocess.php?aa_id=' + aa_id;
                  }
                });
                
            }
</script>


