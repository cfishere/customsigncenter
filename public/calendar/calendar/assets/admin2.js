/*admin2.js
* ver 1.5.4
*  Chris Nichols. chris@customsigncenter.com *
*/
var emails = '<div id="copyToClipb">chris@customsigncenter.com;<br>debbie@customsigncenter.com;<br>doug@customsigncenter.com;<br>james@customsigncenter.com;<br>jacob@customsigncenter.com;<br>alyson@customsigncenter.com;<br>jreed@customsigncenter.com;<br>judy@customsigncenter.com;<br>mary@customsigncenter.com;<br>sam@customsigncenter.com;<br>scott@customsigncenter.com;<br>tturner@customsigncenter.com;<br>teryl@customsigncenter.com;<br>tim@customsigncenter.com</div>';
var isAdmin = true; //this is 'undefined' if only the common.js loads (ie. guest's view)
var dragEditing = "OFF";
var dragIconArray = [];
var contextMenu; //this is a mini html popup options menu for editing jobs	
var menuDisplay = '<div id="divContextMenu" style="display:none">'+ 
	'<input id="reschedule" type="text" placeholder="reschedule" />'+	
	'<div class="nav-container"><nav class="navbar"><ul id="ulContextMenu">'+	
	'<li id="t0" onclick="jobAssignment(0, this)" option="0" style="text-align:right;color:red">x Close</li>';
	/* for testing only var emailRecipientsCSC = ['chris@customsigncenter.com']; */
var emailRecipientsCSC = ['debbie@customsigncenter.com','doug@customsigncenter.com','eric@customsigncenter.com','james@customsigncenter.com','jreed@customsigncenter.com','judy@customsigncenter.com','mary@customsigncenter.com','jacob@customsigncenter.com','alyson@customsigncenter.com','sam@customsigncenter.com','scott@customsigncenter.com','tturner@customsigncenter.com','teryl@customsigncenter.com','tim@customsigncenter.com'];
	/**/
	//var modalLink = '<a class="modalLink" rel="modal:open"><img src="assets/write-circle-green-128.png" title="edit"</a>'*/
	// var liIndex; //hold the index position of the active list we're referencing in code.

$(document).ready(function ()
{	
	var cols = document.querySelectorAll('.edit .lineEntry');
    //could try listElements that common.js has already created:
    [].forEach.call(cols, addDnDHandlers);
	
	var contextMenu = $('');
    var clipboard = new Clipboard('.copy',{
	  target: function(trigger) {
        	return trigger.nextElementSibling;
	    }
	});

    clipboard.on('success', function(e) {
	   console.info('Action:', e.action);
	   console.info('Text:', e.text);
	   console.info('Trigger:', e.trigger);    
	   e.clearSelection();
    });
    
    clipboard.on('error', function(e) {
	   console.error('Action:', e.action);
	   console.error('Trigger:', e.trigger);
    });

    var inputArea = $('.edit > *');
	inputArea.on('keydown', function() {
		var key = event.keyCode || event.charCode;
		//allow backspace (key8) to NOT go back to previous web page, but instead delete backward
		//key46 is the delete key.
		if( key == 8 || key == 46 )
			return false; //prevents default browser/DOM behaviors for the specified keys.
	});
	
	/*disable back/forward page navigation of the browser*/
	history.pushState(null,null,document.title);
	window.addEventListener('popstate', function() {
		history.pushState(null, null, document.title);
	});	
	
	$("#btnEmail").on("click", function(e) 
	{  
		e.preventDefault();	
		
		//open the email form where user can add a message, etc.
		formModalOpen();
	});
	teamNamesHTML();
		
}); // doc ready.

/* open a form in a popup */
function formModalOpen()
{	
	$('#overlay').removeClass('hide');
}
/* open a form in a popup */
function formModalClose()
{
	$('#overlay').addClass('hide');
}


/*and return the user input to the caller func */

