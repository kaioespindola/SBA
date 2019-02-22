<?php
    $api_key = 'AIzaSyD8BG0exUZxMcnOKpOeRHBxr0iUN4vxGcM';
    $playlist_id =  'PLuVvwps2-SsWNYmzbH8A5qUNHu3q3M9o5';
    $api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=10&playlistId='. $playlist_id . '&key=' . $api_key;
        
    $playlist = json_decode(file_get_contents($api_url));
?>

<div class="container">

    <div class="carrousel">

        <div class="titulo">
            <h1>Agricultura BR - Entrevistas</h1>
            <p>ver todas</p>
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