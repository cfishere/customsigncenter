/* ver 1.5.3
*  Chris Nichols. chris@customsigncenter.com *
*/	
	var weeksDOM = document.querySelectorAll("div#weeks");
	var headerYr = document.getElementById("#headerYr");
	var timeoutID;
	var originalContent='';
	var content;
	var newContent = '';
	const appDateTime = new Date();
	var appDisplayDate = appDateTime.getMonth()+1+"/"+appDateTime.getDate()+"/"+appDateTime.getFullYear();
	var curMonthCounter; //prev/next calendar month counting : increment/decrement
	var lastEditedCell=[];
	var redo=[];	
	var redoObj;
	var year;
	var month; //integer
	var theDate;
	var editableLI; //the active/current right-clicked LI obj that contextmenu will style.
	var todayOrdinalCell; //integer of the cell count for today's date.
	var changes=[];
	var responseMonth; //the most recent month html / data sent by php
	
	var listElements = []; //all the list elements that hold job entries
	var boxIDs = ['t0','t1','t2','t3','t4','t5','t6','t7','t8','t9','t10'];
	var modalSource;
	var modalContent;
	var monthName = ["OccupyZeroPosition-PlaceHolder","January","February","March","April","May","June","July","August","September","October","November","December"];
	var dateParts;
	var $icon = '<i class="p1"></i><i class="p2"></i><i class="p3"></i><i class="p4"></i>';
	var teamHTML='';
	var $usr;
	// for rollback purposes; data reporting to user view.
	var historicUpdates = {};
	// holds all user changes in an object; applied to remote xml if a save operation is called.
	var pendingUpdates = {};
	var teamAssignment = [];
	var assignLabels = [];
	iconSet={ups:"ic-ups",unassigned:"ic-flag",trip:"ic-i-ret-trip",crane:"ic-i-crane",crew:"ic-users",parts:"ic-cog",comp:"ic-i-comp-alt",inv:"ic-i-comp-inv",info:"ic-p-inf",inspr:"ic-p-insp-req",inspa:"ic-p-insp-appr",pappr:"ic-p-appr",prmt:"ic-asterisk",warranty:"ic-shield"};
// obj for one-place-editing of icon assignments
// construct the iconographic legends map and user action menus:
iconAssignments={"Custom Sign Center":{1:"Will",2:"Ali",3:"Mary",4:"Marshall",5:"Jack",6:"SubInstall",7:"CSC Transp",8:"Shipping",9:"Cust PU",10:"UPS/ic-ups",11:"UnAssigned/ic-flag",12:"Warranty/ic-shield"},"Outdoor Images":{1:"Chad",2:"Marvin",3:"Ash",4:"Tom",5:"Pat",6:null,7:"Rec CSC Transp",8:"Rec Shipping",9:"Cust PU",10:"UPS/ic-ups",11:"UnAssigned/ic-flag",12:"Warranty/ic-shield"},"Marion Signs":{},"Boyer Signs":{},"JG Signs":{}};
    
 	// str to build HTML of team icon checkboxes
	var teamIconsDisplay='';

	var justReloaded = 0;
	//add/remove jobs that are marked 'overdue' so they can be output to the view in designated areas.
	var overdueJobs = [];
	
	//2 idle user globals
	var IDLE_TIMEOUT = 900; //15 mins
    var _idleSecondsCounter = 0;  
	
	
	//url parameters
		//user's company access rights.  "developer" has no admin user session token or company restrictions.
	var userCompany;

	
	
function BrowserDetection() {
    //Check if browser is IE
    if (navigator.userAgent.indexOf('MSIE') > -1) {
        // insert conditional IE code here
		alert("Internet Explorer is NOT recommended for the Calendar. Install and Use FireFox or Chrome Instead.");
    }/*
    //Check if browser is Chrome
    else if (navigator.userAgent.search("Chrome") & gt; = 0) {
        // insert conditional Chrome code here
    }
    //Check if browser is Firefox 
    else if (navigator.userAgent.search("Firefox") & gt; = 0) {
        // insert conditional Firefox Code here
    }
    //Check if browser is Safari
    else if (navigator.userAgent.search("Safari") & gt; = 0 & amp; & amp; navigator.userAgent.search("Chrome") & lt; 0) {
        // insert conditional Safari code here
    }
    //Check if browser is Opera
    else if (navigator.userAgent.search("Opera") & gt; = 0) {
        // insert conditional Opera code here
    }*/
}

function clearAlert() {
  window.clearTimeout(timeoutID);
}

$(document).ready(function (){	 
	$usr = $("#username").text();	
     
	
/*
	var today = new Date(); 
	var cDate = today.getDate(); //current date.
    	var m = today.getMonth()+1; //month is zero-based (+1)	
    	var y = today.getFullYear();
	// 01_31_2016	for hiddne POST field.
	var cD = m+"_"+cDate+"_"+y;
	//display the date 01/31/2016
	var formatedDate = m+"/"+cDate+"/"+y;
	$("#curDate").html(cD);
	$("#date").html(formatedDate);	
	
	//get the time:
      var hours = today.getHours();
      var minutes = today.getMinutes();
	 if (minutes.length < 2){
		 minutes = "0"+minutes;
	 }
	 //no leading zeros for minutes less than 10.
	 //fix:
	  if(minutes < 10){
		 minutes = "0"+minutes;
	 }	 
	 
      var period = "AM";
      if (hours > 12) {
         period = "PM"
      }
      else {
         period = "AM";
     }
	var cTime = hours+":"+minutes+" "+period;
	$("#curTime").html(cTime);
*/


	var weekRows = $( "#weeks .calRow" ); //each row
	//dispay the cal from xml when page first loads
	

	 document.onkeypress = function() 
	 {
	    _idleSecondsCounter = 0;
	 };
	 document.onclick = function() 
	 {
	    _idleSecondsCounter = 0;
	 };
	 document.onmousemove = function()
	 {
	    _idleSecondsCounter = 0;
	 };

	 window.setInterval(CheckIdleTime, 2000); //checks every 2 seconds
	
	$('#companyCalendar').on('change', function() {
  		changeCompanyCalendar();
	});	
	
	curCompany=$( "#companyCalendar option:selected" ).val();
	
	loadCalendar(curCompany,-1,-1);
	
	$("#pageTitle").html(curCompany + " WIP Calendar");
	
	
	
	$("#btnPrev").on('click', function(){		
		displayNewMonth('prev');		
	});	
	
	$("#btnNext").on('click', function(){	
		displayNewMonth('next');		
	});

	 //printing calendar
  $("#btnPrint").on("click", function () { 
 		cleanCalendarLayout();
		printWindow();          
   });
  
	//toggle show/hide user list.
	$( "button#tglUserList" ).click(function() 
	{
  		$( "#authenticatedUserList" ).slideToggle( "slow" );
	});  
  

  /*
 	// slide open or close the select list form to choose company directories:
	// callback toggleText will update the instructional text with 'Show ' or 'Hide '
	$("#overdueReveal").click(function(){
    	if( $("#overdueJobsList").css("height") === '50px')
			{
				$("#overdueJobsList").css("height", "auto");				
				
			}	else {				
				$("#overdueJobsList").css("height", "50px");
				
			}		
		toggleText();
	});
   
	*/   
   
   justReloaded = 1;  
   timeoutID = window.setTimeout(addListenersToDom, 1100);
   $("#date").html(appDisplayDate);
	
}); 

