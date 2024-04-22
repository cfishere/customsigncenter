<?php
if(isset($maintenance)){
  if($maintenance){
    header('Location: maintenance.php');
  }
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Maintenance Mode - WIP Calendar</title> 
   <!-- styles -->   
  <!-- bootstrap 3.3.7 -->
   <link rel="stylesheet" href="styles/bootstrap.min.css" type="text/css" media="all" />
 </head>
 <body>
  <div class="container-fluid" style="padding-top: 300px;">
    <div class="row" style="text-align:center">
      <div class="col-12">
        <h1 class="strong">M A I N T E N A N C E</h1>
      </div>
      <div class="col-12" style="text-align:center; margin:30px auto">
        <p class="strong">Routine maintenance is being performed. Please try to access the WIP Calendar in a few minutes.</p>
      </div>
      <div class="col-12" style="text-align:center">
        <a class="btn btn-info" href="http://<?php echo $_SERVER['SERVER_NAME']?>/calendar/">Try Again</a>
      </div>
    </div>
  </div>
 </body>
 </html>