function userEmailInput()
{	
	let formData = {};
	formData['fromEmail'] = $('#modalForm').find('input[name=fromEmail]').val();
	formData['message'] = $('#modalForm').find('textarea[name=message]').val();	
	//reset empty:
	$('#modalForm').find('input[name=formEmail]').val(null);	
	$('#modalForm').find('textarea[name=message]').val(null);	
	formModalClose();	
		/* DISABLE EMAIL FUNCTION - POST MSG ON SCREEN
		alert('Email Functions are Being Revised.  To email PDF, click PRINT button in the Calendar and change printer desitnation to "Save as PDF".  
		Attach PDF to your Outlook message, and paste in the recipients by clicking PREVIEW RECIPIENTS button in the calendar.');
		return;
		 */
		//cleanCalendarLayout() clones areas of the page needed for the pdf attachment.
		//appends all html segments to #print element.
		cleanCalendarLayout();
		wait('start'); //spinner gif indicating busy
		//set all UL DOM objs captured in clearCalendarLayout() to $editULs
		var $editULs = $("#print").find(".edit");	
		$( $editULs ).each(function(i, ulEl)
		{		 
			 if( $(ulEl).find('li').length < 1 )
			 {
				$(ulEl).parent('.date').attr('style', 'border:none');				
			 }		 
	 	});
 
	 	//add clearfix class to wrappers to hold floats on a single line.		
	 	var floatWraps = ['#headerDays','.calRow','#checkboxWrapper'];
	 
	 	$(floatWraps).each(function(i,el)
		{
			$('#print ' + el ).addClass("clearfix");
	 	});
		
		
		$("#print").find('img').remove();
		$("#print").find('span.addNewLine').remove();
		
		
		var calendarHTML = $("#print").html();	
		
		var data = {"recipients":emailRecipientsCSC,"company":curCompany,"calendar":calendarHTML,"formData":formData}; 
	
	    $.ajax({	
			url : "classes/sendemail.php",
			type: "POST",
			data : data,
			dataType:"json",
			success: function( respData, textStatus, jqXHR )
		  	{
				wait('end');
			 	//var msg = respData.msg;			
			 	giveNotice('<span style="color: #009000">Success</span>: Calendar has been Emailed to Your Recipients.');// with subject line: '+respData.subject);
			 	//reset the print div's html to empty for reuse.
			},
			error: function ( jqXHR, textStatus, errorThrown )
		  	{
			 	wait('end');
			 	giveNotice('<span style="color: #090000">Failed</span>: '+errorThrown+'.');
		  	}	
	    });	
	    $( "#print" ).html('');    
   
	/*if( typeof emails != 'undefined')
	{
		$("#prevEmailPopUp").html(emails);
		$("#previewEmails").on("mouseover", function()
		{
			$("#prevEmailPopUp").removeClass("hide");
	    	$(this).html(' Click To Copy Emails to Clipboard');	    
   		});
   		$("#previewEmails").on("mouseout", function()
		{
	    	$("#prevEmailPopUp").addClass("hide");
	    	$(this).html('Preview Recipients');
   		});
	
	}*/
	
	
	/* MOVED HERE FROM COMMON.JS 
	 * assign current company task menu hmtl for the team names   
   	 */
	
	
}


/* 
 * ASSIGN A STYLE, SUCH AS AN INSTALLER TEAM, or PERMIT ICON TO THE JOB CORRESPONDING TO THE CURRENT contextMenu Popup */
/* iconSet properties: 'ups','unassigned','trip','crew','crane,'part','comp,'inv','info','inspr','inspa,'pappr','prmt','oups'
 * var 'opt' holds the identifier of the menu item clicked in the contextMenu;
   The identifier (opt) can be a number where that number is reflected also in the css ID attr as t1,t2, etc. or 
   can be a word, such as 'ups'.  var 'obj' is the DOM OBJECT clicked from the MENU, passed in as the 'this' onclick keyword.
*/

