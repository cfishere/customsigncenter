<?php 
//libxml_use_internal_errors(true);
//deny access to guest users:
if(!isset($_SESSION['user'])){	
	header('Location: http://customsigncenter.com/calendar/login.php');	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>REGISTER A USER ACCOUNT FOR WIP CALENDAR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/micropage.css" />
</head>
<body>
<div id="page">
    <!-- [banner] -->
    <header id="banner">
        <hgroup>
		   <h1 class="T_RexTitle">Register</h1>
        </hgroup>        
    </header>
    <!-- [content] -->
    <section id="content">      
		<p>All new users default to a simple user with view-only access.<br/>If you want to
			elevate a user's permissions to<br/>ADMIN or MANAGER, send a request to chris@customsigncenter.com.</p>
        <div id="miniform">
        <form id="resetForm" method="post">
            <h2>To Identify your account, Please Provide Either Your</h2>
            <label for="username">Username:</label><br>
			<input id="username" name="username" type="text">
			<p>...or...</p>
			<label for="email">Email:</label><br>
            <input id="email" name="email" type="text">
			<br><br>			
			<p>Regardless which info you provided, a reset link will be sent to the user account's email for security verification.</p>                      
            <br><br>
            <input type="submit" name="submitResetRequest" onClick="submitResetRequest">
        </form>
	    </div>
    </section>
    <!-- [/content] -->
    
     <footer id="footer">
        <details>
            <p>Copyright - <?php echo date('Y',strtotime('today')); ?></p>
          
            <p>Custom Sign Center, INC. All Rights Reserved.</p>
        </details>
    </footer>
</div>
<script type="text/javascript" src="assets/reset.js?v=1"></script>
</body>
</html>