/*  END DOC READY ***********************************************************************/


//callers set status to 'start' or 'end';
function wait(status){
	if(status=='start') 
	{ 
		$( "#wait" ).removeClass( "hide" );
		setTimeout(function(){  }, 500);
	}
	else 
	{ 
		$( "#wait" ).addClass( "hide" ); 
	}
}

function updateTime(){  	
	formattedDateTime = new Date();	
	$("#curTime").html(formattedDateTime.toLocaleTimeString('en-US'));
}
updateTime();
setInterval(updateTime, 1000);

function recreateCheckboxListeners() {
	// add listeners to the checkboxes to select the team entries to show or hide
	 // array of inputs - "toggle show / hide" input checkboxes array
	var checkboxes = $("#second-chkbx-wrapper,#checkboxWrapper").find("input");
	
	 console.log(checkboxes);
	
	 $(checkboxes).each(function(i,box){
		 //change listener for each checkbox
		 $(box).on("change", function() {
			 //alert('Checkbox status changed!');
			 //which box changed? Answ = this
			 //which box changed? Answ = this
			 var chkBoxName = $(this).attr('name');
			 var chkBoxId = $(this).attr('id');
			 var ptrn =new RegExp(/^(?:ic-).*$/); //for finding prefix 'ic-' for icon-related chkbxes
			// alert('the checkbox id is ' + chkBoxId);
			 
			 if( $(this).is(':checked') ) {	
			 	// we need to show these if they are hidden				
				// find each li in the DOM with a class matching the checkbox's chkBoxName.
			
				//First: does the checkbox name attr begin with 'ic-'? (ic-cog, etc.)			
				if( ptrn.test(chkBoxName) === true )
				{
					//this is an icon job.
					hideShowIconJob(chkBoxName,true);
				} 
				else 
				{
					//hideShowTeamJob
					for( var i = 0; listElements.length > i; i++ ) 
					{	
						if($(listElements[i]).hasClass(chkBoxName))				  		
						{
							$(listElements[i]).removeClass("hide");
						} 
					 }//end for
			   }//else (team job)
			 }
			 else //change is an uncheck (so hide it)
			 {
				 //First: does the checkbox name attr begin with 'ic-'? (ic-cog, etc.)			
				if( ptrn.test(chkBoxName) === true )
				{
					//this is an icon job.
					hideShowIconJob(chkBoxName,false);
				} 
				else 
				{
					for( var ndx = 0; listElements.length > ndx; ndx++ ) 
					{	
						if($(listElements[ndx]).hasClass(chkBoxName))				  		
						{
							$(listElements[ndx]).addClass("hide");
						}		
					}
				}
			 }
		 });		 
	 });
}

function recreateEditJobsListeners() {
	var editboxes = document.getElementsByClassName('edit');	 
	// alert("editboxes is: " + editboxes);

	 $.each(editboxes, function(i, elem){		 

		 //var dateBox = editboxes[i].parentNode; //parent of the edit box.
		//evt.stopImmediatePropagation();stopPropagation()
		// if(  )
		if( typeof isAdmin !== 'undefined' )
		{
			editboxes[i].addEventListener('dblclick', startEdit, true);
			bindListeners4EachList(elem);
		}
		listsIntoObjects(elem,i);
	 });	
}

function addListenersToDom(showTeamsBool)
{
	 //set teamnames into the icon checkboxes HTML for curCompany;
    renewTeamIconCheckboxDispaly();

    // ability to edit jobs and add notes belongs to Admins only:
    //Add event listener 'dblclick' for admin users to edit the jobs:
	recreateEditJobsListeners();
	 
			 
	//recreate eventlisteners for the checkbox displays
	recreateCheckboxListeners();
	 
	 //remove hide class from any hidden LI elements with a new loading of the page.
	 if(justReloaded === 1)
	 {	//reset the toggling variable to false
		
		 
		  //this func needs a delay so calling here, not in the doc ready.
		 
		 wait('start');
		 onloadSetOverdueDisplay();	
		 wait('end');
		 justReloaded = 1;
	 }
	 
	   //hide the first and last div in each .row (sundays and saturday columns)
/*    var eachMonth =  $("#weeks").find(".month");
    $(eachMonth).each(function(i,el)
    {	 
	   var $monthRow = $(el).find(".row");	   
	   $($monthRow).each(function(i2, row){
		   var div1 = $(row).children("div:eq( 0 )");
		   var div2 = $(row).children("div:eq( 6 )");
		  //DON'T HIDE WEEKENDS ANYMORE
		   //$(div1).addClass("hide");
		  // $(div2).addClass("hide");
	   });	  
    });	*/
    //remove hide class
    if(showTeamsBool === "true"){
    	    teamsShowAll(); 	    
    }
}

// assign each lineEntry LI to the global listElements Obj
function listsIntoObjects(eachUL,i){ 
	//convenience global obj to hold all job entry LI's on the page; used for show specific jobs by team
    var liObj = $(eachUL).find("li");	
    $(liObj).each(function(ct, liItem) {
	    listElements.push(liItem);	   
    });
	
}
	
	
//idle user function:
function CheckIdleTime() {
    _idleSecondsCounter++;
    var oPanel = document.getElementById("SecondsUntilExpire");
    if (oPanel)
        oPanel.innerHTML = (IDLE_TIMEOUT - _idleSecondsCounter) + "";
    if (_idleSecondsCounter >= IDLE_TIMEOUT) {
        var answer = confirm("You've been idle 15 mins.\nPlease click OK to continue session.\nTo close this session click Cancel.");
        if (answer) 
        {
            //document.location.href = "login.php";   
            _idleSecondsCounter=0;
        }
        else{
            //window.open('', '_self', ''); window.close();
            document.location.href = "login.php";
        }

    }
 }