function jobAssignment(opt, obj){
	wait('start');
	// USER CLICKED MENU ITEM "OVERDUE"?
	if( opt === 21 ){
		//Toggle Class Existence
		if( $(editableLI).hasClass("due") ){
			unsetOverDueJob();			
		} else {
			setOverDueJob();			
		}
		//keep any other styling (team assignment, etc...), exit this function:
		wait('end');		
		return;
	}
	// USER CLICKED MENU ITEM "EXPEDITE"?
	if( opt === 25 ){
		//Toggle Class Existence
		if( $(editableLI).hasClass("ready") ){
			unsetShipreadyJob();	
		} else {
			setShipreadyJob();			
		}
		//keep any other styling (team assignment, etc...), exit this function:
		wait('end');		
		return;
	}
	
	// USER CLICKED MENU ITEM "UNASSIGNED"?
	if(opt === 'unassigned'){
		if( $(editableLI).hasClass('unassigned') ){
			removeUnassigned();			
		} else {
			removeTeamAssignments();
			addUnassigned();			
		}		
		wait('end');
		return false;
	} else if( $(editableLI).hasClass('unassigned') && opt !== 0 ){
		removeUnassigned();
	}
	// USER SELECTED EXPEDITE STYLE FROM MENU
	if(opt === 'exp'){
		
		if( $(editableLI).hasClass('expedite') ){
			$(editableLI).removeClass('expedite');			
		} else {
			$(editableLI).addClass('expedite');
		}	
		wait('end');		
		return;
	}
		
	// USER CLICKED MENU ITEM "CLOSE MENU" [i.e., opt = 0]?
	if(opt === 0){
		
		//1st check to see if a reschedule data change had been made (i.e., move entry to new date cell if applicable)
		//hidden input inside the contextmenu wrapper div #divContextMenu used in the datepicker.
		//clicking a date stores that date to the value attribute of the checkNewEntryDate DOM element.
		//value="mm/dd/yyyy"
		var checkNewEntryDate = $("#divContextMenu").children("input[type='hidden']")[0];
		
		if(typeof checkNewEntryDate !== 'undefined' )
		{			
			//move the entry to its new date
			var newDate = $(checkNewEntryDate).val();
			if(newDate.length > 5) //if the content is stored there.
			{
				// set the value back to empty?				
				$(obj).closest("#divContextMenu").children("input[type='hidden']").prop('value','')[0];
				//get LI's Job Entry HTML that we need to move to newDate's cell	
				// remove CSS marking the job as active for editing with the context menu:
				$(editableLI).removeClass('context-style');
				//tag it to use outerHTML
				//editableLI is the global LI DOM el that the context menu is trying to work with.
				var clonedLIhtml;
				clonedLIhtml = $(editableLI).clone(true,true); 
				//clone includes the <li> tag just like outerHTML does.
				//parse the date info
				dateParts  = newDate.match(/(\d{2})\/(\d{2})\/(\d{4})/);
				/* structure:				
				 [0] "07/30/2016"    
				 [1] "07"	
				 [2] "30"
				 [3] "2016"
				*/	
				rescheduleJob(dateParts,editableLI,clonedLIhtml);
			}
		    else
		    {
			    //before closing set the contenteditable on the parent LI to 'false'.			    
			    // close the style options menu
			    $(contextMenu).remove();
			    $(editableLI).removeClass('context-style');
		    }
		}
		else
		{
			// close the pop up menu
			$(contextMenu).remove();
			//$(editableLI).removeClass('context-style');
			giveNotice('<span style="color: #FF0000">Failed</span>: A problem was encountered trying to parse your date change request.');
		}
		$(contextMenu).remove();
		$(editableLI).removeClass("context-style");
		wait('end');
		return false;		
	}
	
	//the LI id attr can help us select the correct team style & remove mutually-excl./conflicting styles.
	var CSSid; //the id of the task menu LI item that was clicked.	
	if( $(obj).attr('onclick')===true ){
		//then obj is a LI; some LI menu items have child <i> tags (icon-holders)
		CSSid = $(obj).attr("id"); //the id of the clicked menu item (e.g, t1, t2, etc.)
	}else{
		//this is an <i> icon tag within the LI; so get its parent id instead:
		CSSid = $(obj).closest('li').attr("id");		
	}	
	// USER CLICKED MENU ITEM "DELETE"?
	if( CSSid === 'delete' ) {		 
		 	var r = confirm("'OK', Permanently Delete this Entry? 'CANCEL' to stop deletion.");
		 	if (r == true) {
    			$(editableLI).remove();
			}
	}
	// USER CLICKED MENU ITEM "COMPLETED"?		
	if( CSSid === 'completed' ) {			 
		 $(editableLI).addClass( 'completed' );
		 if($(editableLI).hasClass("due")) {
			 $(editableLI).removeClass("due");
		 }
		wait('end');
		return false;
		 }
		 		
	// USER CLICKED MENU ITEM "COPY"?
	if ( CSSid === 'copy' ){
		
		//copy the job's contents for a paste operation using clipboard plugin.
		
		//get the read target (the clicked obj's job content) and set obj.attr to it "data-clipboard-target". 
		
		//use clone to get event handlers to allow adding unique admin notes or team assigns to each pasted job.
		
		if( $(obj).text() === "Copy This Job"){
			//copy to the clipboard, else paste
			$(obj).text("Insert Copied Job");
		
		     var JobLiClone = $(editableLI).clone(true);//includes LI, dont't want event handlers as they refer to the original job obj.	
			$(JobLiClone).removeClass('context-style');
			var span = $(JobLiClone).children('span').first();			
			$(span).removeAttr('id');//remove the id="job_10000"
			$(span).addClass( 'copyof' + $(span).text() ); //flag it with a class we can use to delete all jobs later.	
			
			// if we copy a copy, then [COPIED] gets duplicated each time. 
			// Check that there is no COPIED text, add if not.
			var ptrn =  /(?:\[CONT\.\])/g;
			if( ptrn.exec( $(span).text() ) === null  ){
				
				$(span).append(' [CONT.] ');
				
			}
			
			
			$("#hiddenClipboard").html('');
			$("#hiddenClipboard").html(JobLiClone);	
		
		//if more than one span, we prepend the 1st one, and append the others.
		} else {
			//paste the job
			$(obj).text("Copy This Job");
		     var LIST = $("#hiddenClipboard").children('li').first();
			var clonedLI = $(LIST).clone(true);		
			$(editableLI).closest('.edit').append(clonedLI);
			bindListeners4EachList( $(editableLI).closest('.edit') );
		}
		wait('end');
		return;		
	}//end 'copy' menu selection...
	
	
	 
	 // IV. A TEAM OPTION or OTHER OPTION SELECTED?
	 // user selected something other than "completed", "overdue", "delete" or "copy" 
	 // add and remove classes as needed from the target LI		   
	
	  //possible options for icons: 'ups','unasssigned','trip','crew','crane,'part','comp,'inv','info','inspr','inspa,'pappr', 'prmt'
	 var ico = false;
	 var removed = false;//did we remove the icon; initialize switch to false;
	 $.each(iconSet, function(ndex,icoClass){			 
		 if(opt === ndex){ 
			 //if the opt string maps to a named row within icoClass, 
			 //then mark var 'ico' switch to true, we completed a match:				 
			 ico = true;
			 //get <i> children; check <i> to learn if any has this icon class already:

			//<LI> = editableLI; .icons = <SPAN>
			 var spanTag = $(editableLI).find('span').first();
			 var iTags = $(spanTag).children('i'); //1st level <i>'s in span, if any.

			 $.each(iTags, function(nd,iTag){			 

				 //toggle 'remove' if selected icon class already assigned this job:
				 if( $(iTag).hasClass(icoClass) ){						 
					 $(iTag).remove();
					 //since we removed that icon, set var 'removed' to true:
					 removed = true;	
					 //exit function
					 wait('end');
					 return;
				 } 
			 });
			 if(removed !== true){

				 if(opt === 'ups'){

					 if( $(editableLI).hasClass("t10") ){

						 $(editableLI).removeClass("t10");

					 } else {
						if( $(editableLI).hasClass("due") ) { 
							$(editableLI).attr("class", "lineEntry t10 due"); 
						} else {									
							$(editableLI).attr("class", "lineEntry t10"); 
						}								 
					 }
				 }
				 $newTag = '<i class="'+icoClass+'"></i>';
				 $(spanTag).prepend($newTag);
				 wait('end');
				 return;
			}
			wait('end');
			return;
		 }			
	 });			
	if(ico !== true){
		removeTeamAssignments(CSSid);	
	}	 
	wait('end');
}

