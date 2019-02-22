<div class="menu-fluido">

    <div class="container">

        <div class="menu-principal">

            <div class="dropdown" onclick="abrirMenu()">

                <i id="icone-menu" class="fas fa-bars"> <div>MENU</div></i>

            </div>

            <div id="logo" class="logo">
                <center><a href="<?= $configuracoes["site_url"] ?>index.php"><img src="<?= $configuracoes["site_url"] ?>imgs/logo.png"></a></center>
            </div>

            <div class="pesquisar" onclick="abrirPesquisa()">
                <i class="fas fa-search"></i>
            </div>

        </div>

    </div>

    <div id="menu-dropdown" class="">

        <div class="menu">

            <ul>
                <li><a href="<?= $configuracoes["site_url"] ?>index.php">HOME</a></li>
                <li><a href="<?= $configuracoes["site_url"] ?>aovivo">AO VIVO</a></li>
                <li><a href="<?= $configuracoes["site_url"] ?>leiloes">AGENDA DE LEILÕES</a></li>
                <li><a href="<?= $configuracoes["site_url"] ?>programacao">PROGRAMAÇÃO</a></li>
                <li><a href="<?= $configuracoes["site_url"] ?>programas">PROGRAMAS</a></li>
                <li><a href="<?= $configuracoes["site_url"] ?>videos">VÍDEOS</a></li>
                <li><a href="<?= $configuracoes["site_url"] ?>noticias">NOTÍCIAS</a></li>
                <li><a href="<?= $configuracoes["site_url"] ?>cadastro">CADASTRO</a></li>
                <li><a href="<?= $configuracoes["site_url"] ?>contato">FALE CONOSCO</a></li>
            </ul>

        </div>
            
    </div>

    <div id="drop-pesquisar">

        <div class="container">

            <div class="pesquisa">


                <?= $this->Form->create(null, ['url' => ['controller' => 'Noticias', 'action' => 'pesquisar']]) ?>
                <?= $this->Form->input('q', [
                    'id' => 'search',
                    'type' => 'text',
                    'label' => '',
                    'class' => 'pesquisar',
                    'placeholder' => 'digite o termo de sua busca',
                    'style' => 'font-weight:600;color:#000;margin-top:5px;',
                    'escape' => false
                ]); ?>
                <?= $this->Form->end() ?>

            </div>

        </div>

    </div>

</div>