function loadCalendar(co, m, y){	
	//reset the overdue jobs obj to empty.
	overdueJobs = [];
	$("#overdueJobsList").html('');
	if(typeof co === 'undefined') { co = curCompany;}
	wait('start');
	var today = new Date(); //date obj
	var cDate = today.getDate(); //current date.
	
	//if month and yr not passed in...
	if(m<0){//set month to cur month		
		m = today.getMonth()+1; //month is zero-based (+1)
	}
	if(y<0){//set year to cur year .. by default, load cur yr on first load.			
		y = today.getFullYear();		
	}
	
	
	//date = current date to highlight, month=req mo, year=req yr.
	var data = {"content":'',"year":y,"month":m,"theDate":cDate,"company":co,"method":"display"}; 
	
	$.ajax({	
		  url : "classes/calendar.php",
		  type: "POST",
		  data : data,
		  dataType:"json",
	   success: function(respData, textStatus, jqXHR)
	   {
		   wait('end');
		 //debug:
		 /* console.log('respData was: ' + respData);*/
		  theDate = respData.theDate;
		  year = respData.year;
		  month = respData.activeMonthNumber;
		  curMonthCounter = month;
		  //monthName = respData.activeMonthName;	
		 
		  todayOrdinalCell = respData.activeOrdinalCell;
		 $("#weeks").html(respData.html);
		 //for "undo all" operations, preserve copy of html
		 var respDataHtml = toString(respData.html);
		 $("#yr").html(year);
		 $("#yr").attr('ordinal', year);
		 $("#mo").html(monthName[month]);		 
		 $("#mo").attr('ordinal', month);
		 //the company the user has access rights for:
		 // "developer" = no user session; user is within the /dev directory. No 'admin' login blocking applies.
		 userCompany = respData.userCompany;
		 //$(".month").attr('yr', year);	 
		 
	   },
	   error: function (jqXHR, textStatus, errorThrown)
	   {
		  wait('end');
	   }	
  	});
	timeoutID = window.setTimeout(addListenersToDom, 300);	
	justReloaded = 1;
}

function giveNotice(message){
	
	$( "div#message" ).fadeIn( 'slow', function(){
	    $( "div#message" ).css("display", "inherit");
	    $( "div#message" ).css("padding", "12px");
	    $( "div#message" ).css("height", "auto");
	    $( "div#message" ).html("<p>"+message+"</p>");
	}).delay( 1600 ).fadeOut('slow' );
	$( "div#message" ).css("display", "none");
	$( "div#message" ).css("padding", "0px");
	$( "div#message" ).css("height", "0px");
}

//form buttons' functions
function clearCache(){	
	caches.keys().then(cs=>cs.forEach(c=>caches.delete(c)));
}

function teamsShowAll(){
	
	//only show all if the modal popup is not visible.
	
	if( $('#modal').is(":visible") === false ){	
		
		//check boxes for our job status icon items need checks restored to checkboxes		
		var JobStatusInputsWithCheckboxes = $(".j, #second-chkbx-wrapper").find("input");
		$(JobStatusInputsWithCheckboxes).each(function(){
			//uncheck ea box
			$(this).prop('checked', true);				
		});
		
		//show all team-assigned jobs
		$(listElements).each(function(i,entry)

		{
			//outputs <span id="job_98592">98592</span> WEN #05802 WO 98592 Parsippany, NJ
			$(entry).removeClass('hide');
		});

		var TeamChkBoxes = $("#teamSelection").find("input");
		$(TeamChkBoxes).each(function(x,box)
		{

				$(box).prop("checked", true);

		});
	} else {
		return false;
	}
}
	
function teamsHideAll(){
	//this.preventDefault();
	//alert('hide called');
	
	//hide every li item that contains an span->i-> with class begining with "ico-"	
	//and any checkbox controllers in the secondary column checkboxes #second-chkbx-wrapper
	var JobStatusInputsWithCheckboxes = $(".j, #second-chkbx-wrapper").find("input");
	$(JobStatusInputsWithCheckboxes).each(function(){
		//uncheck ea box
		$(this).prop('checked', false);
		var iconName = $(this).attr("name");		
		hideShowIconJob(iconName,false);		
	}); //done hiding all icon-assigned jobs
	
	//hide all team or ship assigned jobs:
	$(listElements).each(function(x,listItem)
	{  
		if( $(listItem).parent().hasClass('edit') ){			
			$(listItem).addClass('hide');
		}
	});	
	
	//alert ("teams hide all has been called");
	var TeamChkBoxes = $("#teamSelection").find("input");
	//var lengthOf = TeamChkBoxes; 
	//alert("length is " +lengthOf);
	$(TeamChkBoxes).each(function(d,cBox)
	{
		//if($(cBox).is("checked")){
			//alert("trying to uncheck a box");
			$(cBox).prop('checked', false);
		//}
	});
}

//the pencil icon button click = clickedObj
/**
 * Displays content in a modal window
 * @param node obj clickedObj, button
 * @param str displayType; a 'day' or a 'week' of days.
 * @return calls addListenersToDom to refresh listeners
 */