function saveMonth(){	
	
	// Before saving to xml, 1-2:		
	//1. remove class 'hide' from all LI's so that state is not saved in xml
	teamsShowAll();	
	//2. remove any open admin note input forms and yellow edit classes.
	var yellowUL = $('#weeks').find(".yellow-bg");	
	$.each(yellowUL, function(){	
		$(this).removeClass('yellow-bg');		
		var noteInput = $(this).find('#x');		
		$.each(noteInput, function(tr, rt){			  
			$(rt).remove();	
		});		
	});	
	var allContextCSS = $("#weeks").find('.context-style').removeClass('context-style');	
	if(allContextCSS.length){
		$.each(allContextCSS, function(){			
			$(this).removeClass('context-style');			
		});
	}		
	wait('start');
	var htmlDataToSave = $("#weeks").html();
	var data={"content":htmlDataToSave, "year":year, "month":month, "theDate":theDate, "company":curCompany, "method":"saveMonth", "userID":userID, "coID":coID};	
	//update the appropriate cell node in the xml
	$.ajax({	
		  url : "classes/calendar.php",
		  type: "POST",
		  data : data,
		  dataType:"json",
	   success: function(respData, textStatus, jqXHR)
	   {	
	   	  wait('end');		  
		  giveNotice('<span style="color: #009000">Notice</span>: '+ respData.msg +'.');
	   },
	   error: function (jqXHR, textStatus, errorThrown)
	   {
		   wait('end');
		   giveNotice('<span style="color: #FF0000">Failed</span>: Server Response: "'+errorThrown+'"');
	   }	
  	});
}

// called by the contextMenu option - "reschedule" current LI on click "Close" menu
// Designed to cut/paste the job to a new calendar date.  2 Params are moveToDate, jobHTML
// param1 is array:
/*
			[0] "07/30/2016"
			[1] "07"	...month
			[2] "30"  ...day
			[3] "2016" ...yr
*/
// Param2 is the original jquery DOM obj. This lets us remove it, once confirmed by user.
// Param3, jobHTML, is the LI html string:  '<li ....etc.... /li>' being moved.
//rescheduleJob(dateParts,editableLI,clonedLIhtml)
function rescheduleJob(moveToDate,$srcLI,jobHTML)
{	
	//must remove leading zero from the moveTo month and day (e.g., 07 to 7)
	if(moveToDate === null || moveToDate === '')
	{
		return; //skip this whole plan... no date to move to	
	}//end if moveToDate is null		
	else
	{	
			/*moveToDate is array like:
				 [0] "07/30/2016"    
				 [1] "07"	
				 [2] "30"
				 [3] "2016"*/
	
	    $.each(moveToDate, function(i,v){
		  if(i !== 0){ //skip the first string  
		    removeZeros=Number(v);		  
		    
		    //back to a string and save		
		    moveToDate[i]=String(removeZeros);
		     }
	    });
		saveToCell(moveToDate,jobHTML);
		//now remove the date that was in the datepicker input
		$(contextMenu).children("#reschedule.picker__input").prop('value','');
		$($srcLI).remove();
		//saveMonth();
		justReloaded = 0;
	    addListenersToDom("false"); //ensure event handlers are added to the item's new location.
		
	}
}

// micro fn to process save request to a new date cell.
// called by rescheduleJob()
function saveToCell(moveToDate,jobHTML)
{	
	$(".month").each(function(i,m){
		if( $(m).attr("ordinal") === String(moveToDate[1]) && $(m).attr("yr") === String(moveToDate[3]))
		{
			var $moveToCell;
			if($moveToCell = $(m).find("ul[modalid=d"+moveToDate[2]+"]")){
				$($moveToCell).prepend(jobHTML);
				return;
			}
		}
	});	
}

