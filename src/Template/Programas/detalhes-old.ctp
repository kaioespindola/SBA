<style>
.noticias-home .dados h1 {
	margin-top:5px;
	font-size:1.59rem;
}
.noticias-home .thumbnail {
	background-size:110%;
	background-position:top top;
}
.noticias-home .thumbnail:hover {
	background-size:115%;
}

	@media(min-width:768px) {
		.espacamento {
			padding-left:15px;
			padding-right:15px;
		}
	}
	.dados h1 {
		margin-top:5px;
		font-size:1.3rem;
	}
    .thumbnail .texto {
        position: absolute;
        text-align:center;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity ease-in-out 500ms;
        background: rgba(0, 0, 0, 0.4);
        opacity:1;
    }
    .thumbnail .texto:hover {
        opacity:0.5;
    }
    .videoWrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        padding-top: 25px;
        height: 0;
    }
    .videoWrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
	
	.botao {
		color:#fff;
		font-size:0.9em;
		font-weight:600;
		width:100%;
		height:100px;
		padding-top:8px;
		padding-right:0px;
		border: none;
		outline: none;
		cursor: pointer;
		font-size: 18px;
		transition:0.3s;
		margin-top:19px;
		margin-bottom:3px;
		opacity:0.5;
	}

	.botao img{
		padding-bottom:15px;
		padding-right:0px;
		margin:0px;
	}

	/* Style the active class, and buttons on mouse-over */
	.ativo, .botao:hover {
		color:white;
		border-radius:8px;
		background-color:#373737;
		opacity:1;
	}

	.vertodos {
		margin:50px;
	}
</style>

<?php $this->assign('title', $programa->name); ?>

<div class="col s12 capa-programa" style="background-image:url('<?= $configuracoes["site_url"] ?>img/bg-programa.jpg');">

	<div class="container-sky" style="margin-top:0px;">

		<div class="row">

			<div class="col s12 m5 l5 xl5" style="padding:0px;margin:0px;" data-aos="fade-left" data-aos-duration="1200">
				<center><img class="responsive-img" src="<?= $configuracoes['site_url'] ?><?= $programa->picture ?>"></center>
			</div>

			<div class="col s12 m7 l7 xl7 dados hide-on-small-only" data-aos="fade-left" data-aos-duration="1600" style="padding-bottom:15px;">

        		<h3><?= $programa->name ?></h3>

				 <?php if(!empty($programa->dias)): ?>
	              <h5><?= $programa->dias ?> <i>(horário de Brasília)</i></h5>
	             <?php endif; ?>

	              <?php if(!empty($programa->horarios)): ?>
	              <h5><?= $programa->horarios ?></h5>
	          	  <?php endif; ?>

	          	  <?php if(!empty($programa->apresentadores)): ?>
          	  		<h5>Com <b><?= $programa->apresentadores ?></b></h5>
	          	  <?php endif; ?>

			</div>

			<div class="col s12 m7 l8 xl9 dados-mobile hide-on-med-and-up" data-aos="fade-up" data-aos-duration="1600">

        		<h3><?= $programa->name ?></h3>

				 <?php if(!empty($programa->dias)): ?>
	              <h5><?= $programa->dias ?> <i>(horário de Brasília)</i></h5>
	             <?php endif; ?>

	              <?php if(!empty($programa->horarios)): ?>
	              <h5><?= $programa->horarios ?></h5>
	          	  <?php endif; ?>

	          	  <?php if(!empty($programa->apresentadores)): ?>
          	  		<h5>Com <b><?= $programa->apresentadores ?></b></h5>
	          	  <?php endif; ?>

	    		  <div class="hide-on-med-and-up">
		            <?php if(!empty($programa->contato)): ?>
		            	<h5><a href="mailto:<?= $programa->contato ?>" target="_top"> <i class="fas fa-envelope"></i> <?= $programa->contato ?></a></h5>
		          	<?php endif; ?>
	          	  </div>

			</div>

		</div>

	</div>

</div>

