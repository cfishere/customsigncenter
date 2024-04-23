<?php 
header("Expires: Sat, 1 Jan 2005 00:00:00 GMT");
header("Last-Modified: ".gmdate( "D, d M Y H:i:s")."GMT");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");

/* Marquee message here: */
$marquee = '<span style="font-weight:bold">1. OUPS job designation is available as a Shovel Icon.</span> | <span style="font-weight:bold">2. Jobs can be marked as "EXPEDITED" (formats job text with a yellow-green background AND red underline styling)</span>.';

require_once('classes/security.php');
if(!isset($_SESSION)){	
	$s = new Session;
}
if(!isset($_SESSION['user'])){
	header('Location: login.php');
}
if($_SESSION['user']['name'])
{
	//if($query['user']){
		//$username =  $query['user'];
		$username = $_SESSION['user']['name'];	
	//echo "username is " .$username;
		session_id() != NULL ? $sesID = session_id() : $sesID = '' ;
} elseif(empty($_SESSION['user']['name'])) {
	header("location: login.php");
}			
			
if( $_SESSION['user']['role'] === 'user' || !empty($_SESSION['user']['role']) || $_SESSION['user']['role'] !== 'guest' )
{
	$role = 'user';	
}
$ua = new userAuthenticate; //session start should be called by its parent, Session.
if(!isset($_SESSION)){	
	$s = new Session;
	//echo 'Developer Notification: A new Session created and session.php loaded.';
}

//get array of all logged in users:
//returns empty array, or users with assoc indices of 'username','email',
$loggedUserList = $ua->getLoggedUsersList($_SESSION['user']['userId']);
$loggedUsers = "<button type=\"button\" id=\"tglUserList\">Active Logins</button><p id=\"authenticatedUserList\" style=\"display:none\">";
if(!empty( $loggedUserList ))
{
	$loggedUsers .= "<span style=\"font-weight:bold\">Username, Email, Role</span><br/>";	
	foreach($loggedUserList[0] as $lu){
		$loggedUsers .= $lu['username'] . ", " . $lu['email']. ", ". $lu['role']."<br/>";
	}	
}
else
{
	$loggedUsers = "No Logged In Users.";
}
$loggedUsers .= "</p>";
	//session_start();
  	//$_SESSION['counter']++;
  	//echo "You have visited this page $_SESSION[counter] times.";
	
/*  LOAD NEW CSS FILE IF MODIFIED DATE CHANGED  */

/**
 *  Given a file, i.e. /css/base.css, replaces it with a string containing the
 *  file's mtime, i.e. /css/base.1221534296.css.
 *  
 *  @param $file  The file to be loaded.  Must be an absolute path (i.e.
 *                starting with slash).
 */
//clear the remote cached file info from prior filetime operations.
clearstatcache();
function auto_version($file)
{
  /* USE: <link rel="stylesheet" href="<?php echo auto_version('/css/base.css'); ?>" type="text/css" />*/
  if(strpos($file, '/') !== 0 || !file_exists($_SERVER['DOCUMENT_ROOT'] . $file))
    return $file;

  $mtime = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);
  return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
}





?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title></title> 
  <link rel="stylesheet" href="styles/bootstrap.min.css" type="text/css" media="all" /> 
   

	<!-- styles - Load Fresh Each Time -->  

   <link rel="stylesheet" href="<?php echo auto_version('styles/calendar-min.css'); ?>" type="text/css" media="screen" />	

   <link rel="stylesheet" href="<?php echo auto_version('styles/print_1.css'); ?>" type="text/css" media="print" />

   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" media="screen">

   <link rel="stylesheet" href="assets/pickadate.js-3.5.6/default.css" media="screen">

   <link rel="stylesheet" href="assets/pickadate.js-3.5.6/default.date.css" media="screen">

   <link href='https://fonts.googleapis.com/css?family=Kaushan+Script&effect=3d-float' rel='stylesheet' type='text/css'>   

   <link rel="stylesheet" href="<?php echo auto_version('assets/icomoon/style-min.css'); ?>" type="text/css" media="all">

    <link rel="stylesheet" href="styles/nav.css" media="screen">

	<link rel="stylesheet" href="styles/draggable.css" media="screen">

 <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" crossorigin="anonymous"></script>

	<!-- for draggable functionality, touch-punch must be loaded after jquery and jquery-ui -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
</head>
<body>


<!-- <div style="text-align:center">
	<pre style="text-align:center"><span style="font-size: 14px; background:#FEFFF3;padding:5px 8px;color:#419200; border: 1px dotted #8AC72D"><span id="date"></span> [ <span id="curTime"></span> ]</span>
	</pre>	
</div> -->