//Admin and Mgr have their own bindList Funcs.
function bindListeners4EachList(ULtags)
{
	//htmlReceivedFromXML = the html inside of div#weeks.  div.row are the top level elements
	//drill down to each list to bind handler
	//event handler for selecting installer team for new lists (right click)
	var LItags = $(ULtags).children('.lineEntry');
	//var eachUL = $(eachWeekRow).children('ul.edit'); //each ul holding the list tags we need handlers on.
	var wrapper;
	var parentOffset;
	var parentWrapperOffset;
	$.each(LItags, function(i,posting)
	{	
		//each list requiring a handler		
			$(posting).on("contextmenu", function(e) 
			{				
				e.preventDefault();			
			    $(document).find('.context-style').removeClass('context-style');			
				$(posting).addClass("context-style");				
				editableLI = posting;
				
				//when switching company cals, seems we
				//need to set a delay, so that the #reschedule DOM
				//object is available to set the pickadate.
				setTimeout( function()
				{  
					$( '#reschedule' ).pickadate(
						{
							format: 'mm/dd/yyyy',
							formatSubmit: 'mm/dd/yyyy',
						}
					);
				}, 800 );				
				
				var relX, distX;
				
				if( $("#modal").is(":visible") )
				{
					//use the ul.edit as the reference for positioning popup menu					
					wrapper = $("#modal");
					var off = $(wrapper).offset(); //offset of wrapper
					//parentWrapperOffset = off.right + 300;
					relX = parseInt(wrapper.scrollLeft() + $(wrapper).outerWidth());
				} 
				else 
				{				
					wrapper = $(this).closest(".date"); //The date box		 
					var off = $("#weeks").offset(); //offset of wrapper of the parent (i.e., #weeks)
					//parentWrapperOffset = off.left;
					relX = parseInt(wrapper.scrollLeft() + wrapper.outerWidth());
				}				 
				var relY = wrapper.scrollTop();
				//* do not show a modal popup if this is a weekview modal popup:
				if( $('#modal').hasClass('weekView')  ){
					alert("Editing is currently disable while viewing a week in the popup window; try editing directly from the calendar or use a single day popup window.");
					return;
				}
				
				 $(wrapper).append( $( contextMenu ).css({
					left: relX,
					top: relY,
					display: 'inherit'
				 }));										
		 }); //right click event was registered.	
	}); //each LItags, add event handler
}//bindListeners4EachList func

//admin and mgr vers are diff: admin adds the teams to the context menu.
function teamNamesHTML()
{	
	menuDisplay = '<div id="divContextMenu" style="display:none">'+ 
	'<input id="reschedule" type="text" placeholder="reschedule" />'+	
	'<div class="nav-container"><nav class="navbar"><ul id="ulContextMenu">'+	
	'<li id="t0" onclick="jobAssignment(0, this)" option="0" style="text-align:right;color:red">x Close</li>'; 
	
	var li0 = '<li id="';
	var liCl = '" Class="';
	var li1 = '" onclick="jobAssignment(';
	var li2 = ', this)" option="';
	var li3 = '">';
	var li4 = '</li>';	
	
	//BUILD ASSIGNMENT SUBMENU OF CONTEXT MENU for curCompany:
	menuDisplay += '<li style="padding:12px 5px;color:#000000">ASSIGN<ul>';

	$.each(iconAssignments[curCompany], function(k,v){
		// the k is the CSS class to use; the value is the label:
		// less than 10 property names are like: "1":"RobertC"
		if(null !== v){	
			if( parseInt(k,10) < 10 ){
				menuDisplay += li0 + 't'+ k + liCl + k + li1 + k +li2 + k + li3 + v + li4;
			} else {
				//this needs to have an icon displayed with the html:
				//v = 'ic- class name/number for t10, select-10, etc'
				var val = v.split("/");				
				/*ups example: "10":"UPS/ic-ups" k:v
				  val[0] = 'UPS'; val[1] = 'ic-ups'; k = 10				
				*/
				menuDisplay += '<li id="'+val[1]+'" class="t'+k+'" onclick="jobAssignment(\''+
					val[0].toLowerCase()+'\', this)" option="'+
					val[0].toLowerCase()+'">&nbsp;<i class="'+val[1]+'"></i> '+val[0]+'</li>';
			}
		}		
	});

	//WRAP UP THE FIRST SUBMENU:
	menuDisplay += '<li id="due" class="due" onclick="jobAssignment(21, this)" option="21">Overdue</li>';	
	menuDisplay += '<li id="ready" class="ready" onclick="jobAssignment(25, this)" option="25">Ship-Ready</li></ul></li>';

	//BUILD ON THE OTHER SUB MENUS:
		/////// STATUS SUBMENU
	menuDisplay += '<li style="padding:12px 5px"><span style="color:#236FBF">STATUS</span><ul><li id="23" onclick="jobAssignment(\'oups\', this)" option="oups"><i class="ic-oups"></i> OUPS</li><li id="ic-i-ret-trip" onclick="jobAssignment(\'trip\', this)" option="trip"><i class="ic-i-ret-trip"></i> Service</li><li id="13" class="ic-users" onclick="jobAssignment(\'crew\', this)" option="crew"> 2-Man</li><li id="14" onclick="jobAssignment(\'crane\', this)" option="crane"><i class="ic-i-crane"></i> 100ft Crane</li><li id="15" class="ic-cog" onclick="jobAssignment(\'parts\', this)" option="parts"> Part Needed</li><li id="16" onclick="jobAssignment(\'comp\', this)" option="comp"><i class="ic-i-comp-alt"></i> Ready to Invoice</li><li id="17" onclick="jobAssignment(\'inv\', this)" option="inv"><i class="ic-i-comp-inv"></i> Collect</li><li id="24" onclick="jobAssignment(\'exp\', this)" option="exp" class="expedite"><i class="ic-exp"></i> Expedite</li></ul></li>';

		/////// PERMIT SUBMENU
	menuDisplay += '<li style="padding:12px 5px"><span style="color:#007F16">PERMIT</span><ul style="color:#007F16"><li id="18" onclick="jobAssignment(\'info\', this)" option="info"><i class="ic-p-inf"></i> Need Info</li><li id="19" onclick="jobAssignment(\'inspr\', this)" option="inspr"><i class="ic-p-insp-req"></i> Insp. Req\'ed</li><li id="20" onclick="jobAssignment(\'inspa\', this)" option="inspa"><i class="ic-p-insp-appr"></i> Insp. Appr\'d</li><li id="21" onclick="jobAssignment(\'pappr\', this)" option="pappr"><i class="ic-p-appr"></i> Done/Not Needed</li><li id="22" onclick="jobAssignment(\'prmt\', this)" option="prmt"><i class="ic-asterisk"></i> Prmt Only</li></ul></li>';



	//WRAP UP THE MENU WITH TOP LEVEL MENU ITEMS BELOW THE SUBMENUS:
	menuDisplay += '<li id="copy" data-clipboard-target="" data-clipboard-action="copy" '+
					'onclick="jobAssignment(13, this)" class="copy" option="copy">Copy This Job</li>'+
					'<li style="padding:12px 5px" id="delete" class="delete" '+
					'onclick="jobAssignment(11, this)" option="11">Delete Entry</li>'+
					'</ul></nav></div></div>';		

	contextMenu = $(menuDisplay);	
}
	