function modalOpen( clickedObj, displayType ) {

	// Common housekeeping to both display types:
	if( typeof dragEditing !== 'undefined' ){
		dragEditing = "OFF";		
	}
	//if search results open, hide them.
	hideSearchResult();		
	//if there is an opened contextMenu popup, remove it first.
	if(typeof isAdmin !== 'undefined')
	{
		if( $('#divContextMenu').is(":visible") )
		{
			$('#divContextMenu').remove();
			$(document).find('.context-style').removeClass('context-style');
		} 
	}

	var $m = $(clickedObj).closest(".month");

	/* 
	 * displayType = 
	 * case: 'day', clone HTML as an editable node (isAdmin Only).
	 * case: 'week', display week HTML, not editable, add a print button.
	 * */
	
	if( displayType === 'day' )
	{			
		//to prevent duplication to same date of different months 
		//after closing the modal, must know NOT ONLY the modalId 
		//of the date cell but also the month and year of the cell.		
		
		modalContent = $(clickedObj).parents('.date').children('ul');	
		var numerMonth = $($m).attr("ordinal");		
		var numerYr = $($m).attr("yr");
		$(modalContent).attr('ordinal',numerMonth);
		$(modalContent).attr('yr',numerYr);
		
		var numerDate = $(modalContent).attr('modalid').replace('d','');
		//will result in, ex: <ul modalid="d3" ordinal="5" yr="2017">
		//in the modal div, for a date of May 3rd, 2017 from the calendar.
			
		//display the date in the modal popup.
		var cellDate = '<span class="cursive" style="float:right;font-size:17px;color:#8AC72D">' + 
		numerMonth + '/' + numerDate + '/' + numerYr + '</span>';
		
		if( typeof isAdmin !== 'undefined' )
		{
	    	$( modalContent ).clone(true, true).appendTo( "#modal" );
	    }
	    else
	    {
	    	$( modalContent ).clone(false, false).appendTo( "#modal" );
	    }	
		$("#modal").prepend(cellDate);
	}
	else if( displayType === 'week' )
	{
		//display the week and print button.		
		modalContent = $(clickedObj).closest(".calRow");
		var mo = $($m).attr("ordinal");
		var yr = $($m).attr("yr");
		var modalTitle = $(clickedObj).attr("id") + " for "+ mo +" / "+yr; //something like Week-1		
	
		
		//display the year month title in the modal popup.
		modalTitle = '<span class="cursive" style="float:right;font-size:17px;color:#8AC72D">' + 
		modalTitle + '</span>';
		

		//when closing the modal window, we don't want to remove
		//the cloned original html, since we are not going to replace
		//it with any edits, so identify this week view modal from
		//a date view modal with a class: 'weekView'
		$("#modal").addClass('weekView');
	    $( modalContent ).clone().appendTo( "#modal" );	
		$("#modal").prepend(modalTitle);
		$("#modal").css('width', '95%');
		$("#modal").css('height', 'auto');
		//not editing in this modal so hide some tools:
		$("#modal .dragImg").addClass('hide');
		$("#modal .addNewLine").addClass('hide');
		$("#modal .modalImg").each(function()
		{
			$(this).addClass('hide');
		});
	}
	$('.blocker').removeClass('hide');
	$('.blocker').css('opacity',0).animate({opacity: 1}, 10);	
	//required to run add listeners again to preserve the onclick editable events for lists
	addListenersToDom("false");
	
}

function modalClose(clickedObj)
{
	//obj clicked is a button within the open #modal element
	//model el's content child has attr of 'modalid'.
	//that unique modalid is the same as the class name of the
	//original content wrapper.  so val = attr('modalid'); 
	//so original content wrapper in the DOM can be located as: '$(getElementsByClassName(val)).html()';
	
	//if contents of ul with attr modalid = (ex: 'd8') 
	//does not equal contents of the modal (i.e., modal contents edited by user),
	//then modalSave is called before close the modal window.
	
	//call rearrangeJobs to remove drag icons from LI's and remove drag classes from UL & LI.
	//dragEditing is only defined in the admin.js file
	if( typeof dragEditing !== 'undefined' ){
		dragEditing = "ON";
		rearrangeJobs(clickedObj);
		
	}
	
	$("#modal").removeAttr("style");

	
	//this element is common to all types of modal content:
	$('#modal > span.cursive:first').remove();	
	$('#modal').find('li.context-style').first().removeClass('context-style');
	//prevent closing of modal while a context action menu is displayed.
	if( typeof isAdmin !== 'undefined')
	{		
		if($("#divContextMenu").is(':visible'))
		{
		  	alert("Close This Popup before Exiting.");
			return;	
		} 
	}		

	//if this is a week view, the clone's original html should not be removed/replaced
	if( $("#modal").hasClass('weekView') )
	{
		//anything inside of #modal that has class hide, needs to have that removed:
		$("#modal").find('.hide').each( function()
		{
			$(this).removeClass('hide');
		});
		$("#modal").removeClass('weekView');
		//remove the content from the modal html:
		$('#modal > div.calRow:first').remove();

		modalSource = '';
		$('.blocker').addClass('hide');
		return true;
	}
	
	var modalUL = $("#modal").children("ul.edit");
	var objMonth = $(modalUL).attr('ordinal');
	var objYear = $(modalUL).attr('yr');
	// the dom object to save changes to in the calendar.
	var saveTarget;
	var modalId = $(modalUL).attr('modalid'); //used to locate the original UL in the DOM

		    if( typeof isAdmin !== 'undefined' )
		    {
		    	$( modalContent ).replaceWith( $( modalUL ).clone(true, true) );
		    }
		    else
		    {
		    	$( modalContent ).replaceWith( $( modalUL ).clone(false, false) );
		    }
	   		// add listeners afresh to the calendar target UL, modalContent:	   		
	   		$(modalUL).remove();	  
			modalSource = '';
			$('.blocker').addClass('hide');
			addListenersToDom("false");
		   
		
}

function modalSave(destination, source)
{
	if( typeof isAdmin !== 'undefined' )
	{
		//clone it back to the source with event listeners intact.
		//need to add in your contextmenu event handler.  Clone could not 
		//copy those for some reason:
		destination.html(source);
		 $.each(destination, function(i, elem){		 
			destination[i].addEventListener('click', startEdit, true);
			if(typeof isAdmin !== 'undefined')
			{
				bindListeners4EachList(destination);
			}
		 });	 
	 }			
}

function hideSearchResult(){
	if( $('#srchResult').is(':visible') ) {
		$( '#srchResult').empty();
		$("#search").val('');
		$('#srchResult').addClass('hide');		
	}
}

