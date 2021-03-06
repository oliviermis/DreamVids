<div class="container">
	<div class="container" style="width: 80%;">
		<div class='border-top'></div>
			<h1><?php echo $session->getName(); ?><small> Mises en ligne</small></h1>
		<div class='border-bottom'></div>

		<br><br>
	</div>

	<div class='container' style='width: 80%;'>
		<img src='img/banner-default.png'>

		<ul class="nav nav-pills">
		  <li><a href="index.php?page=profile">Mon compte</a></li>
		  <li class="active"><a href="index.php?page=manager">Mes vidéos</a></li>
		  <li><a href="#">Messagerie</a></li>
		</ul>

		<br><br>
	</div>

	<div class="container">
		<?php
		echo (isset($err) ) ? '<div class="container"><div class="container" style="width: 80%;"><div class="alert alert-danger">'.$lang['error'].': '.$err.'</div></div></div>' : '';
		
		foreach ($vids as $vid)
		{
		?>
			<div class="row">
				<div class="container" style="width: 80%;">
					<div class="col-md-4">
						<a href="#" class="thumbnail" style="width: 171px; height:113px;">
					      <img data-src="holder.js/171x110" src="img/videos/video.png">
					    </a>
					</div>

					<div class="col-md-4">
					    <p>Titre: <?php echo $vid->getTitle(); ?></p>
					    <p>Vues: <?php echo $vid->getViews(); ?></p>
					    <p>+: <?php echo $vid->getLikes(); ?></p>
					    <p>-: <?php echo $vid->getDislikes(); ?></p>
					</div>

					<br><br>
				    <button class='btn btn-info' onclick="document.location.href='?page=watch&vid=<?php echo $vid->getId(); ?>'">Regarder</button>
				    <button class='btn btn-success'>Paramètres</button>
				    <button class='btn btn-danger'>Supprimer</button>
					
				</div>

				<div class="container separator" style="width: 80%;"></div>
		<?php
		}
		?>
		</div>
	</div>
</div>