//admin only func: Toggle OFF unsassigned Styling for a job
function removeUnassigned(){
	//overdue jobs can still have assigned statuses:		
	$(editableLI).removeClass("unassigned");
	var icon = $(editableLI).find('i.ic-flag').first();
	$(icon).remove();	 
	return;		
}
//add unassigned: Toggle ON unsassigned Styling for a job
function addUnassigned(){
	$(editableLI).addClass("unassigned");
	$(editableLI).find('span').first().prepend('<i class="ic-flag"></i>');
	return;		
}
//remove all team assignment styles from a job
function removeTeamAssignments(CSSid){	
	 //global boxIDs = ['t0','t1','t2','t3','t4','t5','t6','t7','t8','t9','t10']
	 if('t0' !== CSSid){ //not an 'exit menu' click.
		 $(boxIDs).each(function(i,box) {				
			// box is iterations for classes t0, t1, t2, .... CSS team styling Classes
			if( box === CSSid && $(editableLI).hasClass( CSSid ) === false ) {		 	
				 $(editableLI).addClass( box );					
				 //if user is setting unassigned as the class
				 //ensure completed cannot remain as a class
				 if(CSSid == 'unassigned'){
					 //cannot be both unassigned and completed :
					 $(editableLI).removeClass( 'completed' );
				 }
			}
			else if(box !== CSSid )
			{
				// CAN ONLY have one 'STATUS' assignment per job (.t1-.t10), so remove classes that don't match the user's selected style:
				$(editableLI).removeClass( box );								
			}
		 });	
	 }	
	return;
}		

