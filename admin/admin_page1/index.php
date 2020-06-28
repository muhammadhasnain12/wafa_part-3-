﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wafa Admin Page</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">WAFA</a>
            </div>

        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
					
                    
                    <li>
                        <a href="table.php"><i class="fa fa-table"></i> Complaint List</a>
                    </li>
                    <li>
                        <a href="../complain_status_form.php"><i class="fa fa-dashboard"></i> Complain Status Form</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-6 col-12">
                        <h1 class="page-header text-primary font-weight-bold">
                            WAFA  <small>Summary of complaints</small>
                        </h1>
                    </div>
                </div>
                

                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-bar-chart-o fa-5x"></i>

        <!-- ================= Total Complain in database============= -->
                                <?php
                  $link = mysqli_connect("localhost", "root", "", "wafa_portal");
                $search = "punjab";
                $sql = "SELECT count(*) As total FROM complain_form";
                  $result = mysqli_query($link,$sql);
                  $values=mysqli_fetch_assoc($result);
                  $num_rows=$values['total']; ?>
                <h3><?php echo $num_rows; ?></h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                                Total Complains

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-check fa-5x"></i>
                                <?php
                                $link = mysqli_connect("localhost", "root", "", "wafa_portal");
                                $search = "punjab";
                                $sql = "SELECT count(*) As total FROM complain_status WHERE complain_user_status='done'";
                                $result = mysqli_query($link,$sql);
                                $values=mysqli_fetch_assoc($result);
                                $num_rows=$values['total']; ?>
                                <h3><?php echo $num_rows; ?></h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                Implementated Complains

                            </div>
                        </div>
                    </div>

                     <!-- ======================  Total islamabad Complaints ================ -->
                     
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fa fa fa-comments fa-5x"></i>
                                <?php
                                $link = mysqli_connect("localhost", "root", "", "wafa_portal");
                                $search = "punjab";
                                $sql = "SELECT count(*) As total FROM complain_form WHERE address='islamabad'";
                                $result = mysqli_query($link,$sql);
                                $values=mysqli_fetch_assoc($result);
                                $num_rows=$values['total']; ?>
                                <h3><?php echo $num_rows; ?></h3>
                            </div>
                            <div class="panel-footer back-footer-red">
                                No. of Isb Complain

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                                <i class="fa fa-users fa-5x"></i>
                                <?php
                                $link = mysqli_connect("localhost", "root", "", "wafa_portal");
                                $search = "punjab";
                                $sql = "SELECT count(*) As total FROM user_signup";
                                $result = mysqli_query($link,$sql);
                                $values=mysqli_fetch_assoc($result);
                                $num_rows=$values['total']; ?>
                                <h3><?php echo $num_rows; ?></h3>
                            </div>
                            <div class="panel-footer back-footer-brown">
                                No. Connected Person

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">


                    <div class="col-md-9 col-sm-12 col-xs-12 mt-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="text-danger">Delete Implemented Complain Record From Database</h4>
                            </div>
                            <div class="panel-body mt-5">
                                <!-- <div id="morris-bar-chart"></div> -->
                                
                    <form class="contact-form" id="myform" action="delete_user.php" method="POST">
                        <div class="form-group">
                        <label class="control-label col-sm-2" for="fname">Delete User Id:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="fname" placeholder="Enter user Id" name="delete_user_id">
                        </div>
                        </div>
                        <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button class="btn btn-danger" type="submit" name="submit">Submit</button>
                        </div>
                        </div>
                       </form>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->

                
				<footer><p>All right reserved. by: <a href="http://wafa.com">Wafa team</a></p></footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
$(document).ready(function(){
 var form = $('#myform');
 $('#myform').submit(function(event){
     event.preventDefault();
   $.ajax({
       url: form.attr("action"),
       type: 'post',
       data: $("#myform").serialize(),
       success: function(data){
           alert(data);
       }
   })
 });
})
</script>

</body>

</html>