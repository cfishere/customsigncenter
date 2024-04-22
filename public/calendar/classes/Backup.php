<?php
libxml_use_internal_errors(true);
//backup the default data stores from the remote, to X drive.
// POST data comes in as {"company":curCompany, "userID":userID}
//company=Custom+Sign+Center&userID=1
class Backup
{
	public $savePath;
	public $remoteStoragePath;
	public $message = "";
	
	function __construct(){		
		$this->savePath = '../models/webUserBackups/';
		$this->remoteStoragePath = 'https://customsigncenter.com/calendar/models/';
		foreach(["csc.xml","out.xml"] as $file){
			$this->saveFiles($file);
		}
		//which company xml file to backup?
		/*switch($this->company){
			case "Custom Sign Center":
				$this->file = "csc.xml";				
				exit;
				break;
			case "Outdoor Images":
				$this->file = "out.xml";
				break;
			default:
				echo json_encode(["msg"=>$data]);
				exit;
		}	*/
				
		echo json_encode(array("msg"=>$this->message));
		exit;
	}
	
	function saveFiles($file){
		// Use file_get_contents() function to get the file
		// from the path and use file_put_contents() function to
		// save the file to the base name
		$fileprefix = date('Y-m-d_H-i').'_';
		$fcontents = file_get_contents($this->remoteStoragePath.$file);
		if(file_put_contents($this->savePath.$fileprefix.$file, $fcontents)) {
			$this->message .= $fileprefix.$file." was successfully backed up to the server.<br>";
		}
		else {
			$this->message .= $file. " was not backed up.<br>";
		}
	}
}
//run it:
$bu = new Backup;