<div style="text-align:center;padding:5px 0px"><a href="contact.php" target="_blank" title="Opens Email Form in a New Window or Tab">REPORT BUGS</a> | <a href="help.html" target="_blank" title="WIP Support">HELP</a> | <a href="directory.php" target="_parent" title="Employee Phone Directory" class="smBtn">EMPLOYEE DIRECTORY</a></div>
<!--<span  style="text-align:center; margin: 8px auto 2px auto">Recommended Browsers (Avoid IE; MS Edge is OK)</span><br><img src="assets/compatible_browsers.png" title="Compatible Browsers for This Calendar App" style="text-align:center; margin: 0px auto 5px auto" />-->

<div class="row" style="padding:5px 20px">
<div class="col-md-3">
</div>
<div class="col-md-1" style="text-align:center">
	<img src="assets/bolt-flash.png" style="max-width:17px; font-size:17px;font-weight:bold" alt="Flash of Lightning"/> <span style="font-weight: bold;font-size:17px">News:&nbsp;</span>
</div>
<div class="col-md-5" >
	<div class="marquee" style="overflow:hidden; padding-top:10px;font-size:14px">
		<?= $marquee ?>
	</div>
</div>
<div class="col-md-3">
</div>
</div>

<h2 id="pageTitle" class="cursive font-effect-3d-float" style="margin: 6px auto;text-align:center;color:#000"></h2>
	
	
<br />



<div class="row" style="padding:5px 20px">

	<div class="col-md-4 pl-5">

	<h5 style="margin: 2px auto 5px auto;color:#8AC72D" class="cursive">Choose a Company Calendar</h5>

	<form action="" method="post" name="loadCalendar" id="loadCalendarForm">
		<select name="companyCalendar" id="companyCalendar" >
			<option value="Custom Sign Center" selected>Custom Sign Center</option>		
			<option value="Outdoor Images">Outdoor Images</option>			
		  </select>
		  <!--<input type="hidden" name="company" id="company" value="Custom Sign Center" />-->
		  <button class="smBtn" name="submitBtn" style="margin-left: 15px">Submit</button>
	 </form>
	 

	 </div><!--/col-lg-4, select-company-form wrapper-->

	 

	 <div class="col-md-4 pl-5">

		 <form class="form-group"><h5 style="margin: 2px auto 5px auto;color:#8AC72D" class="cursive">Search (Job Number or ANY text)</h5>

			<input type="text" id="search" class="form-control" placeholder="Search and Click" style="background-color: lightyellow;">

			<div id="srchResult" class="hide" style="background-color: #86C73A; color:#0B6F93; padding:10px 25px"></div>

		</form>	 

	</div><!--/col-lg-4, search jobs form-->	 

	 

	 <div class="col-md-4 pl-5">

		

		<?php if($username) { 

			echo "<h5 style=\"margin: 2px auto 8px auto;;font-size:15px;color:#8AC72D\" class=\"cursive\">Welcome <span id=\"username\">". $username ." <span style='font-family:san-serif'>&nbsp;(".$role.").</span></span></h5>

			<form action=\"login.php\" method=\"POST\" >

				<input type=\"hidden\" value=\"".$username."\" name=\"loggedOutUser\" />

				<input class=\"smBtn\" type=\"submit\" value=\"logout\" name=\"logout\" />

			</form>

			<br/>";

			/*if( !empty($userProfiles) ){

				echo $userProfiles;				

			}*/

			echo $loggedUsers;

			echo "

			<!-- Show this for admins?

			<form action=\"register.php?sid={$sesID}\" method=\"POST\" >

				<input type=\"hidden\" value=\"".$_SESSION['user']['role']."\" name=\"role\" />

				<input type=\"submit\" value=\"Register a User\" name=\"logout\" />

			</form>

			-->

			";

		} else {

			$username = 'user';

		} ?>

	 </div><!--/col-lg-3, Welcome user, logout form-->

 </div> <!--end row-->
<div  style="border-color:royalblue;border-radius: 10px; border-width:2px; padding:15px 30px; display:block;">
<div class="row" style="text-align:center">
<ul style="max-width:500px;margin:auto;list-style:none">
<li class="nav-item">
    		<button class="btn nav-link" onclick="teamsShowAll()">Show All</button>
</li>
<li class="nav-item">
    		<button class="btn nav-link" onclick="teamsHideAll()">Hide All</button>
</li>   	
</ul>
	
