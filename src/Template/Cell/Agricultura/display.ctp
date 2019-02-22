<div class="container-corpo">

	<div class="row">

	    <div class="col s12 titulo-widget" style="padding-left:10px;padding-right:10px;">

	        <h1>Agricultura</h1>
	        <h5><a href="<?= $configuracoes["site_url"] ?>categorias/agricultura">ver todas as notícias sobre agricultura</a></h5>

	    </div>

	</div>

</div>

<div class="col s12" style="background-color:#ebebeb;">

	<div class="container-corpo">

		<div class="row" style="padding:0px;">

		    <div class="col s12" style="padding-left:0px;padding-right:0px;">

		        <?php foreach($noticias as $noticia): ?>

		            <div class="col s12 m6 l3 xl3 noticias-home">

		                <a href="<?= $configuracoes["site_url"] ?>noticias/<?= $noticia->slug ?>">

		                    <?php 

		                        $thumbnail = $noticia->thumbnail;
		                        $link_thumb = explode("noticias/", $thumbnail);

		                    ?>

		                    <div class="col s12 thumbnail" style="background-image:url(https://sba1.com/thumbs/noticias/<?= $link_thumb[1] ?>);">
		                    </div>

		                    <div class="col s12 dados">
		                        <h5><?= $noticia->chapeu ?></h5>
		                        <h1><?= $noticia->name ?></h1>
		                    </div>

		                </a>

		            </div>

		        <?php endforeach; ?>

		    </div>

		</div>

	</div>

</div>