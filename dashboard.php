<?php
session_start();
$name = $_SESSION['uname'] ;
$email = $_SESSION['email'] ;
$location = $_SESSION['location'] ;

$con = mysqli_connect("localhost","root","","formycity");
?>
<!DOCTYPE html>
<html>
<head>
	<title>For My City :: Dashboard </title>
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="vendor/jquery/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="js/dashboard.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
</head>
<body>
<section id="sidebar"> 
  <div class="white-label">
  </div> 
  <div id="sidebar-nav">   
    <ul>
      <li class="active"><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="oldage.php"><i class="fa fa-calendar"></i>Old Age Home</a></li>
      <li><a href="orphanage.php"><i class="fa fa-calendar"></i>Orphanages</a></li>
      <li><a href="cleaning.php"><i class="fa fa-calendar"></i>Cleaning Campaign</a></li>
      <li><a href="awareness.php"><i class="fa fa-calendar"></i>Awareness Campaign</a></li>
      <li><a href="teaching.php"><i class="fa fa-calendar"></i>Teaching Campaign</a></li>
      <li><a href="plantation.php"><i class="fa fa-calendar"></i>Plantation Programme</a></li>
      <li><a href="health.php"><i class="fa fa-calendar"></i>Health Drives</a></li>
    </ul>
  </div>
</section>
<section id="content">
  <div id="header">
    <div class="header-nav">
      <div class="menu-button">
      </div>
      <div class="nav">
        <ul>
          <li class="nav-profile">
            <div class="nav-profile-image">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              <div class="nav-profile-name"><?php echo $name ; ?></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="content" id="dashboard-content">
    <div class="content-header">
    	<div class="row">
    		<div class="col-md-9">
      <h1>Dashboard</h1>
      	</div>
      	<div class="col-md-3" align="right">
      		<a href="logout.php" class="btn btn-danger">LOG OUT</a>
      	</div>
      	</div>
    </div>
      <div class="row">
      	<div class="col-md-3">
      		<div class="panel panel-primary">
      			<div class="panel panel-heading">
      				No. of Causes Served
      			</div>
      			<div class="panel-body" align="center" style="font-size: 20px;">
      				<?php 
      				$res = mysqli_query($con,"select count(eid) from volunteer where uname = '$name' ;");
      				$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
      				echo $row['count(eid)'] ;
      				?>
      			</div>
      		</div>
      	</div>
      	<div class="col-md-3">
      		<div class="panel panel-primary">
      			<div class="panel panel-heading">
      				No. of Events Available in <?php echo $location ; ?>
      			</div>
      			<div class="panel-body" align="center" style="font-size: 20px;">
      				<?php 
      				$tot = 0 ;
      				$serv = array("oldage","orphanage","awareness","teaching","cleaning","health","plantation");
      				foreach ($serv as $val)
      			    {
      					$res = mysqli_query($con,"select count(eid) from $val where location = '$location';");
      					$row = mysqli_fetch_array($res, MYSQLI_ASSOC) ;
      					$tot += $row['count(eid)'];
      				}
      				echo $tot ;
      				?>
      			</div>
      		</div>
      	</div>
      	<div class="col-lg-6">
      		<div class="panel panel-primary">
      			<div class="panel panel-heading" align="center">
      				PLEASE DONATE TOWARDS YOUR CITY
      			</div>
      			<div class="panel-body" align="center">
      				<a href="#pay" class="btn btn-success" data-toggle="modal">Donate Here !</a>
      				<div class="modal fade" id="pay">
      					<div class="modal-dialog">
      						<div class="modal-content">
      							<div class="modal-header">
      								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      								<h4 class="modal-title">Pay through PayTM</h4>
      							</div>
      							<div class="modal-body">
      								<img src="img/scan.png" alt="paytm payment">
      							</div>
      							<div class="modal-footer">
      								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
      <div class="panel panel-primary">
      	<div class="panel panel-heading">
      		Latest Updates
      	</div>
      	<div class="panel-body">
      		<div class="holder">
  <ul id="ticker01" class="list-group" style="text-align: center;">
							<li class="list-group-item"><span>18/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>18/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>18/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>18/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>17/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>17/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>17/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>17/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>17/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>17/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>17/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>16/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>15/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>15/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>15/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>15/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>15/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>14/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>14/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>14/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>14/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>14/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>13/03/2018</span><a href="#">Feed from Watson</a></li>
							<li class="list-group-item"><span>13/03/2018</span><a href="#">Feed from Watson</a></li>
				</ul>
</div>
      	</div>
      </div>
  </div>
  </section>
</body>
</html>