function setOverDueJob(){
	//cannot be overdue and shipready
	if($(editableLI).hasClass("ready"))
	{
		//remove the this job from the ready ship listing:
		unsetShipreadyJob();
	}
	if($(editableLI).hasClass("unassigned"))
	{
		removeUnassigned();
	}
	$(editableLI).addClass("due");
	$(editableLI).removeClass('context-style');
	$(editableLI).addClass("t21");
	//add this job to the global obj 'overdueJobs':
	//1. get the job # of current edited job in dom
		var jobNmbr = $(editableLI).children('span').first().text(); //the job number parent span is always the first one in the LI.
		jobNmbr = jobNmbr.split(' ')[0]; //sometimes a trailing ' [CONT.]' on job numbers throws an error in js. Remove it.
	//alert("Job# is " + jobNmbr);
	//2. get the date of the edited job's UL wrapper's modalid.
		var date = $(editableLI).parent('ul').attr('modalid').substr(1);
	//3. trim off the first char ('d') from the modalid value, leaving just the numeral.
		//date = date.substr(1);
	  var mo = $( "span#mo" ).attr('ordinal');
		var yr = $( "span#yr" ).attr('ordinal');
		date = '<span style="color: red">'+ mo + '/' + date + '/' + yr+'</span>';
	//get the job desc text and truncate it to the first 30 chars.
		var desc = $(editableLI).text();
		desc = desc.slice(0,30);
	//concat into a line of text to save as a property of overdueJobs obj.
		var info = '<div class="ovrDue" id="'+jobNmbr+'">' + date +': '+ desc +'...</div>';
	if( overdueJobs.hasOwnProperty(jobNmbr) === false ){
		overdueJobs[jobNmbr] = info;
	}
	if( isEmpty(overdueJobs) === false ){
		//first erase all the content of the overdue job list in the view:
		$('#OverDueJobsList').html('');
		//write all the updated overdue jobs to the view:
		//by iterating through the overdueJobs properties:
		Object.keys(overdueJobs).forEach(function(key) {
			$('#OverDueJobsList').append(overdueJobs[key]);
		});		
		/*$('#OverDueJobsList').prepend('<p><span class="due" style="padding: 3px 8px !important; font-size: 18px">Overdue Jobs</span></p>');*/
	} else {
		$('#OverDueJobsList').html('<p>Excellent! All WIPs are On-Schedule.</p>');
	}	
}
function setShipreadyJob(){
	//cannot be overdue and shipready
	if($(editableLI).hasClass("due"))
	{
		//remove it then from the overdue listing:
		unsetOverDueJob();
	}
	if($(editableLI).hasClass("unassigned"))
	{
		removeUnassigned();
	}
	$(editableLI).addClass("ready");
	$(editableLI).removeClass('context-style');
	$(editableLI).addClass("t25");
	//add this job to the global obj 'shipreadyJobs':
	//1. get the job # of current edited job in dom
		var jobNmbr = $(editableLI).children('span').first().text(); //the job number parent span is always the first one in the LI.
		jobNmbr = jobNmbr.split(' ')[0]; //sometimes a trailing ' [CONT.]' on job numbers throws an error in js. Remove it.
	//2. get the date of the edited job's UL wrapper's modalid.
		/*var date = $(editableLI).parent('ul').attr('modalid').substr(1);*/
	//3. trim off the first char ('d') from the modalid value, leaving just the numeral.
		//date = date.substr(1);
	     /*var mo = $( "span#mo" ).attr('ordinal');
		var yr = $( "span#yr" ).attr('ordinal');
		date = '<span style="color: #0ee012">'+ mo + '/' + date + '/' + yr+'</span>';*/
	//get the job desc text and truncate it to the first 30 chars.
		var desc = $(editableLI).text();
		desc = desc.slice(0,30);
	//concat into a line of text to save as a property of shipreadyJobs obj.
		var info = '<div class="shpReady" id="'+jobNmbr+'">'+ desc +'...</div>';
	if( shipreadyJobs.hasOwnProperty(jobNmbr) === false ){
		shipreadyJobs[jobNmbr] = info;
	}
	if( isEmpty(shipreadyJobs) === false ){
		//first erase all the content of the ship ready job list in the view:
		$('#shipreadyJobsList').html('');
		//write all the updated ship ready jobs to the view:
		//by iterating through the shipreadyJobs properties:
		Object.keys(shipreadyJobs).forEach(function(key) {
			/*if(key===0){
				delete $(this);				
			} else {*/
				console.log('Ship Ready Jobs Property Found with job #'+key);
				/*console.log('Ship Ready Job #'+key+' has desc: '.shipreadyJobs[key]);*/
				$('#shipreadyJobsList').append(shipreadyJobs[key]);
		  /*}*/
		});
	} 
	else
	{
		$('#shipreadyJobsList').html('<div>0 Jobs Staged in Shipping Area.</div>');
	}	
}
function unsetOverDueJob(){
	//called when user assigns a job "overdue";
	$(editableLI).removeClass("due");
	$(editableLI).removeClass("t21"); //this class is used in checkbox controls to hide/show entry
	$(editableLI).addClass('context-style');
	//remove this job from the global obj 'overdueJobs'
	//1. get the job # of current edited job in dom
		var jobNmbr = $(editableLI).children('span').first().text(); //the job number parent span is always the first one in the LI.
		jobNmbr = jobNmbr.split(' ')[0]; //sometimes a trailing ' [CONT.]' on job numbers throws an error in js. Remove it.
	//2. delete that property
		delete overdueJobs[jobNmbr]; 
	//3. Delete the job from the overdue display in the DOM.
		$("#"+jobNmbr).remove();
}
function unsetShipreadyJob(){
	//alert("UnSet this as shipready");
	//called when user assigns a job "shipready";
	$(editableLI).removeClass("ready");
	$(editableLI).removeClass("t25"); //this class is used in checkbox controls to hide/show entry
	$(editableLI).addClass('context-style');
	//remove this job from the global obj 'overdueJobs'
	//1. get the job # of current edited job in dom
		var jobNmbr = $(editableLI).children('span').first().text(); //the job number parent span is always the first one in the LI.
		jobNmbr = jobNmbr.split(' ')[0]; //sometimes a trailing ' [CONT.]' on job numbers throws an error in js. Remove it.
	//2. delete that property
		delete shipreadyJobs[jobNmbr]; 
	//3. Delete the job from the shipready display in the DOM.
		$("#"+jobNmbr).remove();
}
function rearrangeJobs(moveIcon)
{
	"use strict";
	var $UL = $(moveIcon).closest("#modal").children("ul.edit")[0];	
	
	//initialize sortable if not already initialized:	
	$( $UL ).sortable();
	
	//collect child LIs	
	var $li = $($UL).children('li');	
	//Is Drag Editing On or Turned Off?
	if( dragEditing === "OFF"){		
		dragEditing = "ON";		
		$( $UL ).sortable("option", "disabled", false);
    	$( $UL ).disableSelection();		
		var icon = '<img class="dragIcon dragImg" src="https://customsigncenter.com/calendar/dev/assets/dragicon.png" />';
		$($li).each(function(){
			//add drag icons to each LI:
			$(this).prepend(icon);
			//$( $(this).first(".dragIcon") ).draggable({axis:"y", containment: $UL});
		});		
	} else {
		dragEditing = "OFF";
		$( $UL ).sortable("destroy"); 
		$( $UL ).removeClass("ui-sortable-disabled");
		$( $UL ).removeClass("ui-sortable");				
		dragIconArray = [];	
		$($li).each(function(){
			//remove the sortable class from each LI if present:
			$( this ).removeClass("ui-sortable-handle");
			//remove the drag icon imgs from each LI:
			var $childDragImg = $( this ).children(".dragIcon")[0];
			if($childDragImg){
				$childDragImg.remove();
			}			
		});
	}
}
function saveNote(obj){
	var r = $(obj).siblings('input#y').val();
	var LI = $(obj).closest('.lineEntry');	 		 
	var user = usr.slice(0,3);	    
	var notes = ' [<i style="color:#f00">' + user + '</i>]: ' + r;			
	if( notes.length > 35 ){				
		$(obj).parent('#x').replaceWith('<br><span class="admin-note">'+notes+'</span>');
	} else {
		$(obj).parent('#x').remove();
	}	
	closeEditing(LI);
}