//back and forward through the month navigation
function displayNewMonth(action)
{
	wait('start');
	var allMonths = $(".month");
	
	if(action==='next') //display next month
	{
		// parseInt(month); //global cur mo as string (e.g. "7" for July). Convert to int. for math.		
		// Check 1st if there is HTML available for job listings for the next month being requested
		// if ! class="month" ordinal="12" (if the DOM does not find that attr == to month+1 (12), 
		// then giveNotice that there is no job scheduled in that month yet.
		// +1 for next, -1 for previous month being requested.	 We need to track YEAR as well for multiyear navigation.	
				
		if( parseInt(month) < 12 ){ //stay on the same year.
			var nextMonth =  String(parseInt(month) + 1);
			var validMonth = monthHTMLexists( allMonths, nextMonth, year ); //does next mo exist in the DOM?
		    if( validMonth !== 'ok'){
			   giveNotice('<span style="color: #FF0000">There is No Job Data Stored for that Month.</span>');
			   wait('end'); //hide the animated processing graphic
			   return; //get outta town
		    }			
			$(allMonths).each(function(i,mo){
				/* hide all.. except the one we are nav to */
				$(mo).addClass("hide"); 
				if($(mo).attr("ordinal") == nextMonth && $(mo).attr("yr") == String(year) ){
					$(mo).removeClass("hide");
					month = String(nextMonth); //set the month var to the new month displayed.
					curMonthCounter = month;
					 //$("#mo").html(monthName);
					$("#mo").html(monthName[month]);
					$("#mo").attr("ordinal",month);
					$("#mo").removeClass("hide");					
				} 
					
			});
			wait('end'); //hide the animated processing graphic
			   return; //get outta town
			//loadCalendar(curCompany, month, year);
		} 
		else //the month is dec (12)
		{ //need to roll over to next yr
			//all .month, ordinal month to search DOM, yr attrib val to seach DOM		
			var validMonth = monthHTMLexists( allMonths, "1", String( parseInt(year) +1 ) ); //does next mo exist in the DOM for the year requested?					
		   	if( validMonth !== 'ok'){
				//there is not a DOM element for that year/mo combination.			   	
			   	giveNotice('<span style="color: #FF0000">There is No Job Data Stored for that Month.</span>');
			  	wait('end'); //hide the animated processing graphic
			   	return; //get outta town
		   	} else {
				nextMonth = "1";
				year = String( parseInt(year) +1 );				
				$(allMonths).each(function(i,mo){				
				    /*if($(mo).attr("ordinal") == "12"){ //this is the current month we want to hide.
					    $(mo).addClass("hide");
				    }*/
				     /* hide all instead.. except the one we are nav to */
				    $(mo).addClass("hide");   
				    
				    if($(mo).attr("ordinal") == nextMonth && $(mo).attr("yr") == String(year)){
					    $(mo).removeClass("hide");
					    month = String(nextMonth); //set the month var to the new month displayed.
					    curMonthCounter = month;
						//$("#mo").html(monthName);
					    $("#mo").html(monthName[month]);
					    $("#mo").attr("ordinal",month);
					    $("#mo").removeClass("hide");	
					   $("#yr").html(year);
					   $("#yr").attr('ordinal', year);		 			 
					   //$(mo).attr('yr', year);						
				    } 					
			}); 			   						
			    wait('end');
			    return;
			}// else is a valid month/yr combo in the DOM
		}		
	} //if nav is "next" month
	else //action is to display the 'prev' month
	{		
		if( parseInt(month) > 1 ){
			//no need to roll back the year
			var nextMonth = parseInt(month) - 1;
			var validMonth = monthHTMLexists( allMonths, nextMonth, year ); 
			//does next mo exist in the DOM for on the year requested?					
		   	if( validMonth !== 'ok'){
				//there is not a DOM element for that year/mo combination.
				 
			     giveNotice('<span style="color: #FF0000">There is No Job Data Stored for that Month.</span>');
			     wait('end'); //hide the animated processing graphic
			     return; //get outta town
		   	} else {
			    
			    $(allMonths).each(function(i,mo){				
				    /*if($(mo).attr("ordinal") == month){ //this is the current month we want to hide.
					    $(mo).addClass("hide");
				    }*/
				     /* hide all instead.. except the one we are nav to */
				    $(mo).addClass("hide");   				
				    if($(mo).attr("ordinal") == String(nextMonth) && $(mo).attr("yr") == String(year)){
					    $(mo).removeClass("hide");					
					    curMonthCounter = month;
						//$("#mo").html(monthName);
					    $("#mo").html(monthName[nextMonth]);
					    $("#mo").attr("ordinal",nextMonth);
					    $("#mo").removeClass("hide");
				    }
			    });
			    month = String(nextMonth); //set the month var to the new month displayed.
			}//end else is validMonth
		} else if(parseInt(month) == 1) { //need to roll back to prev yr				
			//all .month, ordinal month to search DOM, yr attrib val to seach DOM	
			var prevYr = parseInt(year) -1;	
			var validMonth = monthHTMLexists( allMonths, "12", prevYr ); 
			//does next mo exist in the DOM for the prior year?					
		   	if( validMonth !== 'ok'){
				//there is not a DOM element for that year/mo combination.				 
			     giveNotice('<span style="color: #FF0000">There is No Job Data Stored for that Month.</span>');
			     wait('end'); //hide the animated processing graphic
			     return; //get outta town
		   	} else {
				var nextMonth = "12";
				year = String( parseInt(year) -1 );				
				$(allMonths).each(function(i,mo){				
				    /*if($(mo).attr("ordinal") == "12"){ //this is the current month we want to hide.
					    $(mo).addClass("hide");
				    }*/
				     /* hide all instead.. except the one we are nav to */
				    $(mo).addClass("hide");  
				});
				 $(allMonths).each(function(i,mo){	   
				    if($(mo).attr("yr") == prevYr && $(mo).attr("ordinal") == nextMonth ){
					    $(mo).removeClass("hide");
					    month = String(nextMonth); //set the month var to the new month displayed.
					    curMonthCounter = month;
						//$("#mo").html(monthName);
					    $("#mo").html(monthName[month]);
					   // $("#mo").attr("ordinal",month);
					   // $("#mo").removeClass("hide");	
					    $("#yr").html(year);
					    //$("#yr").attr('ordinal', year);		 			 
					   //$(mo).attr('yr', year);						
				    } 					
			}); 				
			
		}//else validmonth ok
		
	}//else try roll back one year from month 1 to 12
	wait('end');
	var func = addListenersToDom("false");
	window.setTimeout(func, 100);
	
}//else prev
}

// verify DOM contains HTML of job listings for a user navigated month
// allMonths is all DOM els of class "month"
// action is "next" or "prev" nav request 
//the month to check
function monthHTMLexists(allMonths,checkMonth,yr){
	
	 var result = false;	 
	// TODO: Check allMonths is not null, empty
	
	checkMonth = String(checkMonth);	
	$(allMonths).each(function(i,el){
		//get the value from the element's "ordinal" attribute that matches the
		//requested month to navigate to.  If it doesn't exist in DOM, then return false;
		if( $(el).attr("yr") === String(yr) ){
			if(  $(el).attr("ordinal")  === String(checkMonth) ){			
			  //e.g. el looks like: <div class="month" ordinal="10" yr="2016">
			  //we found a DOM el with the requested month and having the same (current) year.
			  result = 'ok';	
			}
		} 
	});
	return result; //if undefined, there is not a DOM for that month+yr
}

