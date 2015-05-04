<!DOCTYPE  html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Profile Page</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
	<script src="JS/setRequired.js" type="text/javascript"></script>
	<link href="CSS/profile_page.css" rel="stylesheet" type="text/css">
	<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
	<link href="CSS/cssEthics_Application.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<?php
		$servername = "127.0.0.1"; //Change the value inside those " " to your own server/host,username,password,and database name
		$username = "root"; 
		$password = "abc123";
		$dbname = "pdm";
		
		$mysqli = mysql_connect($servername, $username, $password); //Terminate connection if the connection failed
		if(!$mysqli) 
		{
			die ('Could not connect' . mysql_error() );
			echo 'Could not connect to the server.';
		}
		
		$db_selected = mysql_select_db($dbname, $mysqli);
	
		if (!$db_selected) // If the database selected doesn't exist, terminate the process
		{
			die('Can\'t use ' . $dbname . ': ' . mysql_error());
			echo 'Unable to access the database';
		}
		
		session_start();
		$userName = $_SESSION["myusername"];
		$sql = "SELECT firstname, lastname, email, pno FROM Member WHERE username ='$userName'";
		$result = mysql_query($sql, $mysqli);
		if(!$result)
		{
			die(mysql_error());
		}
		
		$row = mysql_fetch_array($result, MYSQL_ASSOC);
	?>
	
	<?php echo"<p class='right'>Welcome,".$row['firstname']." ".$row['lastname']."</p>"; ?>
	<input type="button" onclick ="window.location='Login.php'" name="Logout" id="logout_button" value="Log Out"/> <!-- This is the log out button -->
	<img src="image/curtin-logo.gif" alt="Curtin University Offical Logo" style="width:300px;height:50px;padding-bottom:25px;">
	<?php echo "<p>Name:   ".$row['firstname']."  ".$row['lastname']."</p>"; ?>
	<?php echo "<p>E-mail Address:   ".$row['email']."</p>"; ?>
	<?php echo "<p>Contact Number:   ".$row['pno']."</p>"; ?>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<div id="testing" class="TabbedPanels">
		<ul class="TabbedPanelsTabGroup">
			<li class="TabbedPanelsTab" tabindex="0"><h3>Current Application</h3></li>
			<li class="TabbedPanelsTab" tabindex="0"><h3>Drafts</h3></li>
			<li class="TabbedPanelsTab" tabindex="0"><h3>Tagged</h3></li>
			
		</ul>
		
		<div class="TabbedPanelsContentGroup">
			<div class="TabbedPanelsContent">
				<p class="tab">Ethics_Application One
				<input type="button" onclick="alert('go to the actual application')" name="View" value="View" />
				<input type="button" onclick="alert('go to the head of school')" name="HOS" value ="Head Of School"/>
				<input type="button" onclick="alert('a testing button')" name="testing" value="NULL" /></p>

			</div>

			<div class="TabbedPanelsContent">
				<p class="tab">Draft One
				<input type="button" onclick="alert('Create')" name="Create" value="Create New Application" />
				<input type="button" onclick="alert('Edit')" name="Edit" value ="Edit Draft Application"/>
				<input type="button" onclick="alert('Delete')" name="Delete" value="Delete Application" /></p>

			</div>
			
			<div class="TabbedPanelsContent">
				<p class="tab">Tagged One
				<input type="button" onclick="alert('go to the actual application')" name="ViewTagged" value="View" />
				<input type="button" onclick="alert('go to the head of school')" name="ContactPerson" value ="Principal Investigator"/>
				<input type="button" onclick="alert('a testing button')" name="testing" value="blank tab" /></p>

			</div>
		</div>
	</div>

<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("testing");
</script>	
</body>
</html>