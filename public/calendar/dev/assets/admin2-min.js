var contextMenu,emails='<div id="copyToClipb">chris@customsigncenter.com;<br>christa@customsigncenter.com;<br>christina@customsigncenter.com;<br>dale@customsigncenter.com;<br>dan@customsigncenter.com;<br>debbie@customsigncenter.com;<br>ali@customsigncenter.com;<br>doug@customsigncenter.com;<br>james@customsigncenter.com;<br>jeff@customsigncenter.com;<br>kim@customsigncenter.com;<br>jreed@customsigncenter.com;<br>judy@customsigncenter.com;<br>marcus@customsigncenter.com;<br>mary@customsigncenter.com;<br>michael@customsigncenter.com;<br>rene@customsigncenter.com;<br>sam@customsigncenter.com;<br>scott@customsigncenter.com;<br>tturner@customsigncenter.com;<br>teryl@customsigncenter.com;<br>tim@customsigncenter.com</div>',isAdmin=!0,dragEditing="OFF",dragIconArray=[],menuDisplay='<div id="divContextMenu" style="display:none"><input id="reschedule" type="text" placeholder="reschedule" /><div class="nav-container"><nav class="navbar"><ul id="ulContextMenu"><li id="t0" onclick="jobAssignment(0, this)" option="0" style="text-align:right;color:red">x Close</li>',emailRecipientsCSC=["christa@customsigncenter.com","christina@customsigncenter.com","dale@customsigncenter.com","dan@customsigncenter.com","debbie@customsigncenter.com","ali@customsigncenter.com","doug@customsigncenter.com","eric@customsigncenter.com","james@customsigncenter.com","jeff@customsigncenter.com","kim@customsigncenter.com","jreed@customsigncenter.com","judy@customsigncenter.com","marcus@customsigncenter.com","mary@customsigncenter.com","michael@customsigncenter.com","rene@customsigncenter.com","sam@customsigncenter.com","scott@customsigncenter.com","tturner@customsigncenter.com","teryl@customsigncenter.com","tim@customsigncenter.com"];function formModalOpen(){$("#overlay").removeClass("hide")}function formModalClose(){$("#overlay").addClass("hide")}function userEmailInput(){let e={};e.fromEmail=$("#modalForm").find("input[name=fromEmail]").val(),e.message=$("#modalForm").find("textarea[name=message]").val(),$("#modalForm").find("input[name=formEmail]").val(null),$("#modalForm").find("textarea[name=message]").val(null),formModalClose(),cleanCalendarLayout(),wait("start");var t=$("#print").find(".edit");$(t).each(function(e,t){$(t).find("li").length<1&&$(t).parent(".date").attr("style","border:none")});$(["#headerDays",".calRow","#checkboxWrapper"]).each(function(e,t){$("#print "+t).addClass("clearfix")}),$("#print").find("img").remove(),$("#print").find("span.addNewLine").remove();var i=$("#print").html(),n={recipients:emailRecipientsCSC,company:curCompany,calendar:i,formData:e};$.ajax({url:"classes/sendemail.php",type:"POST",data:n,dataType:"json",success:function(e,t,i){wait("end"),giveNotice('<span style="color: #009000">Success</span>: Calendar has been Emailed to Your Recipients.')},error:function(e,t,i){wait("end"),giveNotice('<span style="color: #090000">Failed</span>: '+i+".")}}),$("#print").html(""),void 0!==emails&&($("#prevEmailPopUp").html(emails),$("#previewEmails").on("mouseover",function(){$("#prevEmailPopUp").removeClass("hide"),$(this).html(" Click To Copy Emails to Clipboard")}),$("#previewEmails").on("mouseout",function(){$("#prevEmailPopUp").addClass("hide"),$(this).html("Preview Recipients")}))}function removeContextMenu(e){console.log("removeContextMenu called"),null!==e&&$(e).removeClass("context-style"),$("#divContextMenu").remove()}function jobAssignment(e,t){if(wait("start"),21===e)return $(editableLI).hasClass("due")?unsetOverDueJob():setOverDueJob(),void wait("end");if("unassigned"===e)return $(editableLI).hasClass("unassigned")?removeUnassigned():(removeTeamAssignments(),addUnassigned()),wait("end"),!1;if($(editableLI).hasClass("unassigned")&&0!==e&&removeUnassigned(),0===e){var i=$("#divContextMenu").children("input[type='hidden']")[0];if(void 0!==i){var n,s=$(i).val();if(s.length>5)$(t).closest("#divContextMenu").children("input[type='hidden']").prop("value","")[0],$(editableLI).removeClass("context-style"),n=$(editableLI).clone(!0,!0),dateParts=s.match(/(\d{2})\/(\d{2})\/(\d{4})/),rescheduleJob(dateParts,editableLI,n);else removeContextMenu(editableLI)}else removeContextMenu(null),giveNotice('<span style="color: #FF0000">Failed</span>: A problem was encountered trying to parse your date change request.');return wait("end"),!1}var o;"delete"===(o=!0===$(t).attr("onclick")?$(t).attr("id"):$(t).closest("li").attr("id"))&&(1==confirm("'OK', Permanently Delete this Entry? 'CANCEL' to stop deletion.")&&($(editableLI).remove(),removeContextMenu(null)));if("completed"===o)return $(editableLI).addClass("completed"),$(editableLI).hasClass("due")&&$(editableLI).removeClass("due"),wait("end"),!1;if("copy"!==o){var a=!1,l=!1;$.each(iconSet,function(t,i){if(e===t){console.log("One of the icons will need added, or removed...."),a=!0;var n=$(editableLI).find("span").first(),s=$(n).children("i");return $.each(s,function(e,t){if($(t).hasClass(i))return $(t).remove(),l=!0,void wait("end")}),!0!==l?("ups"===e&&($(editableLI).hasClass("t10")?$(editableLI).removeClass("t10"):$(editableLI).hasClass("due")?$(editableLI).attr("class","lineEntry t10 due"):$(editableLI).attr("class","lineEntry t10")),$newTag='<i class="'+i+'"></i>',$(n).prepend($newTag),void wait("end")):void wait("end")}}),!0!==a&&removeTeamAssignments(o),wait("end")}else{if("Copy This Job"===$(t).text()){$(t).text("Insert Copied Job");var r=$(editableLI).clone(!0);$(r).removeClass("context-style");var c=$(r).children("span").first();$(c).removeAttr("id"),$(c).addClass("copyof"+$(c).text());null===/(?:\[CONT\.\])/g.exec($(c).text())&&$(c).append(" [CONT.] "),$("#hiddenClipboard").html(""),$("#hiddenClipboard").html(r)}else{$(t).text("Copy This Job");var d=$("#hiddenClipboard").children("li").first(),m=$(d).clone(!0);$(editableLI).closest(".edit").append(m),bindListeners4EachList($(editableLI).closest(".edit"))}wait("end")}}function saveMonth(){teamsShowAll();var e=$("#weeks").find(".yellow-bg");$.each(e,function(){$(this).removeClass("yellow-bg");var e=$(this).find("#x");$.each(e,function(e,t){$(t).remove()})});var t=$("#weeks").find(".context-style").removeClass("context-style");t.length&&$.each(t,function(){$(this).removeClass("context-style")}),wait("start");var i={content:$("#weeks").html(),year:year,month:month,theDate:theDate,company:curCompany,method:"saveMonth",userID:userID,coID:coID};$.ajax({url:"classes/calendar.php",type:"POST",data:i,dataType:"json",success:function(e,t,i){wait("end"),giveNotice('<span style="color: #009000">Notice</span>: '+e.msg+".")},error:function(e,t,i){wait("end"),giveNotice('<span style="color: #FF0000">Failed</span>: Server Response: "'+i+'"')}})}function rescheduleJob(e,t,i){null!==e&&""!==e&&($.each(e,function(t,i){0!==t&&(removeZeros=Number(i),e[t]=String(removeZeros))}),saveToCell(e,i),$(contextMenu).children("#reschedule.picker__input").prop("value",""),$(t).remove(),removeContextMenu(null),justReloaded=0,addListenersToDom("false"))}function saveToCell(e,t){$(".month").each(function(i,n){var s;if($(n).attr("ordinal")===String(e[1])&&$(n).attr("yr")===String(e[3])&&(s=$(n).find("ul[modalid=d"+e[2]+"]")))return void $(s).prepend(t)})}function bindListeners4EachList(e){var t,i=$(e).children(".lineEntry");$.each(i,function(e,i){$(i).on("contextmenu",function(e){var n;if(e.preventDefault(),$(document).find(".context-style").removeClass("context-style"),$(i).addClass("context-style"),editableLI=i,setTimeout(function(){$("#reschedule").pickadate({format:"mm/dd/yyyy",formatSubmit:"mm/dd/yyyy"})},800),$("#modal").is(":visible")){t=$("#modal");$(t).offset();n=parseInt(t.scrollLeft()+$(t).outerWidth())}else{t=$(this).closest(".date");$("#weeks").offset();n=parseInt(t.scrollLeft()+t.outerWidth())}var s=t.scrollTop();$("#modal").hasClass("weekView")?alert("Editing is currently disable while viewing a week in the popup window; try editing directly from the calendar or use a single day popup window."):$(t).append($(contextMenu).css({left:n,top:s,display:"inherit"}))})})}function teamNamesHTML(){menuDisplay='<div id="divContextMenu" style="display:none"><input id="reschedule" type="text" placeholder="reschedule" /><div class="nav-container"><nav class="navbar"><ul id="ulContextMenu"><li id="t0" onclick="jobAssignment(0, this)" option="0" style="text-align:right;color:red">x Close</li>';menuDisplay+='<li style="padding:12px 5px;color:#000000">ASSIGN<ul>',$.each(iconAssignments[curCompany],function(e,t){if(null!==t)if(parseInt(e,10)<10)menuDisplay+='<li id="t'+e+'" Class="'+e+'" onclick="jobAssignment('+e+', this)" option="'+e+'">'+t+"</li>";else{var i=t.split("/");menuDisplay+='<li id="'+i[1]+'" class="t'+e+'" onclick="jobAssignment(\''+i[0].toLowerCase()+'\', this)" option="'+i[0].toLowerCase()+'">&nbsp;<i class="'+i[1]+'"></i> '+i[0]+"</li>"}}),menuDisplay+='<li id="due" class="due" onclick="jobAssignment(21, this)" option="21">Overdue</li></ul></li>',menuDisplay+='<li style="padding:12px 5px"><span style="color:#236FBF">STATUS</span><ul><li id="ic-i-ret-trip" onclick="jobAssignment(\'trip\', this)" option="trip"><i class="ic-i-ret-trip"></i> Service</li><li id="13" class="ic-users" onclick="jobAssignment(\'crew\', this)" option="crew"> 2-Man</li><li id="14" onclick="jobAssignment(\'crane\', this)" option="crane"><i class="ic-i-crane"></i> 100ft Crane</li><li id="15" class="ic-cog" onclick="jobAssignment(\'parts\', this)" option="parts"> Part Needed</li><li id="16" onclick="jobAssignment(\'comp\', this)" option="comp"><i class="ic-i-comp-alt"></i> Ready to Invoice</li><li id="17" onclick="jobAssignment(\'inv\', this)" option="inv"><i class="ic-i-comp-inv"></i> Collect</li></ul></li>',menuDisplay+='<li style="padding:12px 5px"><span style="color:#007F16">PERMIT</span><ul style="color:#007F16"><li id="18" onclick="jobAssignment(\'info\', this)" option="info"><i class="ic-p-inf"></i> Need Info</li><li id="19" onclick="jobAssignment(\'inspr\', this)" option="inspr"><i class="ic-p-insp-req"></i> Insp. Req\'ed</li><li id="20" onclick="jobAssignment(\'inspa\', this)" option="inspa"><i class="ic-p-insp-appr"></i> Insp. Appr\'d</li><li id="21" onclick="jobAssignment(\'pappr\', this)" option="pappr"><i class="ic-p-appr"></i> Done/Not Needed</li><li id="22" onclick="jobAssignment(\'prmt\', this)" option="prmt"><i class="ic-asterisk"></i> Prmt Only</li></ul></li>',menuDisplay+='<li id="copy" data-clipboard-target="" data-clipboard-action="copy" onclick="jobAssignment(13, this)" class="copy" option="copy">Copy This Job</li><li style="padding:12px 5px" id="delete" class="delete" onclick="jobAssignment(11, this)" option="11">Delete Entry</li></ul></nav></div></div>',contextMenu=$(menuDisplay)}function removeUnassigned(){$(editableLI).removeClass("unassigned");var e=$(editableLI).find("i.ic-flag").first();$(e).remove()}function addUnassigned(){$(editableLI).addClass("unassigned"),$(editableLI).find("span").first().prepend('<i class="ic-flag"></i>')}function removeTeamAssignments(e){"t0"!==e&&$(boxIDs).each(function(t,i){i===e&&!1===$(editableLI).hasClass(e)?($(editableLI).addClass(i),"unassigned"==e&&$(editableLI).removeClass("completed")):i!==e&&$(editableLI).removeClass(i)})}function setOverDueJob(){$(editableLI).addClass("due"),$(editableLI).removeClass("context-style"),$(editableLI).addClass("t21");var e=$(editableLI).children("span").first().text(),t=$(editableLI).parent("ul").attr("modalid").substr(1);t='<span style="color: red">'+$("span#mo").attr("ordinal")+"/"+t+"/"+$("span#yr").attr("ordinal")+"</span>";var i=$(editableLI).text(),n='<div class="ovrDue" id="'+e+'">'+t+": "+(i=i.slice(0,30))+"...</div>";!1===overdueJobs.hasOwnProperty(e)&&(overdueJobs[e]=n),!1===isEmpty(overdueJobs)?($("#OverDueJobsList").html(""),Object.keys(overdueJobs).forEach(function(e){$("#OverDueJobsList").append(overdueJobs[e])})):$("#OverDueJobsList").html("<p>Excellent! All WIPs are On-Schedule.</p>")}function unsetOverDueJob(){$(editableLI).removeClass("due"),$(editableLI).removeClass("t21"),$(editableLI).addClass("context-style");var e=$(editableLI).children("span").first().text();delete overdueJobs[e],$("#"+e).remove()}function rearrangeJobs(e){"use strict";var t=$(e).closest("#modal").children("ul.edit")[0];$(t).sortable();var i=$(t).children("li");if("OFF"===dragEditing){dragEditing="ON",$(t).sortable("option","disabled",!1),$(t).disableSelection();$(i).each(function(){$(this).prepend('<img class="dragIcon dragImg" src="https://customsigncenter.com/calendar/dev/assets/dragicon.png" />')})}else dragEditing="OFF",$(t).sortable("destroy"),$(t).removeClass("ui-sortable-disabled"),$(t).removeClass("ui-sortable"),dragIconArray=[],$(i).each(function(){$(this).removeClass("ui-sortable-handle");var e=$(this).children(".dragIcon")[0];e&&e.remove()})}function saveNote(e){var t=$(e).siblings("input#y").val();t=t.replaceAll("'","&apos;");var i=$(e).closest(".lineEntry"),n=' [<i style="color:#f00">'+$usr.slice(0,3)+"</i>]: "+t.replaceAll('"',"&quot;");n.length>35?$(e).parent("#x").replaceWith('<br><span class="admin-note">'+n+"</span>"):$(e).parent("#x").remove(),closeEditing(i)}function addNewLine(e,t){if(void 0!==isAdmin){var i=$("<li contenteditable='false' class='lineEntry unassigned newEntry' title='Right Click for Options'><span id='admin-note' contenteditable='false'>&gt;</span></li>"),n=$(e).parents(t).children(".edit");$(n).append(i);var s=$(n).children(".newEntry");bindListeners4EachList(n),$(s).removeClass("newEntry")}}function startEdit(e){var t=$(this).closest(".edit");originalContent=$(this).html(),$(this).addClass("yellow-bg"),$(t).children("li").each(function(e,t){var i;$(this).on("click",function(){i=$(t).append('<div id="x"><button onclick="saveNote(this)">Save</button><br><input type="textarea" id="y" value="" /></div>'),$(i).focus(),$(t).unbind("click")})})}function closeEditing(e){var t=$(e).closest(".edit");$(t).on("mouseout",function(i){$(e).removeAttr("contenteditable"),$(t).removeClass("yellow-bg"),$(e).find("br").remove(),newContent=$(t).html(),originalContent!==newContent&&lastEditedCell.push($(t)),$(t).off("mouseout")})}function backupXmlFile(){$.ajax({url:"classes/Backup.php",type:"POST",data:{company:"Custom Sign Center"},success:function(e,t,i){wait("end");let n=JSON.parse(e);modalMsg(n.msg)},error:function(e,t,i){wait("end"),giveNotice('<span style="color: #FF0000">Failed</span>: Server Response: "'+i+'"')}})}$(document).ready(function(){var e=document.querySelectorAll(".edit .lineEntry");[].forEach.call(e,addDnDHandlers);$("");var t=new Clipboard(".copy",{target:function(e){return e.nextElementSibling}});t.on("success",function(e){console.info("Action:",e.action),console.info("Text:",e.text),console.info("Trigger:",e.trigger),e.clearSelection()}),t.on("error",function(e){console.error("Action:",e.action),console.error("Trigger:",e.trigger)}),$(".edit > *").on("keydown",function(){var e=event.keyCode||event.charCode;if(8==e||46==e)return!1}),history.pushState(null,null,document.title),window.addEventListener("popstate",function(){history.pushState(null,null,document.title)}),$("#btnEmail").on("click",function(e){e.preventDefault(),formModalOpen()}),teamNamesHTML()});