function printAnyElement(elemId) {
	$( "#modal" ).clone().appendTo('#print');
	$( "#print" ).removeClass( "hide" );
	$("#print").find('img').remove();
	//$( "#print img.modalImg" ).addClass( "hide" );
	$("#print").find( 'button' ).remove();
	//$( "#print .smBtn" ).addClass( "hide" );	
	 var printArea = window.open('', '_blank', 'scrollbars=yes,resizable=yes,top=20,left=5,height=900,width=1200');
	 printArea.document.write('<html><head><title>Print Request</title><link rel="stylesheet" href="https://customsigncenter.com/calendar/styles/bootstrap.min.css" media="all"><link href="https://customsigncenter.com/calendar/styles/print_1.css" media="print" rel="stylesheet" /> <link rel="stylesheet" href="https://customsigncenter.com/calendar/assets/icomoon/style.css">');
	 printArea.document.write('</head><body id="printBody" style="font-size:14px !important">');
	 printArea.document.write( $( "#print" ).html() );
	 printArea.document.write('</body></html>');
	 printArea.document.close();
	 printArea.print(); 
	 $( "#print" ).empty();	     
	 $( "#print" ).addClass( "hide" );
	$( "#modal img.modalImg" ).removeClass( "hide" );
	$( "#modal button" ).removeClass( "hide" );
	$( "#modal .smBtn" ).removeClass( "hide" );
    modalClose();
}
	
function cleanCalendarLayout(){
	$('#print').empty();	
	 $( "#pageTitle" ).clone().appendTo('#print');	
	 $( "span#date" ).clone().appendTo('#print');			
	 $( "span#curTime" ).clone().appendTo('#print');
	 // to apply clearfix to wrapper of WIP icons, get wrapper of #icons:
	 // #checkBoxWrapper
	// $( "#icons" ).clone().appendTo('#print');
	 $( "#checkboxWrapper" ).clone().appendTo('#print');
	 $( "span#mo" ).clone().appendTo('#print');
	 $( "span#yr" ).clone().appendTo('#print');
	 $( "#headerDays" ).clone().appendTo('#print');
	 $( ".month" ).clone().appendTo('#print');
	//remove ALL img tags
	 $( "#print" ).find( "img" ).remove();	 
	//$( "#print img.modalImg" ).addClass( "hide" );
	$( "#print" ).find("button").remove();
	$( "#print" ).find("input").remove();
}
	
		
// you could use set() which builds on the set only if it does not already exist.
//$('#search').on('keyup',function(){
$('#search').on('input',function()
{
	var searchTerm = $(this).val().toLowerCase();
	var results = [];
	var domObjs = [];	
   //require search terms of 3 chars or more
   if(searchTerm.length > 2)
   { 
	   $('li.lineEntry').each(function(i,list)
	   {
		  if(typeof list !== 'undefined')
		  {
		   	  var lineStr = $(this).text().toLowerCase().trim();
		  }
		   // -1 returned if searchTerm not found in LI string
		  if( lineStr.indexOf(searchTerm) === -1 )
		  {
		  }else{
			  domObjs.push(list); //lineEntry Ojb with matched content			
			  results.push(lineStr);

		  }	//else	   
	   }); //each
		
		// output to the view	
		if(domObjs.length>0)
		{			
			$('#srchResult').removeClass('hide');			
			$( '#srchResult').empty(); //clear out displayed results with each on.input		
			
			var br =  document.createElement( "br" );								
			$( domObjs ).each( function( i,res )
			{	
				
				var thedate = $( res ).parent( '.edit' ).attr( 'modalid' ); //e.g., d21 for the 21st date of a month.	
			  	
				if( typeof thedate !== 'undefined' && thedate.length > 1 )
				{
					thedate = thedate.replace('d', '');
			  		var month = $(res).closest('div.month').attr('ordinal');
					var yr = $(res).closest('div.month').attr('yr');
				  	thedate = month + "/" + thedate + "/" + yr;	
				} // if defined
				
				if( typeof res !== 'undefined')
				{ //  && $(res).html().indexOf(searchTerm) !== -1 					
					
					//$('#srchResult').append( "<div class='result"+i+"' >Date: " + thedate + ", " + $(res).html() ).append("</div><br/>");
					$("#srchResult").append( "<div style='cursor:pointer' class='result"+i+
						"'  >Date: " + thedate + ", " + $(res).html() + "</div>");
					
					
					
					$( document.body ).find('.result'+i).on('click', function() 
					{
						$(res).addClass('context-style');
						//modalOpen($(res).closest('.modalImg'));
						modalOpen(res, 'day');
					});
				}				
				
			});  // each results				
					
		}//if domObjs has members
		else 
		{
			hideSearchResult();
		}	
				   
    }//end if search term > 2
	else 
	{
		$('#srchResult').removeClass('hide');
		$('#srchResult').html( '[ Search Requires 3+ Characters. ]' )
	}				  			
}); //on.input
		
$('#srchResult').parent('form').on('focusout',function(){			
	if( $('.blocker').hasClass('.hide') ){				
		hideSearchResult();
		$( '#srchResult').empty();			
	}		
});
		
//'<div id="x"><button onclick="saveNote(this,'+listEl+')">Save</button><br><input type="textarea" id="y" value="" /></div>	
	// obj param references dom 'save button', from the above html.
	
		
		//general toggle show hide; param is the target DOM element
		
		function toggleVisibility(target){
			var $t = $(target)
			if( $t.hasClass( 'hide' ) ){
				$t.removeClass( "hide" );
			} else {
				$t.addClass( "hide" );
			}
			
		}
		


//universal confirm / cancel dialog func
function confirmRequest(msg)
{	    
   var r = confirm(msg);
   return r; //returns false if cancel/close or true if ok.	
}




//called on change handler for checkboxes (show hide)
//param chkBoxName = checkbox input attr "name"'s value
//the name should == the class name for each icon
//e.g., name = "ic-cog", etc.
//param checked will be true if this is a checkmark (show)
//and false if it is unchecked (hide)
function hideShowIconJob(chkBoxName,checked){
	//Error: Syntax error, unrecognized expression: i .ic-i-ret-trip"
	var iconsToHide = "i."+chkBoxName; //set it as a class with a dot so eg i.exp
	var iconMarkedJobs = $("#calWrap").find(iconsToHide);	
	if(checked === true)
	{
		$(iconMarkedJobs).each(function(ndx, domObj){
			$(this).closest('li.lineEntry').removeClass('hide');
		});
	}
	else
	{
		$(iconMarkedJobs).each(function(ndx, domObj){
			$(this).closest('li.lineEntry').addClass('hide');
		});	 							   
	}	
}

