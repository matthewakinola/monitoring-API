
<?php
       
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
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Onboarding</a>
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
                            <img src="images/agb.png" alt="Agbero" width="200px"> <small>VEHICLE Onboarding</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                      <div class="col-lg-4">
                  <h4>Driver</h4>

                        <form role="form" method="post" action="transac.php?action=new_driver">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Surname" name="firstname" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Given Name" name="lastname" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Middle Name" name="Middlename" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Home Address" name="Address" required>
                            </div> 
                            <div class="form-group">
                              <input type="number" class="form-control" placeholder="Phone Number" name="Contact" required>
                            </div> 
                                    <!-- Addition -->
                            <div class="form-group">
                              <input type="checkbox" id="experienced" name="experienced" value="yes">
                              <label for="experienced">Are you an Existing E-hailing Driver ?</label>
                            </div> 
                            <div class="form-group">
                              <input type="checkbox" id="owner" name="owners" value="yes">
                              <label for="owner">Do you own the Vehicle ?</label>
                            </div> 
                            <div class="form-group">
                              <input type="radio" id="fulltime" name="fp" value="fulltime" required>
                              <label for="fulltime">Full-time Operator</label>
                              
                              <input type="radio" id="parttime" name="fp" value="parttime" required>
                              <label for="parttime">Part-time Operator</label>
                            </div> 
                            <!-- <br> -->
                            <!-- <br> -->
                        </div> 
                                    <!-- Addition -->
               
                      <div class="col-lg-4">
                      <h4>Vehicle</h4>
                        <!-- <form role="form" method="post" action="transac.php?action=add"> -->
                            
                            <div class="form-group">
                              <!-- <input class="form-control" placeholder="Vehicle Type (Saloon, SUV, Hatchback)" name="firstname"> -->
                              <select class="form-control" name="vehicle_type" id="vehicle_type" required>
                                <option value="non">Vehicle Type</option>
                                <option value="saloon">Saloon</option>
                                <option value="suv">SUV</option>
                                <option value="hatchback">Hatchback</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Make & Model" name="make_model" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Model Year" name="model_year" required>
                            </div> 
                            <div class="form-group">
                              <select class="form-control" name="transmission_type" id="transmission_type" required>
                                <option value="non">Transmission Type</option>
                                <option value="auto">Auto</option>
                                <option value="manual">Manual</option>
                              </select>
                            </div> 
                            <div class="form-group">
                              <select class="form-control" name="interior_trim" id="interior_trim" required>
                                <option value="non">Interior Trim</option>
                                <option value="fabric">Fabric</option>
                                <option value="leather">Leather</option>
                              </select>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Interior Colour" name="interior_colour" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Exterior Colour" name="exterior_colour" required>
                            </div> 
                        </div> 




               
                <div class="col-lg-4">
                      <h4>Documents</h4>
                        <!-- <form role="form" method="post" action="transac.php?action=add"> -->
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Vehicle Licence Number" name="v_licence" required>
                            </div>
                            <div class="form-group">
                              <!-- <input class="form-control" placeholder="Road Worthiness Certificate" name="rwc"> -->
                              <select class="form-control" name="rwc" id="rwc" required>
                                <option value="non">Road Worthiness Certificate</option>
                                <option value="available">Available</option>
                                <option value="not_available">Not Available</option>
                              </select>
                            </div> 
                            <div class="form-group">
                              <!-- <input class="form-control" placeholder="Auto Insurance Type" name="auto_insure"> -->
                              <select class="form-control" name="auto_insure" id="auto_insure" required>
                                <option value="non">Auto Insurance Type</option>
                                <option value="basic">Basic</option>
                                <option value="standard">Standard</option>
                                <option value="comprehensive">Comprehensive</option>
                              </select>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Drivers Licence" name="driver_licence" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Hackney Permit (Optional)" name="hackney_permit">
                            </div> 
                        </div> 


                        <div class="col-lg-12"> <br><br>
                            <div class="form-group">
                             <label>Comments</label>
                              <textarea class="form-control" rows="10"  name="comment"></textarea>
                            </div>  
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button> 
                            <!-- <button type="reset" class="btn btn-default">Clear</button> -->


                      </form>  
                      <br><br> <br><br> <br><br> <br><br>
                    </div>
                </div>
                
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

