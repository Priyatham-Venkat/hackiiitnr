<?php
session_start();
if (!(isset($_SESSION['uname'])))
  header("location :index.php");
$name = $_SESSION['uname'];
$email = $_SESSION['email'] ;
$location = $_SESSION['location'] ;
$today = date("Y-m-d H:i:s");

$con = mysqli_connect("localhost","root","","formycity") ;
$res = mysqli_query($con,"select * from oldage where location = '$location' and date <= '$today' ;") ;

function join( $x )
{
  $join = mysqli_query($con, "insert into volunteer values('$x','$name') ; ");
  if(!$join)
    die("Couldnt query DB");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>For My City :: Dashboard </title>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
      <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><a href="oldage.php"><i class="fa fa-calendar"></i>Old Age Home</a></li>
      <li><a href="orphanage.php"><i class="fa fa-calendar"></i>Orphanages</a></li>
      <li><a href="cleaning.php"><i class="fa fa-calendar"></i>Cleaning Campaign</a></li>
      <li><a href="awareness.php"><i class="fa fa-calendar"></i>Awareness Campaign</a></li>
      <li><a href="teaching.php"><i class="fa fa-calendar"></i>Teaching Campaign</a></li>
      <li><a href="plantation.php"><i class="fa fa-calendar"></i>Plantation Programmes</a></li>
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
              <div class="nav-profile-name"><!-- <?php echo "$uname" ?> -->SUNDAR KUMAR</div>
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
      <h1>Old Age Home Services</h1>
      	</div>
      	<div class="col-md-3" align="right">
      		<a href="logout.php" class="btn btn-danger">LOG OUT</a>
      	</div>
      	</div>
    </div>
     <div class="panel panel-default">
      <div class="panel panel-heading">
        <b>Join Event / Volunteer</b>
      </div>
       <div class="panel-body">
         <table class="table table-condensed table-hover">
           <th>
             <td>Event Id</td>
             <td>Name</td>
             <td>Date</td>
             <td>Address</td>
             <td>Start time</td>
             <td>End time</td>
             <td>Requirements</td>
             <td>Join</td>
           </th>
           <?php
            while ( $row = mysqli_fetch_array($clq,MYSQLI_ASSOC) ) 
            {
              echo "<tr>";
              echo "<td>" . $row['eid'] . "</td>";
              echo "<td>" . $row['ename'] . "</td>";
              echo "<td>" . $row['edate'] . "</td>";
              echo "<td>" . $row['eaddr'] . "</td>";
              echo "<td>" . $row['estime'] . "</td>";
              echo "<td>" . $row['eetime'] . "</td>";
              echo "<td>" . $row['ereq'] . "</td>";
              echo "<td> <button class="btn btn-success" onclick="<?php join($row['eid']) ?>">Join</button> </td>";
              echo "</tr>";
            }
           ?>
         </table>
       </div>
     </div>
  </section>
</body>
</html>