function printWindow(){
	
	//cleanWindow is called before this.  It already has placed the calendar html into
	//the div#print and hidden images, etc.
	$( "#print" ).removeClass( "hide" );
	 var printWindow = window.open('', '', 'scrollbars=yes,resizable=yes,top=20,left=5,height=900,width=1200');
	 printWindow.document.write('<html><head><title>Print Calendar</title><link rel="stylesheet" href="/calendar/styles/bootstrap.min.css" media="all"><link href="/calendar/styles/print_1.css" media="print" rel="stylesheet" /> <link rel="stylesheet" href="/calendar/assets/icomoon/style.css">');
	 
	 var $editULs = $("#print").find(".edit");
		
	//hide empty ul.edit -- this works, but the calendar does not really save any space
	//with the current layout used for printing.
	/*	$( $editULs ).each(function(i,ulEl){
			
			if( $(ulEl).find('li').length < 1){
				$(ulEl).parent('.date').addClass('hide');				
			}
			
		});
	*/
	
	$( $editULs ).each(function(i,ulEl){
		 
		 if( $(ulEl).find('li').length < 1){
			 $(ulEl).parent('.date').attr('style', 'border:none');				
		 }
		 
	 });
 
	 //add clearfix class to wrappers to hold floats on a single line.		
	 var floatWraps = ['#headerDays','.calRow','#teams','.row'];
	 
	 $(floatWraps).each(function(i,el){
		 $('#print ' + el ).addClass("clearfix");
	 });
	 	 
	 printWindow.document.write('</head><body id="printBody">');
	 printWindow.document.write( $( "#print" ).html() );
	 printWindow.document.write('</body></html>');
	 printWindow.document.close();
	setTimeout(function () {
        printWindow.print();
    }, 500);    
	 
	 $( "#print" ).html('');
	 $( "#print" ).addClass( "hide" );
	return false;
	
}	


//tests whether obj is empty returns true if empty.
function onloadSetOverdueDisplay(){	
	
	overdueJobs=[];
	const overdueWrapper = document.getElementById('OverDueJobsList');
	overdueWrapper.innerHTML ='';
	
	wait('start'); //spinner gif indicating busy
	var $overdues = $("#weeks").find("li.due");	
	wait('end'); 
	let checkDuplicateJobNumbers = [];
	$.each($overdues, function(i, d){
		
		//1. list this in the view of overdue jobs.
		// the job number parent span is always the first one in the LI.		
			var jobNmbr = $(this).children('span').first().text(); 
			
			if(checkDuplicateJobNumbers.includes(jobNmbr)){
				return;//skip and continue to the next overdues.
			}
			checkDuplicateJobNumbers.push(jobNmbr);
		//2. get the date of the edited job's UL wrapper's modalid.
			var dayOfMo = $(this).closest('ul').attr('modalid').substr(1); //ex: d10 becomes 10 = date		
			var mo = $(d).closest( ".month" ).attr('ordinal');
			var yr = $(d).closest( ".month" ).attr('yr');			
			var dateObj = new Date(yr+'-'+mo+'-'+dayOfMo);
			var span = document.createElement('span');
			span.setAttribute('style','color: red');
			span.innerHTML = mo + '/' + dayOfMo + '/' + yr;
		//get the job desc text and truncate it to the first 30 chars.
			var desc = $(this).text().slice(0,30);
			var div = document.createElement('div');
			div.append(span);
			div.innerHTML += desc;		
			div.className = "ovrDue";
			div.id = jobNmbr;
			
			
		//concat into a line of text to save as a property of overdueJobs obj.		
		//	var info = '<div class="ovrDue" id="'+jobNmbr+'">' + htmlDate +': '+ desc +'...</div>';
		// using an obj allows a check to see if a repeated job across multiple days is not already
		// entered into the overdueJobs list; anray will not allow for an efficient check of duplicates:
			/*if( overdueJobs.hasOwnProperty(jobNmbr) === false ){
				overdueJobs[jobNmbr] = info;
			}*/
		overdueJobs.push({markup:div, dueDate: dateObj, jobNmbr: jobNmbr});		

	});	
	
	
	//an array of objects.
	if( overdueJobs.length > 0 ){		
		//first erase all the content of the overdue job list in the view:
		$('#overdueJobsList').html('');
		
		//sort by date in descending order:
		const jobs = overdueJobs.sort((a, b) => b.dueDate > a.dueDate ? 1: -1);
		
		//write all the updated overdue jobs to the view:
		//by iterating through the overdueJobs properties:
		
		
		for (var i = 0; i < jobs.length; i++){
			if(jobs[i].hasOwnProperty('markup')){
				if(null !== jobs[i].markup){
					overdueWrapper.append(jobs[i].markup);
				}
			}
		}
	} else {
		// no overdueJobs to output to the calendar view.
		$('#overdueJobsList').html('<p>Excellent! All WIPs are On-Schedule.</p>');
		
	}		
				
	
}
/*isEmpty called to see if the overdue jobs obj is empty*/
function isEmpty(obj) {  
   //check if it's an Obj first
   //check if it's an Obj first
   var isObj = obj !== null 
   && typeof obj === 'object' 
   && Object.prototype.toString.call(obj) === '[object Object]';

   if (isObj) {
       //"var o", simply represents any property at all, no matter its name.
       for (var o in obj) {
           if (obj.hasOwnProperty(o)) {
			// this is not an empty object.
               return false;
               break;
           }
       }
       return true;
   } else {
	   if(obj.constructor.name == "Array"){
		   if(obj.length > 0){
			   return false;
		   }
		   return true;
	   } 
   }
}

/* 
 * build/renew HTML display for team assignment checkbox 
 * On document load / new company calendar selected.
 * toggle show/hide jobs functions:
 */
