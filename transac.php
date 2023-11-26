
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
                        <!-- <h1 class="page-header">
                           PHP CRUD <small>Create, Read, Update and Delete</small>
                        </h1> -->
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                <?php
                        // drivers
						$fname = $_POST['firstname'];
					    $lname = $_POST['lastname'];
						$mname = $_POST['Middlename'];
						$address = $_POST['Address'];
						$contact = $_POST['Contact'];
						$comment = $_POST['comment'];

						$experienced = $_POST['experienced'];
						$owners = $_POST['owners'];
						$fulltime = $_POST['fp'];
						// $parttime = $_POST['parttime'];

                        // Vehicle
						$vehicle_type = $_POST['vehicle_type'];
						$make_model = $_POST['make_model'];
						$model_year = $_POST['model_year'];
						$transmission_type = $_POST['transmission_type'];
						$interior_trim = $_POST['interior_trim'];
						$interior_colour = $_POST['interior_colour'];
						$exterior_colour = $_POST['exterior_colour'];
				
                        // Documents
                        $v_licence = $_POST['v_licence'];
                        $rwc = $_POST['rwc'];
                        $auto_insure = $_POST['auto_insure'];
                        $driver_licence = $_POST['driver_licence'];
                        $hackney_permit = $_POST['hackney_permit'];
                        // $comment = $_POST['comment'];
//  echo $fname.'---'.$lname.'---'.$mname.'---'.$address.'---'.$contact.'---'.$comment.'---'.$experienced.'---'.$owner.'---'.$fulltime.'---'.$contact.'---'.$vehicle_type.'---'.$make_model.'---'.$model_year.'---'.$transmission_type.'---'.$interior_trim.'---'.$interior_colour.'---'.$exterior_colour.'---'.$v_licence.'---'.$rwc.'---'.$auto_insure.'---'.$driver_licence.'---'.$hackney_permit;

					switch($_GET['action']){
						case 'new_driver':			
								$query = "INSERT INTO drivers
								(people_id,first_name, last_name, mid_name, addresss,contact, comment,experienced,owners,fulltime,vehicle_type,make_model,model_year,transmission_type,interior_trim,interior_colour,exterior_colour,v_licence,rwc,auto_insure,driver_licence,hackney_permit)
								VALUES (Null,'$fname','$lname','$mname','$address','$contact','$comment','$experienced','$owners','$fulltime','$vehicle_type','$make_model','$model_year','$transmission_type','$interior_trim','$interior_colour','$exterior_colour','$v_licence','$rwc','$auto_insure','$driver_licence','$hackney_permit')";

								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}



                        /*
                        // Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
                        */
				?>
    	<script type="text/javascript">
			alert("Congratulations !!!, We will invite you soon.");
			window.location = "index.php";
		</script>
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

