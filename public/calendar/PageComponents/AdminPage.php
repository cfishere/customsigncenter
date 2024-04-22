<?php
$ua = new userAuthenticate; //session start should be called by its parent, Session.
if(!isset($_SESSION)){
	$s = new Session;
	//echo 'Developer Notification: A new Session created and session.php loaded.';
}
if(!isset($_SESSION['user'])){
	header('Location: login.php');
}
if( $ua->tokenSet( (integer)$_SESSION['user']['userId'], (integer)$_SESSION['user']['company'] ) === false ){	
	header('Location: login.php');
	//echo "userId is " . $_SESSION['user']['userId'] . " and company id is " . $_SESSION['user']['company'];
	//outputs: userId is 1 and company id is 10	
}

//get array of all logged in users:

//returns empty array, or users with assoc indices of 'username','email',
$role='user';//default it to lowest level.
$loggedUserList = $ua->getLoggedUsersList($_SESSION['user']['userId']);
$loggedUsers = "<button type=\"button\" id=\"tglUserList\">Active Logins</button><p id=\"authenticatedUserList\" style=\"display:none\">";
if(!empty( $loggedUserList ))
{
	$loggedUsers .= "<span style=\"font-weight:bold\">Username, Email, Role</span><br/>";
	foreach($loggedUserList[0] as $lu)
	{
		$loggedUsers .= $lu['username'] ."<br/>";
	}	
}
else
{
	$loggedUsers = "No Logged In Users.";
}

$loggedUsers .= "</p>";
//active token class obj:
$tkn = new Active_Token;
if($_SESSION['user']) { 
	$ses = $_SESSION['user']; 
}

if( $_SESSION['user']['role'] && $_SESSION['user']['role'] !== 'admin' && $_SESSION['user']['role'] !== 'mgr' && $_SESSION['user']['role'] !== 'Developer' )
{
  if($_SESSION['user']['role'] === 'user')
  {
		$userURI = '';
		if(!empty($_SESSION['user']['name']))
		{
			$userURI = '?user='.$_SESSION['user']['name'];
			header('Location: view.php' . $userURI);
		}
		else
		{
			header('Location: login.php');
		}
	}
}
else 
{
	if($_SESSION['user']['role'] === 'Developer' || $_SESSION['user']['role'] === 'admin')
	{
		$role = 'admin';
		$modalAdminTools = '<img onclick="rearrangeJobs(this)" src="assets/dragicon.png" title="drag" class="dragImg" /> &nbsp; <span class="addNewLine" onclick="addNewLine(this, modal)"> + </span>';	
	} elseif($_SESSION['user']['role'] === 'mgr'){
		$role = 'mgr';
	}	
	$roleBasedJsFile = ( $role === 'admin' ? 'admin2.js?ver=8' : 'mgr.js?ver=1');
	$username = $_SESSION['user']['name'];
	session_id() != NULL ? $sesID = session_id() : $sesID = '' ;
} 

if( isset( $_SESSION['user']['company'] ) )
{
	switch( strtolower ( strval ( $_SESSION[ 'user' ][ 'company' ] ) ) )
	{
		case ( '10' || 'ALL' ):
			$coShow = 'ALL';
			$curCo = 'Custom Sign Center';
			break;
		case '0':
			$coShow = 'csc';
			$curCo = 'Custom Sign Center';
			break;
		case '3':
			$coShow = 'oi';
			$curCo = 'Outdoor Images';
			break;
	}
}

function auto_version($file)
{
  if(strpos($file, '/') !== 0 || !file_exists($_SERVER['DOCUMENT_ROOT'] . $file))
    return $file;
  	$mtime = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);
  	return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
}

