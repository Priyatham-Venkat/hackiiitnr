<?php
session_start();
if (!(isset($_SESSION['uname'])))
  header("location :index.php");
$name = $_SESSION['uname'];
$email = $_SESSION['email'] ;
$location = $_SESSION['location'] ;
$today = date("Y-m-d H:i:s");

$con = mysqli_connect("localhost","root","","formycity") ;
$res = mysqli_query($con,"select * from orphanage where location = '$location' and edate >= '$today' ;") ;
if(!$res)
{
  die("Couldnt Query DB 1");
}

if(isset($_POST['submitj']))
{
  $eid = $_POST['evid'] ;
  $join = mysqli_query($con,"insert into volunteer values('$eid','$name','orphanage');");
  if(!$join)
    die("Couldnt Query DB 2");
}

if(isset($_POST['submit']))
{
  $ename = $_POST['ename'] ;
  $edate = $_POST['edate'] ;
  $eaddr = $_POST['eaddr'] ;
  $estime = $_POST['estime'] ;
  $eetime = $_POST['eetime'] ;
  $ereq = $_POST['ereq'] ;

  $new = mysqli_query($con, "insert into orphanage(ename,edate,eaddr,estime,eetime,ereq,location) values('$ename','$edate','$eaddr','$estime','$eetime','$ereq','$location')");

  if(!$new)
    die("Couldnt Query DB 3");

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
      <li><a href="oldage.php"><i class="fa fa-calendar"></i>Old Age Home</a></li>
      <li class="active"><a href="orphanage.php"><i class="fa fa-calendar"></i>Orphanages</a></li>
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
              <div class="nav-profile-name"><?php echo "$name" ?></div>
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
      <h1>Orphanage Services</h1>
      	</div>
      	<div class="col-md-3" align="right">
      		<a href="logout.php" class="btn btn-danger">LOG OUT</a>
      	</div>
      	</div>
    </div>
     <div class="panel panel-primary">
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
            while ( $row = mysqli_fetch_array($res, MYSQLI_ASSOC) ) 
            {
              echo "<tr>";
              echo "<td></td>";
              echo "<td>" . $row['eid'] . "</td>";
              echo "<td>" . $row['ename'] . "</td>";
              echo "<td>" . $row['edate'] . "</td>";
              echo "<td>" . $row['eaddr'] . "</td>";
              echo "<td>" . $row['estime'] . "</td>";
              echo "<td>" . $row['eetime'] . "</td>";
              echo "<td>" . $row['ereq'] . "</td>";
              echo "<td> 
              <form method='post'>
              <input type='hidden' name='evid' value=".$row['eid'].">
              <input type='submit' class='btn btn-success' name='submitj' value='Join'>
              </form>
               </td>";
              echo "</tr>";
            }
           ?>
         </table>
       </div>
     </div>

     <div class="panel panel-primary">
      <div class="panel panel-heading">
        Create a New Event
      </div>
       <div class="panel-body">
         <form method="POST">
           <table class="table table-condensed table-striped">
             <tr>
               <td><label>Event Name</label></td>
               <td>:</td>
               <td><input type="text" name="ename"></td>
             </tr>
             <tr>
               <td><label>Event Date</label></td>
               <td>:</td>
               <td><input type="date" name="edate"></td>
             </tr>
             <tr>
               <td><label>Event Address</label></td>
               <td>:</td>
               <td><input type="text" name="eaddr"></td>
             </tr>
             <tr>
               <td><label>Event Start Time</label></td>
               <td>:</td>
               <td><input type="time" name="estime"></td>
             </tr>
             <tr>
               <td><label>Event End Time</label></td>
               <td>:</td>
               <td><input type="time" name="eetime"></td>
             </tr>
             <tr>
               <td><label>Event Requirements</label></td>
               <td>:</td>
               <td><input type="text" name="ereq"></td>
             </tr>
           </table>
           <div align="center">
             <input type="submit" name="submit" class="btn btn-success">
           </div>
         </form>
       </div>
     </div>
  </section>
</body>
</html>