<div class="container-sky">

    <div class="row">

    	<div class="col s12 m12 l12" style="padding:0px;">

			<?php if(!empty($programa->integra)): ?>

				<div class="col s12 titulo-pagina" data-aos="fade-up" data-aos-duration="1000" style="padding-left:10px;padding-right:10px;padding-top:15px;">

					<h1>Programas na Íntegra</h1>
					<hr>

				</div>

				<?php
					$api_key = 'AIzaSyD8BG0exUZxMcnOKpOeRHBxr0iUN4vxGcM';
					$playlist_id =  $programa->integra;
					$api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=7&playlistId='. $playlist_id . '&key=' . $api_key;
						
					$playlist = json_decode(file_get_contents($api_url));
				?>

				<div class="col s12 l7" style="background-color:#252525;padding-left:0px;padding-right:0px;" data-aos="fade-up" data-aos-duration="1100">

					<div class="videoWrapper">
						<iframe id="player" width="560" height="349" src="https://www.youtube.com/embed/<?= $playlist->items[0]->snippet->resourceId->videoId ?>" frameborder="0" allowfullscreen></iframe>
					</div>

				</div>

				<div class="col s12 l5" style="background-color:#252525;height:378px;overflow:scroll;border-radius:0px 7px 7px 0px;" data-aos="fade-up" data-aos-duration="1100">

					<div id="myDIV">

							<a onclick='document.getElementById("player").src = "https://www.youtube.com/embed/<?= $playlist->items[0]->snippet->resourceId->videoId ?>" '>
								<div class="col s12">
									<div class="botao ativo">
										<div class="col s4">
											<img class="responsive-img" src="<?= $playlist->items[0]->snippet->thumbnails->high->url ?>">
										</div>
										<div class="col s8">
											<?= $playlist->items[0]->snippet->title ?>
										</div>
									</div>
								</div>
							</a>
						
						<?php 
						
						$i = 1;

						?>
						<?php foreach($playlist->items as $item): ?>

							<?php if($i <> 1): ?>

								<a onclick='document.getElementById("player").src = "https://www.youtube.com/embed/<?= $item->snippet->resourceId->videoId ?>" '>
									<div class="col s12">
										<div class="botao">
											<div class="col s4">
												<img class="responsive-img" src="<?= $item->snippet->thumbnails->high->url ?>">
											</div>
											<div class="col s8">
												<?= $item->snippet->title ?>
											</div>
										</div>
									</div>
								</a>

							<?php endif; $i++; ?>

						<?php endforeach; ?>

					</div>

				</div>

			<?php endif; ?>

    	</div>

    </div>
            
</div>

<?php if(!empty($programa->playlist2)): ?>

	<div class="container-corpo">

		<div class="row">

			<?php
				$api_key = 'AIzaSyD8BG0exUZxMcnOKpOeRHBxr0iUN4vxGcM';
				$playlist2_id =  $programa->playlist2;
				$api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=4&playlistId='. $playlist2_id . '&key=' . $api_key;
					
				$playlist2 = json_decode(file_get_contents($api_url));
			?>

			<div class="col s12 titulo-widget" style="padding-left:10px;padding-right:10px;">

				<h1><?= $programa->playlist2titulo ?></h1>
				<h5><a target="_blank" href="https://www.youtube.com/playlist?list=<?= $playlist2_id ?>">ver todas os vídeos</a></h5>

			</div>

		</div>

	</div>

	<div class="col s12" style="background-color:#ebebeb;padding-top:15px;">

	<div class="container-corpo">

		<div class="row" style="padding:0px;">

			<div class="col s12" style="padding-left:15px;padding-right:15px;padding-top:0px;">

				<?php foreach($playlist2->items as $item): ?>

					<div class="col s12 m6 l3 xl3 noticias-home">

						<a class="modal-trigger" href="#analise<?= $item->snippet->resourceId->videoId ?>">

							<div class="col s12 thumbnail" style="position: relative;background-image:url(<?= $item->snippet->thumbnails->high->url ?>);">
								<div class="texto">
									<img style="width:100px;height:auto;" src="http://sba1.com/arquivos/play.png">
								</div>
							</div>
							
							<div class="col s12 dados">
								<h1><?= $item->snippet->title;  ?></h1>
							</div>

						</a>

					</div>

				<?php endforeach; ?>

				<div class="col s12 m12 l12 xl12 todos right-align">

					<a class="vertodos" target="_blank" href="https://www.youtube.com/playlist?list=<?= $playlist2_id ?>">
						Ver todos os vídeos
					</a>

				</div>

			</div>

		</div>

	</div>

	</div>

	<?php foreach($playlist2->items as $item): ?>

	<div id="analise<?= $item->snippet->resourceId->videoId ?>" class="modal" style="background-color:transparent;">
		<div class="videoWrapper">
			<iframe width="560" height="349" src="https://www.youtube.com/embed/<?= $item->snippet->resourceId->videoId ?>" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

	<?php endforeach; ?>

<?php endif; ?>

<?php if(!empty($programa->playlist3)): ?>

<div class="container-corpo">

	<div class="row">

		<?php
			$api_key = 'AIzaSyD8BG0exUZxMcnOKpOeRHBxr0iUN4vxGcM';
			$playlist3_id =  $programa->playlist3;
			$api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=4&playlistId='. $playlist3_id . '&key=' . $api_key;
				
			$playlist3 = json_decode(file_get_contents($api_url));
		?>

		<div class="col s12 titulo-widget" style="padding-left:10px;padding-right:10px;">

			<h1><?= $programa->playlist3titulo ?></h1>
			<h5><a target="_blank" href="https://www.youtube.com/playlist?list=<?= $playlist3_id ?>">ver todas os vídeos</a></h5>

		</div>

	</div>

