<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
                <title>NeoGen Labs Payroll System</title>
             
   <?php echo Asset::css('bootstrap.css'); ?>
		<?php echo Asset::css('template.css'); ?>
		<?php echo Asset::css('styles.css'); ?>
                
               <!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
            <div id="header">
                <h1>NeoGen Labs Payroll System</h1>
                <!--<div class="logout">
                   <ul>
                        <li><a href="#">Home </a></li> 
                        <li><a href="#">Logout</a></li>
                    </ul>--> 
                </div>
            </div>
                        
             <div id="left-nav" >
   		
   		
	    <ul id="nav">

			<li><a href="#">Control Panel</a>
		
				<ul>
					<li><a href="#">Admin Settings</a>
						<ul>
							<li><a href="#">Add User</a></li>
							<li><a href="#">Access Rights</a></li>
							<li><a href="#">Remove User</a></li>
							
						</ul>
					</li>
					<li><a href="#">Company Information</a></li>
					<li><a href="#">Professional Tax Settings</a></li>
					<li><a href="#">Holiday Calendar</a></li>
		
				</ul>
			</li>
		
			<li><a href="#">Employee</a>
				<ul>
					<li><a href="#">Employee Directory</a></li>
                                        <li><a href="#">Add Employee</a></li>		
					<li><a href="#">Salary Details</a></li>
					<li><a href="#">Leave</a></li>
					<li><a href="#">Archive</a></li>
		
				</ul>
			</li>
		
			<li><a href="#">Payroll</a>
				<ul>
		
					<li><a href="#">Payroll Central</a></li>
					<li><a href="#">Generate Payslip</a></li>
					<li><a href="#">Salary Structure</a></li>
					<li><a href="#">Add Bonus</a></li>
					
				</ul>
			</li>
		<li><a href="#">Reports</a>
		</ul>
	
		<!-- END Menu -->
	    
                <div id="border"></div>
                <div id="container">
          <?php echo $content ;?>
                </div>
	</body>
</html>