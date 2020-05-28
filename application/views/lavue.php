


<p>Votre pseudo est <?=pseudo;?></p><br>
<p>Votre email est <?=email;?></p><br>
<?php 
	if($online) {?>
		<p>Vous êtes en ligne</p>
	}?>
	<?php
	else {
		echo "<p>Vous n'êtes pas en ligne</p>";
	}
	?>