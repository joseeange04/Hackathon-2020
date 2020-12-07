<?php
	

	 if (isset($errors) && count($errors) != 0) {
			   echo '<div class="alert alert-danger" role="alert">
			   <audio src="images/audio.mp3" controls></audio>
			   <a class="navbar-brand" href="InfoAlerte.php"><i class="fa fa-database" aria-hidden="true"></i>Informations sur les alertes</a>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
	  
		
			   foreach ($errors as $error) {
				   echo $error.'<br/>';
			   }
			   echo '</div>';
		   }  	   
?>