</div>

<div class="col s12" style="background-color:#ebebeb;padding-top:15px;">

<div class="container-corpo">

	<div class="row" style="padding:0px;">

		<div class="col s12" style="padding-left:15px;padding-right:15px;padding-top:0px;">

			<?php foreach($playlist3->items as $item): ?>

				<div class="col s12 m6 l3 xl3 noticias-home">

					<a class="modal-trigger" href="#analise<?= $item->snippet->resourceId->videoId ?>">

						<div class="col s12 thumbnail" style="position: relative;background-image:url(<?= $item->snippet->thumbnails->high->url ?>);">
							<div class="texto">
								<img style="width:100px;height:auto;" src="http://sba1.com/arquivos/play.png">
							</div>
						</div>
						
						<div class="col s12 dados">
							<h1><?= $item->snippet->title;  ?></h1>
						</div>

					</a>

				</div>

			<?php endforeach; ?>

			<div class="col s12 m12 l12 xl12 todos right-align">

				<a class="vertodos" target="_blank" href="https://www.youtube.com/playlist?list=<?= $playlist3_id ?>">
					Ver todos os vídeos
				</a>

			</div>

		</div>

	</div>

</div>

</div>

<?php foreach($playlist3->items as $item): ?>

<div id="analise<?= $item->snippet->resourceId->videoId ?>" class="modal" style="background-color:transparent;">
	<div class="videoWrapper">
		<iframe width="560" height="349" src="https://www.youtube.com/embed/<?= $item->snippet->resourceId->videoId ?>" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

<?php endforeach; ?>

<?php endif; ?>

<?php if(!empty($programa->playlist3)): ?>

<div class="container-corpo">

	<div class="row">

		<?php
			$api_key = 'AIzaSyD8BG0exUZxMcnOKpOeRHBxr0iUN4vxGcM';
			$playlist4_id =  $programa->playlist4;
			$api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=4&playlistId='. $playlist4_id . '&key=' . $api_key;
				
			$playlist4 = json_decode(file_get_contents($api_url));
		?>

		<div class="col s12 titulo-widget" style="padding-left:10px;padding-right:10px;">

			<h1><?= $programa->playlist4titulo ?></h1>
			<h5><a target="_blank" href="https://www.youtube.com/playlist?list=<?= $playlist4_id ?>">ver todas os vídeos</a></h5>

		</div>

	</div>

</div>

<div class="col s12" style="background-color:#ebebeb;padding-top:15px;">

<div class="container-corpo">

	<div class="row" style="padding:0px;">

		<div class="col s12" style="padding-left:15px;padding-right:15px;padding-top:0px;">

			<?php foreach($playlist4->items as $item): ?>

				<div class="col s12 m6 l3 xl3 noticias-home">

					<a class="modal-trigger" href="#analise<?= $item->snippet->resourceId->videoId ?>">

						<div class="col s12 thumbnail" style="position: relative;background-image:url(<?= $item->snippet->thumbnails->high->url ?>);">
							<div class="texto">
								<img style="width:100px;height:auto;" src="http://sba1.com/arquivos/play.png">
							</div>
						</div>
						
						<div class="col s12 dados">
							<h1><?= $item->snippet->title;  ?></h1>
						</div>

					</a>

				</div>

			<?php endforeach; ?>

			<div class="col s12 m12 l12 xl12 todos right-align">

				<a class="vertodos" target="_blank" href="https://www.youtube.com/playlist?list=<?= $playlist4_id ?>">
					Ver todos os vídeos
				</a>

			</div>

		</div>

	</div>

</div>

</div>

<?php foreach($playlist4->items as $item): ?>

<div id="analise<?= $item->snippet->resourceId->videoId ?>" class="modal" style="background-color:transparent;">
	<div class="videoWrapper">
		<iframe width="560" height="349" src="https://www.youtube.com/embed/<?= $item->snippet->resourceId->videoId ?>" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

<?php endforeach; ?>

<?php endif; ?>

<div class="container-sky">

	<div class="row">

		<?php if(!empty($programa->text)): ?>

			<div data-aos="fade-up" data-aos-duration="1400" class="col s12 titulo-pagina" style="padding-left:10px;padding-right:10px;padding-top:15px;" id="programa">

				<h1>O Programa</h1>
				<hr>

				<img class="responsive-img hide-on-med-and-up" style="border-radius:8px;margin-top:10px;" src="<?= $configuracoes['site_url'] ?><?= $programa->foto ?>">

				<p><?= $programa->text ?></p>

			</div>

		<?php endif; ?>

	</div>

</div>

<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("botao");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("ativo");
    current[0].className = current[0].className.replace(" ativo", "");
    this.className += " ativo";
  });
}
</script>