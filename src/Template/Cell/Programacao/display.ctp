<div class="container-corpo">

	<div class="col s12 titulo-widget" style="padding-left:10px;padding-right:10px;">

	    <h1><i class="far fa-clock"></i> Programação</h1>
	    <h5><a href="<?= $configuracoes["site_url"] ?>programacao">ver grade completa</a></h5>

	</div>

	<div class="col s12 m12 l5 xl5">

		<ul class="tabs-programacao" style="padding:0px;margin:0px;">

            <li class="tab col s4 canal">
                <a href="#programacao-canaldoboi">
                    Canal do Boi
                </a>
            </li>

            <li class="tab col s4 canal">
                <a href="#programacao-agrocanal">
                    Agro Canal
                </a>
            </li>

            <li class="tab col s4 canal">
                <a href="#programacao-cinemais">
                    Cine Mais
                </a>
            </li>

	    </ul>

	</div>

</div>

<div class="col s12 programacao-canais">

    <div class="container-corpo">

        <div id="programacao-canaldoboi" style="margin:0px;padding:10px;">

          <div class="row">

            <?php foreach($agoranocb as $item): ?>

              <div class="col s12 m6 l3 xl3 agora">

                  <h5>Agora</h5>

                  <h2><?= $item->name ?></h2>

                  <h4><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></h4>

              </div>

            <?php endforeach; ?>

            <?php foreach($depoisnocb as $item): ?>

              <div class="col s12 m6 l3 xl3 depois">

                  <h5>Depois</h5>

                  <h2><?= $item->name ?></h2>

                  <h4><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></h4>

              </div>

            <?php endforeach; ?>

          </div>

        </div>

        <div id="programacao-agrocanal" style="margin:0px;padding:10px;">

            <div class="row">

              <?php foreach($agoranoac as $item): ?>

                <div class="col s12 m6 l3 xl3 agora">

                    <h5>Agora</h5>

                    <h2><?= $item->name ?></h2>

                    <h4><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></h4>

                </div>

              <?php endforeach; ?>

              <?php foreach($depoisnoac as $item): ?>

                <div class="col s12 m6 l3 xl3 depois">

                    <h5>Depois</h5>

                    <h2><?= $item->name ?></h2>

                    <h4><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></h4>

                </div>

              <?php endforeach; ?>

            </div>

        </div>

        <div id="programacao-cinemais" style="margin:0px;padding:10px;">
          
            <div class="row">

              <?php foreach($agoranocm as $item): ?>

                <div class="col s12 m6 l3 xl3 agora">

                    <h5>Agora</h5>

                    <h2><?= $item->name ?></h2>

                    <h4><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></h4>

                </div>

              <?php endforeach; ?>

              <?php foreach($depoisnocm as $item): ?>

                <div class="col s12 m6 l3 xl3 depois">

                    <h5>Depois</h5>

                    <h2><?= $item->name ?></h2>

                    <h4><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></h4>

                </div>

              <?php endforeach; ?>

            </div>

        </div>

    </div>

</div>