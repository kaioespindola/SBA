<?php $this->assign('title', $programa->name); ?>

<div class="escuro">

	<div class="container-pagina">

		<div class="programa-pagina">

			<div class="logo">
				<img src="<?= $configuracoes["site_url"] ?><?= $programa->picture ?>">
			</div>

			<div class="dados">
						
				<h1><?= $programa->name ?></h1>
	
				<?php if(!empty($programa->dias)): ?>
					<h2><?= $programa->dias ?> <i>(horário de Brasília)</i></h2>
				<?php endif; ?>
	
				<?php if(!empty($programa->horarios)): ?>
					<h3><?= $programa->horarios ?></h3>
				<?php endif; ?>
	
				<?php if(!empty($programa->apresentadores)): ?>
					<p>Com <b><?= $programa->apresentadores ?></b></p>
				<?php endif; ?>
	
			</div>

		</div>

	</div>

</div>

<?php if(!empty($programa->integra)): ?>

<?php
    $api_key = 'AIzaSyD8BG0exUZxMcnOKpOeRHBxr0iUN4vxGcM';
    $playlist_id =  $programa->integra;
    $api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=10&playlistId='. $playlist_id . '&key=' . $api_key;
        
    $playlist = json_decode(file_get_contents($api_url));
?>

<div class="container">

    <div class="carrousel">

        <div class="titulo">
            <h1>Programas na Íntegra</h1>
            <p>ver todos</p>
        </div>

        <div class="swiper-container">

            <div class="swiper-wrapper">

                <?php foreach($playlist->items as $item): ?>

                    <div class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=<?= $item->snippet->resourceId->videoId ?>" target="_blank">
                            <div class="item">
                                <div class="img" style="background-image:url('<?= $item->snippet->thumbnails->medium->url ?>');"></div>
                                <h1><?= $item->snippet->title; ?></h1>
                            </div>
                        </a>
                    </div>

                <?php endforeach; ?>

            </div>

            <div class="swiper-button-next"><i class="fas fa-angle-right"></i></div>
            <div class="swiper-button-prev"><i class="fas fa-angle-left"></i></div>

        </div>

    </div>

</div>

<?php endif; ?>

<?php if(!empty($programa->playlist2)): ?>

<?php
    $api_key = 'AIzaSyD8BG0exUZxMcnOKpOeRHBxr0iUN4vxGcM';
    $playlist_id =  $programa->playlist2;
    $api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=10&playlistId='. $playlist_id . '&key=' . $api_key;
        
    $playlist2 = json_decode(file_get_contents($api_url));
?>

<div class="container">

    <div class="carrousel">

        <div class="titulo">
            <h1><?= $programa->playlist2titulo ?></h1>
            <p><a target="_blank" href="https://www.youtube.com/playlist?list=<?= $programa->playlist2 ?>">ver todos</a></p>
        </div>

        <div class="swiper-container">

            <div class="swiper-wrapper">

                <?php foreach($playlist2->items as $item): ?>

                    <div class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=<?= $item->snippet->resourceId->videoId ?>" target="_blank">
                            <div class="item">
                                <div class="img" style="background-image:url('<?= $item->snippet->thumbnails->medium->url ?>');"></div>
                                <h1><?= $item->snippet->title; ?></h1>
                            </div>
                        </a>
                    </div>

                <?php endforeach; ?>

            </div>

            <div class="swiper-button-next"><i class="fas fa-angle-right"></i></div>
            <div class="swiper-button-prev"><i class="fas fa-angle-left"></i></div>

        </div>

	</div>
	
</div>

<?php endif; ?>

<div class="container">

	<h1 style="padding: 0rem 1rem;">O Programa</h1>

    <div style="padding:1rem;">
        <p><?= $programa->text ?></p>
    </div>

</div>