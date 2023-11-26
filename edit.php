<!DOCTYPE html>
<html lang="en">


<?php
session_start();

$agb=$_SESSION['agb'];

if ($agb == "" || $agb != "onigbero") {
  header("location:index.php");
}

       include('connection.php');
       include('header.php');
       
?>  

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Nirvana Tech</a>
            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Agbero <small>VEHICLE Onboarding</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
<?php 


$query = 'SELECT * FROM drivers
              WHERE
              people_id ='.$_GET['id'];

            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['people_id'];
                $i= $row['first_name'];
                $a=$row['last_name'];
                $b=$row['mid_name'];
                $c=$row['addresss'];
                $d=$row['contact'];
                $e=$row['comment'];

                $experienced = $row['experienced'];
                $owners = $row['owners'];
                $fulltime = $row['fulltime'];
                // $parttime = $row['parttime'];

                            // Vehicle
                $vehicle_type = $row['vehicle_type'];
                $make_model = $row['make_model'];
                $model_year = $row['model_year'];
                $transmission_type = $row['transmission_type'];
                $interior_trim = $row['interior_trim'];
                $interior_colour = $row['interior_colour'];
                $exterior_colour = $row['exterior_colour'];
				
                // Documents
                $v_licence = $row['v_licence'];
                $rwc = $row['rwc'];
                $auto_insure = $row['auto_insure'];
                $driver_licence = $row['driver_licence'];
                $hackney_permit = $row['hackney_permit'];
             
              }
              
              $id = $_GET['id'];

              if ($id == "" || $id == NULL || $zz == "" || $zz == NULL) {
                  header("location:record.php");
                }
         
?>

             <div class="col-lg-12">
                  <h2>Edit Driver's Record</h2>
                      <div class="col-lg-4">

                        <form role="form" method="post" action="edit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="firstname" value="<?php echo $i; ?>" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="lastname" value="<?php echo $a; ?>" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Middle Name" name="Middlename" value="<?php echo $b; ?>" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="Address" value="<?php echo $c; ?>" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Contact" name="Contact" value="<?php echo $d; ?>" required>
                            </div> 

                            <?php 
                              $exp=$expown=$exfp1=$exfp2="";

                              if ($experienced == "yes") {
                                $exp="checked";
                              }
                              if ($owners == "yes") {
                                $expown="checked";
                              }
                              if ($fulltime == "fulltime") {
                                $exfp1="checked";
                              }elseif ($fulltime == "parttime") {
                                $exfp2="checked";
                              }
                            ?>

                                    <!-- Addition -->
                            <div class="form-group"> 
                              <input type="checkbox" id="experienced" name="experienced" value="yes" <?php echo $exp; ?>>
                              <label for="experienced">Are you an Existing E-hailing Driver ?</label>
                            </div> 
                            <div class="form-group"> 
                              <input type="checkbox" id="owner" name="owner" value="yes" <?php echo $expown; ?>>
                              <label for="owner">Do you own the Vehicle ?</label>
                            </div> 
                            <div class="form-group"> 
                              <input type="radio" id="fulltime" name="fp" value="fulltime" required <?php echo $exfp1; ?>>
                              <label for="fulltime">Full-time Operator</label>
                              
                              <input type="radio" id="parttime" name="fp" value="parttime" required <?php echo $exfp2; ?>>
                              <label for="parttime">Part-time Operator</label>
                            </div> 
                            <!-- <br> -->
                            <!-- <br> -->
                        </div> 
               
                      <div class="col-lg-4">
                      <h4>Vehicle</h4>
                        <!-- <form role="form" method="post" action="transac.php?action=add"> -->
                            
                            <div class="form-group">
                              <!-- <input class="form-control" placeholder="Vehicle Type (Saloon, SUV, Hatchback)" name="firstname"> -->
                              <select class="form-control" name="vehicle_type" id="vehicle_type" required>
                                <option value="non">Vehicle Type</option>
                                <option value="<?php echo $vehicle_type; ?>" selected><?php echo $vehicle_type; ?></option>
                                <option value="saloon">Saloon</option>
                                <option value="suv">SUV</option>
                                <option value="hatchback">Hatchback</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Make & Model" name="make_model" value="<?php echo $make_model; ?>" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Model Year" name="model_year" value="<?php echo $model_year; ?>" required>
                            </div> 
                            <div class="form-group">
                              <select class="form-control" name="transmission_type" id="transmission_type" required>
                                <option value="non">Transmission Type</option>
                                <option value="<?php echo $transmission_type; ?>" selected><?php echo $transmission_type; ?></option>
                                <option value="auto">Auto</option>
                                <option value="manual">Manual</option>
                              </select>
                            </div> 
                            <div class="form-group">
                              <select class="form-control" name="interior_trim" id="interior_trim" required>
                                <option value="non">Interior Trim</option>
                                <option value="<?php echo $interior_trim; ?>" selected><?php echo $interior_trim; ?></option>
                                <option value="fabric">Fabric</option>
                                <option value="leather">Leather</option>
                              </select>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Interior Colour" name="interior_colour" value="<?php echo $interior_colour; ?>" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Exterior Colour" name="exterior_colour" value="<?php echo $exterior_colour; ?>" required>
                            </div> 
                        </div> 

               
                <div class="col-lg-4">
                      <h4>Documents</h4>
                        <!-- <form role="form" method="post" action="transac.php?action=add"> -->
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Vehicle Licence Number" name="v_licence" value="<?php echo $v_licence; ?>" required>
                            </div>
                            <div class="form-group">
                              <!-- <input class="form-control" placeholder="Road Worthiness Certificate" name="rwc"> -->
                              <select class="form-control" name="rwc" id="rwc" required>
                                <option value="<?php echo $rwc; ?>" selected><?php echo $rwc; ?></option>
                                <option value="non">Road Worthiness Certificate</option>
                                <option value="available">Available</option>
                                <option value="not_available">Not Available</option>
                              </select>
                            </div> 
                            <div class="form-group">
                              <!-- <input class="form-control" placeholder="Auto Insurance Type" name="auto_insure"> -->
                              <select class="form-control" name="auto_insure" id="auto_insure" required>
                                <option value="<?php echo $auto_insure; ?>" selected><?php echo $auto_insure; ?></option>
                                <option value="non">Auto Insurance Type</option>
                                <option value="basic">Basic</option>
                                <option value="standard">Standard</option>
                                <option value="comprehensive">Comprehensive</option>
                              </select>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Drivers Licence" name="driver_licence" value="<?php echo $driver_licence; ?>" required>
                            </div> 

                            <div class="form-group">
                              <input class="form-control" placeholder="Hackney Permit (Optional)" value="<?php if ($hackney_permit != NULL) { echo $hackney_permit;} ?>" name="hackney_permit">
                            </div> 
                        </div> 

                                    <!-- Addition -->



                        <div class="col-lg-12"> <br><br>
                            <div class="form-group">
                             <label>Comment</label>
                              <textarea class="form-control" rows="3"  name="comment"><?php echo $e; ?></textarea>
                            </div>  
                            <button type="submit" class="btn btn-default">Update Record</button>
                         


                      </form>  
                    </div>
                </div>
                
                <br> <br> <br>  <br>  <br> <br>  <br> <br> <br>  <br>
                        <br> <br> <br>  <br>  <br> <br>  <br> <br> <br>  <br>
                        <br> <br> <br>  <br>  <br> <br>  <br> <br> <br>  <br>
                        <br> <br> <br>  <br>  <br> <br>  <br> <br> <br>  <br>
                        <br> <br> <br>  <br>  <br> <br>  <br> <br> <br>  <br>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