</div>	
 <div class="row pl-3">
		
		<div class="col-lg-3 pl-lg-5 text-lg-left text-sm-center">				   
		    <!--chkbx attrib is used to show / hide jobs having matched css class (i.e. t21) -->    	
		    <div class="form-check mb-2" id="second-chkbx-wrapper">
				  <input class="form-check-input" type="checkbox" id="select-21" name="t21" value="t21" checked="checked">
				  <label class="due" for="defaultCheck1">
				   Overdue Jobs
				  </label>
				</div>					    				
				<div id="OverDueJobsList">
				</div>					
	 </div>	

		<div class="col-lg-9"> 	   

	    		<div class="container-fluid" id="checkboxWrapper">

	    		  <div name="teamdata" id="teamSelection"> <!--js id to show/hide ticked checkbox assignments-->

			
				

				<div id="teams">					  

		

						 

				</div><!--/.row /#teams-->

				</div>

			 </div><!--container-fluid for checkboxes-->

		 </div><!--/col-8 for job-assignment checkboxes-->

		

		</div><!--/#icons styling-->

	</div><!-- overdue jobs and job assignment selector columns-->
</div><!-- display controllers bordered together -->

    

  


</div><!--/container-fluid, bootstrap4-->



<div class="content-row" id="message">

</div>


<div id="calWrap" class="clearfix">
	<div id="topHeaders">
        <!-- <div class="row">
               <div class="btnPrev"><a href="#" onClick="prev('yr')"><img  id="prevYear" src="assets/prev-yr.png"></a></div>       
             
               <div class="btnNext" ><a href="#" onClick="next('yr')"><img id="prevYear" src="assets/nex-yr.png"></a></div>     
          </div> -->
          <div class="calRow">
             <div id="btnPrev"><img  id="prevMonth" src="assets/prev-mo.png"></div>              
              <div style="width:49.5%; display:inline-block; text-align:center; margin: 0px; box-sizing:border-box;"><span class="cursive" id="mo" oridnal=""><!-- e.g., ordinal="12" for december --></span> <span class="year cursive" id="yr" ordinal=""><!-- e.g., 2016, etc --></span></div>
              <div id="btnNext" ><img id="nextMonth" src="assets/nex-mo.png"></div>             
          </div>
     </div><!--end topHeaders-->
         <div id="headerDays">
              <div class="calCol morPad bold weekend">SUN</div>          
              <div class="calCol morPad bold">MON</div>
              <div class="calCol morPad bold">TUE</div>
              <div class="calCol morPad bold">WED</div>          
              <div class="calCol morPad bold">THU</div>
              <div class="calCol morPad bold">FRI</div>
              <div class="calCol morPad bold weekend">SAT</div>
         </div>
         <div id="weeks">
           <!-- js builds the rows as month requires 
             <div class"row" id="row1">
             	<div class="date" ordinal=""></div>
               <br/>content is entered here
             </div>
             <div id="row1"></div>
             <div id="row1"></div>
             <div id="row1"></div>
             <div id="row1"></div> 
           -->
         </div>
	<div id="calFooter">App ver. <?php include('backup/ver.php') ?>.<br> 2015 - <?php echo date('Y') ?> &copy; Custom Sign Center, Inc. -- All Rights Reserved.v 1.5</div>     
	
             
	<div class="blocker hide">

     	<div id="modal" class="modal">
          <button class="smBtn" onclick="modalClose(this)">Close</button>
          <button class="smBtn" onclick="printAnyElement('modal')">Print</button>
			<span style="margin: 3px 12px">
				
				<!-- if the user is an admin, they can rearrange the jobs in the cell -->
				
				 
			</span>          
          </div>     
	</div>
	<div id="printSection"><!--loads with printable domClone --></div>
    <img class="hide" id="wait" src="assets/preloader_blue.png" />
</div>
<script src="https://customsigncenter.com/calendar/assets/jquery.marquee.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	/* this is for marquee scrolling text: Company News */
	$(function(){
	  $('.marquee').marquee({
		//duration in milliseconds of the marquee
		duration: 19000,
		//gap in pixels between the tickers
		gap: 50,
		//time in milliseconds before the marquee will start animating
		delayBeforeStart: 0,
		//'left' or 'right'
		direction: 'left',
		//true or false - should the marquee be duplicated to show an effect of continues flow
		duplicated: true,
		//allow support for css3 pause on hover
		allowCss3Support: true,
		pauseOnHover: true
	  });    
	});
	
	
</script>
<script src="https://customsigncenter.com/calendar/assets/clipboard.min.js" type="text/javascript" charset="utf-8"></script>
<!--<script src="assets/pickadate.js-3.5.6/legacy.js" type="text/javascript" charset="utf-8"></script>-->
<script src="<?php echo auto_version('assets/common.js?v=4'); ?>" type="text/javascript" charset="utf-8"></script>	
	
	

<div id="print" class="hide"></div>
</body>


</html>