function addNewLine(elem, parentClass){
	if(typeof isAdmin !== 'undefined')
	{			
		var newList = $("<li contenteditable='false' class='lineEntry unassigned newEntry' title='Right Click for Options'><span id='admin-note' contenteditable='false'>&gt;</span></li>");		
		//the ul 
		var ulTarget = $(elem).parents(parentClass).children('.edit');
		$(ulTarget).append(newList);
		var newEntry = $(ulTarget).children(".newEntry");		
		//addEventListenerToOne(newEntry);
		//pass this new LI obj to the func that creates the evt handler for it.	
		bindListeners4EachList(ulTarget);	
		$(newEntry).removeClass("newEntry");
	}
}
function startEdit(e) {
 var thisUL = $(this).closest(".edit"); //siblings if you want all the LIs in the UL
 originalContent = $( this ).html(); //get the content of the cell before editing it 
   $( this ).addClass( "yellow-bg" );
	//make any existing children (lists) editable
	$(thisUL).children("li").each(function(ct,listEl){
	  var inputArea;
	  $(this).on('click', function(){
	   inputArea = $(listEl).append('<div id="x"><button onclick="saveNote(this)">Save</button><br><input type="textarea" id="y" value="" /></div>');	   
	   $(inputArea).focus(); //set cursor	
	   $(listEl).unbind('click');
	  });	
	});	   
}

// called by func start edit.  Param is a LI element set as editable.
// set a handler mouseout to stop editing.
function closeEditing( LIst ){	
	var parentUL = $(LIst).closest(".edit");	
	 $( parentUL ).on('mouseout', function(evt) {	
		//remove editable attrib				  
		//$(LIst).prop("contenteditable", "false"); 
		  $(LIst).removeAttr("contenteditable");
		   $(parentUL).removeClass( "yellow-bg" ); 
		//remove all break tags.
		$(LIst).find('br').remove();
		//get the newly added cell contents; ContentEditable = false	
		newContent = $(parentUL).html(); 
		if( originalContent !== newContent ){
			lastEditedCell.push( $(parentUL) );
		} 
		//else for debugging only
		else {
			//No Changes to Save. 
			//$( domObj ).html('');
		}
		$(parentUL).off( 'mouseout' );
	   });	
}

/* 
Copy the xml storage file on the remote, save it as a backup to 
a backup directory for the current company calendar being used.
*/
function backupXmlFile(){
	var data={company:"Custom Sign Center"};
	$.ajax({	
		  url : "classes/Backup.php",
		  type: "POST",
		  data : data,		  
		  success: function(respData, textStatus, jqXHR)
		   {	
			  wait('end');
			  let resp = JSON.parse(respData);
			  giveNotice('<span style="color: #009000">Notice</span>: '+ resp.msg +'.');
			  //giveNotice('<span style="color: #009000">Success</span>: Your Updates have been Save.');
		   },
		   error: function (jqXHR, textStatus, errorThrown)
		   {
			   wait('end');
			   giveNotice('<span style="color: #FF0000">Failed</span>: Server Response: "'+errorThrown+'"');
		   }	
  	});
}