function renewTeamIconCheckboxDispaly()
{
	//construct company-specific icon assignment displays:
	//the jobAssignment(1, this) function requires an int value
	//sent to it from the Task Menu.
	teamIconsDisplay='<div class="row"><span style="padding-top:12px;float:left; clear:left">Assignment: &nbsp;</span>';
	$.each( iconAssignments[curCompany], function(k,v){
		// the k is the CSS class to use; the value is the label:
		
		if(null !== v){	
			if( parseInt(k,10) < 10 ){
				let br = '';
				/*if(k==7){br = "<br/>";}*/
			teamIconsDisplay += br+br+'<div class="iconrow">'+
					'<input style="float:left" type="checkbox" id="select-'+k+'" '+
						'name="t'+k+'" value="'+k+'" checked="checked">'+
      				'<div class="box-label t'+k+'" id="l'+k+'">'+
					'<li id="t'+k+'" class="t'+k+'" onclick="jobAssignment('+k+', this)" option="'+k+'">'+
					v+'</li></div></div>';	
			} else {
				//this needs to have an icon displayed with the html:
				//v = 'ic- class name/number for t10, select-10, etc'
				var val = v.split("/");				
				/*ups example: "10":"UPS/ic-ups" k:v
				  val[0] = 'UPS'; val[1] = 'ic-ups'; k = 10				
				*/
				teamIconsDisplay += '<div class="iconrow">'+  		
				'<input style="float:left" type="checkbox" id="select-'+k+'" name="'+val[1]+'" value="'+val[0].toLowerCase()+'" checked="checked">'+
				'<div class="box-label" id="l'+k+'">'+
					'<li id="'+val[0].toLowerCase()+'" class="t'+k+'" onclick="jobAssignment(\''+val[0].toLowerCase()+'\', this)" option="'+
						val[0].toLowerCase()+'">'+
						'&nbsp;<i class="'+val[1]+'"></i>'+
						val[0]+
					'</li>'+
				'<!--1--></div>'+
			'<!--2--></div>';
			}
		}		
	});
	
	//add in the JOB STATUS and the PERMIT STATUS rows of Checkboxes:
	teamIconsDisplay += '</div><div class="j row">'+
		'<span style="padding-top:12px;float:left; color:#0d58a1;">Job Status: &nbsp;</span>'+
		'<div class="iconrow">'+
			'<input style="float:left" type="checkbox" id="select-23" name="ic-oups" value="t23" checked="checked">'+
			'<div class="box-label" id="l23"><li id="ic-oups" onclick="jobAssignment(\'oups\', this)" option="oups">'+
			'<i class="ic-oups"></i> OUPS</li></div>'+
		'</div>'+   
		'<div class="iconrow">'+
			'<input style="float:left" type="checkbox" id="select-12" name="ic-i-ret-trip" value="t12" checked="checked">'+
			'<div class="box-label" id="l12"><li id="ic-i-ret-trip" onclick="jobAssignment(\'trip\', this)" option="trip">'+
			'<i class="ic-i-ret-trip"></i> Service</li></div>'+
		'</div>'+
		'<div class="iconrow">'+
			'<div class="box-label" id="l13"><li id="13" '+
			'onclick="jobAssignment(\'crew\', this)" option="crew"><i class="ic-users"></i> 2-Man</li></div>'+
		'</div>'+
		'<div class="iconrow">'+			
			'<div class="box-label" id="l14"><li id="14" onclick="jobAssignment(\'crane\', this)" option="crane">'+
		'<i class="ic-i-crane i-ci-comp"></i> 100ft Crane</li></div>'+
		'</div>'+
		'<div class="iconrow">'+			
			'<div class="box-label" id="l15"><li id="15" onclick="jobAssignment(\'parts\', this)" option="parts"> '+
			'<i class="ic-cog"></i> Part Needed</li></div>'+
		'</div>'+
		'<div class="iconrow">'+
			'<input style="float:left" type="checkbox" id="select-16" name="ic-i-comp-alt" value="t16" checked="checked">'+			
			'<div class="box-label" id="l16"><li id="16" onclick="jobAssignment(\'comp\', this)" option="comp">'+
			'<i class="ic-i-comp-alt"></i> Ready to Invoice</li></div>'+
		'</div>'+
		'<div class="iconrow">'+
			'<input style="float:left" type="checkbox" id="select-17" name="ic-i-comp-inv" value="t17" checked="checked">'+
			'<div class="box-label" id="l17"><li id="17" onclick="jobAssignment(\'inv\', this)" option="inv">'+
			'<i class="ic-i-comp-inv"></i> Collect</li></div>'+	
		'</div>'+
		'<div class="iconrow">'+
			'<input style="float:left" type="checkbox" id="select-24" name="expedite" value="t24" checked="checked" title="Hi-lited GreenYellow, Underlined Red.">'+
			'<div class="box-label" id="l24"><li class="expedite" id="24" onclick="jobAssignment(\'exp\', this)" option="exp">'+
			'Expedite</li></div>'+
		'</div>'+
		'</div></div>';
	
			//PERMITS ROW:
	       teamIconsDisplay += '</div><div class="p row">'+
	'<span style="padding-top:12px;float:left;color:#0f8040">Permit Status: </span>'+
	 '<div class="iconrow">'+				
		'<div class="box-label" id="l18"><li id="18" onclick="jobAssignment(\'info\', this)" option="info"><i class="ic-p-inf">'+
		'</i> Need Info</li></div>'+
	'</div>'+
	'<div class="iconrow">'+					
		'<div class="box-label" id="l19"><li id="19" onclick="jobAssignment(\'inspr\', this)" option="inspr"><i class="ic-p-insp-req">'+
		'</i> Insp. Req\'ed</li></div>'+
	'</div>'+
	'<div class="iconrow">'+
		'<div class="box-label" id="l20"><li id="20" onclick="jobAssignment(\'inspa\', this)" option="inspa">'+
		'<i class="ic-p-insp-appr"></i> Insp. Appr\'d</li></div>'+
	'</div>'+
	'<div class="iconrow">'+
		'<div class="box-label" id="l21"><li id="21" onclick="jobAssignment(\'pappr\', this)" option="pappr" title="Prmt Completed or Not Required">'+
		'<i class="ic-p-appr"></i> Done/Not Needed</li></div>'+
	'</div>'+
	'<div class="iconrow">'+
		'<input style="float:left" type="checkbox" id="select-22" name="ic-asterisk" value="t22" checked="checked">'+
		'<div class="box-label" id="l22"><li id="22" onclick="jobAssignment(\'prmt\', this)" option="prmt">'+
		'<i class="ic-asterisk"></i> Prmt Only</li></div>'+
	'</div></div>';
	$('#teams').html('');
	$('#teams').html(teamIconsDisplay);	
}


function changeCompanyCalendar() {
		
		justReloaded = 1;
		curCompany=$( "#companyCalendar option:selected" ).val();
		$("#pageTitle").html(curCompany + " WIP Calendar");
		if(  typeof teamNamesHTML === 'function' ){
			teamNamesHTML();
		}
		loadCalendar( curCompany,-1,-1 ); //load calendar calls addListenersToDom func.
}