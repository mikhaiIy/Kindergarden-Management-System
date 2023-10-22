
<?php
include ('dbconnect.php');
include 'headerstaff.php';

if(isset($_GET['id']))
{
	$aid = $_GET['id'];
}


?>


<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>

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
                <li class="nav-item"><a class="nav-link" href="teacher_profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>
                <li class="nav-item"><a class="nav-link" href="teacher_attendancemenu.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
                <li class="nav-item"><a class="nav-link active" href="teacher_assessment.php"><i class="fas fa-user-circle"></i><span>Assessment</span></a></li>
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

                    </form><ul class="navbar-nav flex-nowrap ms-auto">


                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                    <span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo  $_SESSION['firstName']. "   " .$_SESSION['lastName'] ?></span>
                                    <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                    <a class="dropdown-item" href="teacher_profile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                    <!--                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>-->
                                    <!--                                    <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>-->
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                        </li>
                    </ul>
                </div>

            </nav>
            
            <div class="container-fluid">
  <div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0">Academic</h3>    
  </div>
  
  <div class="row">
    <div class="col-lg-12 col-xl-12 col-xxl-12">
      <div class="card shadow mb-4">
        <div class="card-body">
<div class="d-sm-flex justify-content-between align-items-center mb-4">
        <div>
        <h5 class="text-dark">Intelligent Assessment</h5>
        <br>
        <form action="intelligentassessmentleprocess.php" method="post">

<!-- Ni nanti connect ngan database supaya boleh retrieve program-->
<table cellspacing="0" style="table-layout: fixed;" style="word-wrap: break-word;" width="100%">
            <tr>
              <th style="text-align:left" width="40%">Kepelbagaian Kecerdasan</th>
              <th style="text-align:left" width="80%">Catatan Komen</th> 
            </tr>

            <tr>
              <!-- Yang ni nanti akan connect ngan database untuk retrieve VAKType -->
              <td style="text-align:left" >Kecerdasan Bahasa</td>
              <td><textarea type="text" class="form-control" style="white-space: normal;" style="width: fit-content;" style="height: fit-content;" name="acad_IntelliComm1" placeholder="Leave a comment"></textarea></td> 
            </tr>

            <tr>
              <!-- Yang ni nanti akan connect ngan database untuk retrieve VAKType -->
              <td style="text-align:left">Kecerdasan Logik (Matematik)</td>
              <td><textarea type="text" class="form-control" style="white-space: normal;" style="width: fit-content;" style="height: fit-content;" name="acad_IntelliComm2" placeholder="Leave a comment"></textarea></td>
            </tr>

            <tr>
              <!-- Yang ni nanti akan connect ngan database untuk retrieve VAKType -->
              <td style="text-align:left">Kecerdasan Muzikal</td>
              <td><textarea type="text" class="form-control" style="white-space: normal;" style="width: fit-content;" style="height: fit-content;" name="acad_IntelliComm3" placeholder="Leave a comment"></textarea></td> 
            </tr>
            
            <tr>
              <!-- Yang ni nanti akan connect ngan database untuk retrieve VAKType -->
              <td style="text-align:left">Kecerdasan Visual (Spatial)</td>
              <td><textarea type="text" class="form-control" style="white-space: normal;" style="width: fit-content;" style="height: fit-content;" name="acad_IntelliComm4" placeholder="Leave a comment"></textarea></td> 
            </tr>

            <tr>
              <!-- Yang ni nanti akan connect ngan database untuk retrieve VAKType -->
              <td style="text-align:left">Kecerdasan Kinestetik (Badan)</td>
              <td><textarea type="text" class="form-control" style="white-space: normal;" style="width: fit-content;" style="height: fit-content;" name="acad_IntelliComm5" placeholder="Leave a comment"></textarea></td> 
            </tr>

            <tr>
              <!-- Yang ni nanti akan connect ngan database untuk retrieve VAKType -->
              <td style="text-align:left">Kecerdasan Interpersonal</td>
              <td><textarea type="text" class="form-control" style="white-space: normal;" style="width: fit-content;" style="height: fit-content;" name="acad_IntelliComm6" placeholder="Leave a comment"></textarea></td> 
            </tr>

            <tr>
              <!-- Yang ni nanti akan connect ngan database untuk retrieve VAKType -->
              <td style="text-align:left">Kecerdasan Intrapersonal</td>
              <td><textarea type="text" class="form-control" style="white-space: normal;" style="width: fit-content;" style="height: fit-content;" name="acad_IntelliComm7" placeholder="Leave a comment"></textarea></td> 
            </tr>

            <tr>
              <!-- Yang ni nanti akan connect ngan database untuk retrieve VAKType -->
              <td style="text-align:left">Kecerdasan Naturalis</td>
              <td><textarea type="text" class="form-control" style="white-space: normal;" style="width: fit-content;" style="height: fit-content;" name="acad_IntelliComm8" placeholder="Leave a comment"></textarea></td> 
            </tr>

            <tr>
              <!-- Yang ni nanti akan connect ngan database untuk retrieve VAKType -->
              <td style="text-align:left">Kecerdasan Existentialis</td>
              <td><textarea type="text" class="form-control" style="white-space: normal;" style="width: fit-content;" style="height: fit-content;" name="acad_IntelliComm9" placeholder="Leave a comment"></textarea></td> 
            </tr>
        </table>
<br>
<div class="form-group row">
  <div class="col-md-6 mr-auto">
    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Submit">
    <input type="hidden" name="aid" value="<?php echo $aid?>">
</div>
</div>
</form>
    
    </div>
            
</div>


          

    </div></div></div></div></div></div>
    <?php include 'footersecond.php' ?>