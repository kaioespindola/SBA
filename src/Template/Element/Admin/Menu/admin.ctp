<li>
    <a href="<?= $configuracoes["site_url"] ?>admin/admin" class="waves-effect waves-cyan"><i class="fas fa-columns"></i> Dashboard</a>
</li>

<li class="no-padding">

    <ul class="collapsible collapsible-accordion">

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="fas fa-newspaper"></i> Notícias</a>
            <div class="collapsible-body">
                <ul>
                    <li>
                        <a href="<?= $configuracoes["site_url"] ?>admin/noticias" class="waves-effect waves-cyan"><i class="fa fa-list"></i> Listagem</a>
                    </li>                           
                    <li>
                        <a href="<?= $configuracoes["site_url"] ?>admin/noticias/adicionar" class="waves-effect waves-cyan"><i class="fa fa-plus"></i> Adicionar Notícia</a>
                    </li>
                    <li>
                        <a href="<?= $configuracoes["site_url"] ?>admin/categories" class="waves-effect waves-cyan"><i class="fa fa-archive"></i> Categorias</a>
                    </li>
                    <li>
                        <a href="<?= $configuracoes["site_url"] ?>admin/tags" class="waves-effect waves-cyan"><i class="fa fa-tags"></i> Tags</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="fa fa-clone"></i> Páginas</a>
            <div class="collapsible-body">
                <ul>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-list"></i> Listagem',
                            ['controller' => 'paginas', 'action' => 'index'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false])
                        ?>
                    </li>                               
                    <li>
                        <?= $this->Html->link('<i class="fa fa-plus"></i> Adicionar Página',
                            ['controller' => 'paginas', 'action' => 'adicionar'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false])
                        ?>
                    </li>
                </ul>
            </div>
        </li>

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="far fa-newspaper"></i> Programas</a>
            <div class="collapsible-body">
                <ul>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-list"></i> Listagem',
                            ['controller' => 'programas', 'action' => 'index'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false])
                        ?>
                    </li>                               
                    <li>
                        <?= $this->Html->link('<i class="fa fa-plus"></i> Adicionar Programa',
                            ['controller' => 'programas', 'action' => 'adicionar'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false])
                        ?>
                    </li>
                </ul>
            </div>
        </li>

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="far fa-clock"></i> Programação</a>
            <div class="collapsible-body">
                <ul>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-list"></i> Listagem',
                            ['controller' => 'programacao', 'action' => 'index'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false])
                        ?>
                    </li>                               
                    <li>
                        <?= $this->Html->link('<i class="fa fa-plus"></i> Adicionar Horário',
                            ['controller' => 'programacao', 'action' => 'adicionar'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false])
                        ?>
                    </li>
                </ul>
            </div>
        </li>

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="fa fa-gavel"></i> Leilões</a>
            <div class="collapsible-body">
                <ul>
                    <li>
                        <a href="<?= $configuracoes["site_url"] ?>admin/leiloes"><i class="fa fa-list"></i> Agenda</a>
                    </li>                               
                    <li>
                        <a href="<?= $configuracoes["site_url"] ?>admin/leiloes/adicionar"><i class="fa fa-plus"></i> Adicionar Leilão</a>
                    </li>
                    <li>
                        <a href="<?= $configuracoes["site_url"] ?>admin/leiloes/arquivo"><i class="fa fa-archive"></i> Arquivo Leilões</a>
                    </li>
                    <li>
                        <a href="<?= $configuracoes["site_url"] ?>admin/leiloeiras"><i class="fa fa-suitcase"></i> Leiloeiras</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="fas fa-gavel"></i> Leilão Facas</a>
            <div class="collapsible-body">
                <ul>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-list"></i> Listagem',
                            ['controller' => 'facas', 'action' => 'index'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false]) 
                        ?>
                    </li>  

                    <li>
                        <?= $this->Html->link('<i class="fa fa-plus"></i> Adicionar Novo',
                            ['controller' => 'facas', 'action' => 'adicionar'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false]) 
                        ?>
                    </li>

                    <li>
                        <?= $this->Html->link('<i class="fa fa-lock"></I> Lances',
                            ['controller' => 'lances', 'action' => 'index'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false]) 
                        ?>
                    </li>
                </ul>
            </div>
        </li>

        <li>
            <a href="<?= $configuracoes["site_url"] ?>admin/configuracoes/midia" class="waves-effect waves-cyan"><i class="far fa-images"></i> Gerenciar Midias</a>
        </li>

        <li>
            <?= $this->Html->link('<i class="fa fa-film"></i> Canais',
                ['controller' => 'canais', 'action' => 'index'],
                ['class' => 'waves-effect waves-cyan', 'escape' => false]) 
            ?>
        </li>

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="fa fa-users"></i> Usuários</a>
            <div class="collapsible-body">
                <ul>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-list"></i> Listagem',
                            ['controller' => 'users', 'action' => 'index'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false]) 
                        ?>
                    </li>                               
                    <li>
                        <?= $this->Html->link('<i class="fa fa-plus"></i> Adicionar Novo',
                            ['controller' => 'users', 'action' => 'adicionar'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false]) 
                        ?>
                    </li>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-lock"></I> Cargos',
                            ['controller' => 'roles', 'action' => 'index'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false]) 
                        ?>
                    </li>
                </ul>
            </div>
        </li>

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="fa fa-cogs"></i> Configurações</a>
            <div class="collapsible-body">
                <ul>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-globe"></i> Geral',
                            ['controller' => 'configuracoes', 'action' => 'geral'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false]) 
                        ?>
                    </li>
                </ul>
            </div>
        </li>

    </ul>

</li>