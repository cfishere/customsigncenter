<?php    			
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
header("Expires: Sat, 1 Jan 2005 00:00:00 GMT");

header("Last-Modified: ".gmdate( "D, d M Y H:i:s")."GMT");

header("Cache-Control: no-cache, no-store, must-revalidate");

header("Pragma: no-cache");*/

/*ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);*/

/* Marquee message here: */
/*$marquee = '<span style="font-weight:bold">1. OUPS job designation is available as a Shovel Icon.</span> | <span style="font-weight:bold">2. Jobs can be marked as "EXPEDITED" (formats job text with a yellow-green background AND red underline styling)</span>.';*/
/*
<span style="font-weight:bold">New Feature "BackUp" button (btn)</span>:  Continue using the "Save Update" btn as always. The Backup function is like saving a Word document with a different name as a backup. You won't see the btn unless logged in w/ full editing rights.  [<a href="https://calendar.customsigncenter.com/calendar/news.php#backupBtn" title="Learn More about this Feature." target="_blank">Learn More</a>].
*/
require_once('classes/security.php');
require_once('classes/active_token.php');
require_once('PageComponents/AdminPage.php');
?>

<!doctype html>
<html>
<?php include_once('PageComponents/HeadTag.php') ?>
<body>
<?php include_once('PageComponents/Navigation.php') ?>
<!--<span  style="text-align:center; margin: 8px auto 2px auto">Recommended Browsers (Avoid IE; MS Edge is OK)</span><br><img src="assets/compatible_browsers.png" title="Compatible Browsers for This Calendar App" style="text-align:center; margin: 0px auto 5px auto" />-->
<!-- Scrolling News Marque: -->
<!-- <div class="row" style="padding:5px 20px">
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
</div> End Marquee ----------->
<div class="row" style="padding:5px 20px">
	<div class="col-md-4" style="padding-left:10px;text-align:center">
	<h5 style="margin: 2px auto 5px auto;color:#8AC72D;font-size: 15px">Choose a Company Calendar</h5>
	<form action="" method="post" name="loadCalendar" id="loadCalendarForm">
		<select name="companyCalendar" id="companyCalendar" >
			<?php if($coShow === 'ALL') : ?>
					<option class="csc" value="Custom Sign Center" selected>Custom Sign Center</option>					
					<option class="outdoor" value="Outdoor Images">Outdoor Images</option>
			<?php elseif($coShow==='csc') : ?>    
				<option class="csc" value="Custom Sign Center" selected>Custom Sign Center</option> 
					<?php if($role==='admin') : ?>
						<option class="outdoor" value="Outdoor Images">Outdoor Images</option>
					<?php endif; ?>
			<?php elseif($coShow==='oi') : ?>
				<option class="outdoor" value="Outdoor Images">Outdoor Images</option>
			<?php endif; ?>
		  </select>
	 </form>
	 </div><!--/col-lg-4, select-company-form wrapper-->
	 <div class="col-md-4">
		 <form class="form-group"><h5 style="margin: 0px auto 5px auto;color:#8AC72D;font-size: 15px;text-align:center">Search (Job Number, Customer, City, Etc.)</h5>
			<input type="text" id="search" class="form-control" placeholder="Search and Click" style="background-color: lightyellow;">
			<div id="srchResult" class="hide" style="background-color: #86C73A; color:#0B6F93; padding:10px 25px"></div>
		</form>
	</div><!--/col-lg-4, search jobs form-->
	<div class="col-md-4 pl-5" style="text-align:center">
		<?php if($username) {
			echo "<h5 style=\"margin: 2px auto 8px auto;color:#8AC72D;font-size: 15px\">
			<form action=\"login.php\" method=\"POST\" style=\"display:inline; max-width:200px !important;\">
				<input type=\"hidden\" value=\"".$username."\" name=\"loggedOutUser\" />
				<input class=\"smBtn\" type=\"submit\" value=\"logout\" name=\"logout\" />
			</form>
			<span id=\"username\">Welcome ". $username ." </span></h5>
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
	</div>
	<div class="container-fluid">
	<div style="border-color:#ACC2E5; background-color:#F8FBFF; border-radius: 10px; border-style:solid; border-width:2px; padding:5px; display:block; box-sizing:border-box">	
	<div class="row" style="padding:5px 20px">
			<div class="col-md-2 pl-md-3 text-md-left text-sm-center" style="padding-left:10px;text-align:center">		   
			    <!--chkbx attrib is used to show / hide jobs having matched css class (i.e. t21) -->    	
			    <div class="form-check mb-2" id="second-chkbx-wrapper" style="margin: 6px 0 8px 0">
					  <input class="form-check-input" type="checkbox" id="select-21" name="t21" value="t21" checked="checked">
					  <label class="due bold" for="defaultCheck1">
					   Overdue
					  </label>
					</div>					    				
					<div id="OverDueJobsList">
					</div>
					<!-- ready ship -->
					<div class="form-check" id="third-chkbx-wrapper" style="margin: 12px 0 8px 0">
					 <input class="form-check-input" type="checkbox" id="select-25" name="t25" value="t25" checked="checked">
					  <label class="ready text-success bold">
					   Ready-To-Ship
					  </label>
					</div>
					<div id="shipreadyJobsList">
					</div>					
		 </div>	
			<div class="col-md-10">
		    <div class="container" id="checkboxWrapper">
		    	<div class="row">
		    		<div style="text-align:center">
				    	<div name="teamdata" id="teamSelection" style="margin-bottom:50px;"> <!--js id to show/hide ticked checkbox assignments-->
								<div id="teams">
								</div><!--/#teams-->
							</div>
						</div>
						<div class="row">
							<ul style="max-width:400px;margin:auto;list-style:none;text-align:center">
								<li class="nav-item">
									<button class="btn nav-link" onclick="teamsShowAll()">Show All</button>
								</li>
								<li class="nav-item" style="margin-left: 30px">
									<button class="btn nav-link" onclick="teamsHideAll()">Hide All</button>
								</li>   	
							</ul>
						</div>
					</div>					
				</div><!--container-fluid for checkboxes-->
			 </div><!--/col-10 for job-assignment checkboxes-->				
			</div><!--/row-->				
	</div><!-- /bordering for overdue jobs, shipready jobs and job assignment selector columns-->
</div><!--/container-fluid-->
 <?php include_once('PageComponents/CompanyTitle.php') ?>		
<div class="content-row" id="message">
</div>
<div id="calWrap" class="clearfix">
	<div id="topHeaders">
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
             <div class"calRow" id="row1">

             	<div class="date" ordinal=""></div>

               <br/>content is entered here

             </div>

             <div id="row1"></div>

             <div id="row1"></div>

             <div id="row1"></div>

             <div id="row1"></div> -->
         </div>
         <div id="calFooter" style="margin-top:12px">
         	<div class="containter-fluid">
	         	<div class="row">
							<div class="col-sm-6">			
								<div style="text-align:left;padding:10px 5px">
									<a href="directory.php" target="_parent" title="Employee Phone Directory" class="smBtn">EMPLOYEE DIRECTORY</a><br><br>
									<a href="contact.php" target="_blank" title="Opens Email Form in a New Window or Tab">REPORT BUGS</a> | <a href="help.html" target="_blank" title="WIP Support">HELP</a>
								</div>
							</div>							
							<div class="col-sm-6">
								<div style="text-align:right;padding:20px 5px 10px 5px">
									App ver. <?php include(__DIR__.'/backup/ver.php') ?>. <br>2015 - <?php echo date('Y') ?> &copy; Custom Sign Center, Inc. -- All Rights Reserved.
								</div>
							</div>
						</div><!-- /row -->
					</div>         	
         </div>
				<div class="blocker hide">
     	<div id="modal" class="modal">
          <button class="smBtn" onclick="modalClose(this)">Close</button>
          <button class="smBtn" onclick="printAnyElement('modal')">Print</button>
					<span style="margin: 3px 12px">
						<!-- if the user is an admin, they can rearrange the jobs in the cell -->
						<?= $modalAdminTools ?>
					</span>
      </div> 
	</div>
	<div id="printSection"><!--loads with printable domClone --></div>
    <img class="hide" id="wait" src="assets/preloader_blue.png" />
</div>
<!-- load appropriate js based on authenticated user's role. -->
<script src="assets/<?php echo $roleBasedJsFile ?>" type="text/javascript" charset="utf-8"></script>
<script  src="assets/pickadate.js-3.5.6/picker.js" type="text/javascript" charset="utf-8"></script>
<script src="assets/pickadate.js-3.5.6/picker.date.js" type="text/javascript" charset="utf-8"></script>
<script src="assets/clipboard.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/assets/jquery.marquee.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	/* this is for marquee scrolling text: Company News */
	/*$(function(){
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
	});	*/
</script>
<script>
	var role; //  e.g., admin, mgr
	var curCompany; 
	var ses;
	(function(){
		/* global scope vars */
		ses = '<?php   echo json_encode($ses); ?>';
		role = '<?= $role; ?>'; //  e.g., admin, mgr		
		curCompany = <?= "'".$curCo."'" ?>;
	})();	
	var coID = <?= $_SESSION['user']['company']; ?>;
	var userID = <?= $_SESSION['user']['userId']; ?>;	
</script>
<script src="<?php echo auto_version('assets/common.js?v=7'); ?>" type="text/javascript" charset="utf-8"></script>
<script src="assets/draggable.js" type="text/javascript" charset="utf-8"></script>
<div id="copyemails" style="height:0px;width:0px;margin:0px;overflow:hidden;">'christina@customsigncenter.com','dale@customsigncenter.com','dan@customsigncenter.com','debbie@customsigncenter.com','doug@customsigncenter.com','eric@customsigncenter.com','james@customsigncenter.com','jeff@customsigncenter.com','jreed@customsigncenter.com','judy@customsigncenter.com','justin@customsigncenter.com','mary@customsigncenter.com','michael@customsigncenter.com','sam@customsigncenter.com','scott@customsigncenter.com','tturner@customsigncenter.com','teryl@customsigncenter.com','tim@customsigncenter.com'</div>
<div id="print" class="hide" style="font-size:15px"></div>
<div style="visibility:hidden;padding:0;margin:0;height:0" id="hiddenClipboard"></div>
<div class="hide" id="overlay">
	<div id="modalForm" style="text-align:center">
		<button class="smBtn" onclick="formModalClose()">Close and Cancel</button><br>
		<p>All Fields Are Optional.  Your Input Will Be Appended to The Default Message.</p>
		<label>Sender's Email Address</label><br><input name="fromEmail" type="email" /><br><br><br>
		<label>Comments</label><br><textarea name="message" type="email" ></textarea><br><br>
		<button class="smBtn" onclick="userEmailInput()">Send Email</button>
	</div>
</div>
</body>
</html>