<nav class="navbar navbar-default my-3">
	<div class="container" style="padding:7px;text-align:center">
		<div style="max-width:770px !important; margin:0 auto;">
		<div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav" style="margin:auto">
		  <li class="nav-item">
		   <button class="save nav-link btn" style="margin-bottom:6px" type="button" name="update" onClick="saveMonth()">Save Updates</button>
		  </li>
		  <li class="nav-item">
		    <button class="save nav-link btn" style="margin-bottom:6px" name="backup" onClick="backupXmlFile()" title="This makes a backup of the storage file on the remote server.  To save current changes you've made since last save, click Save Updates.">Backup</button> 
		  </li>
		 <?php if($role === 'admin') : ?>
		 		<li class="nav-item" style="margin-left:6px">
				  <a href="csvimport.php" target="_blank">
				  <button class="nav-link center btn import" style="margin-bottom:6px" name="import">Import CASper</button></a>
				</li>
			<?php else :?>
				<li class="nav-item">
				  <button class="nav-link center btn import disabled" style="margin-bottom:6px" name="import">Import Csv</button></a>
				</li>
			<?php endif; ?>  
		  	<li class="nav-item">
				<button class="btn nav-link" style="margin-bottom:6px" onclick="clearCache()">Clear Cache</button>
			</li>			

		  <li class="nav-item" style="margin-bottom:10px">
		    	<button class="btn nav-link" id="btnPrint">Print</button>
		  </li>
			<?php if($role==='admin') : ?>
			<li class="nav-item">
					<button class="btn nav-link" style="margin-bottom:6px" id="btnEmail" title="Emails PDF Attachment. See 'HELP', above, for best PDF formatting method.">
					Email
				</button> 
			</li>
		<?php endif; ?>
		</ul>
	</div>
</div>
</nav>