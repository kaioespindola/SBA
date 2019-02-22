<li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> Dashboard',
        ['controller' => 'admin', 'action' => 'index'],
        ['class' => 'waves-effect waves-cyan', 'escape' => false]) 
    ?>
</li>

<li class="no-padding">

    <ul class="collapsible collapsible-accordion">

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="fa fa-thumb-tack"></i> Notícias</a>
            <div class="collapsible-body">
                <ul>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-list"></i> Listagem',
                            ['controller' => 'noticias', 'action' => 'index'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false])
                        ?>
                    </li>                               
                    <li>
                        <?= $this->Html->link('<i class="fa fa-plus"></i> Adicionar Notícia',
                            ['controller' => 'noticias', 'action' => 'adicionar'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false])
                        ?>
                    </li>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-archive"></I> Categorias',
                            ['controller' => 'categories', 'action' => 'index'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false])
                        ?>
                    </li>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-tags"></I> Tags',
                            ['controller' => 'tags', 'action' => 'index'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false])
                        ?>
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

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="fa fa-newspaper-o"></i> Programas</a>
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

        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="fa fa-gavel"></i> Leilões</a>
            <div class="collapsible-body">
                <ul>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-list"></i> Agenda',
                            ['controller' => 'leiloes', 'action' => 'index'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false])
                        ?>
                    </li>                               
                    <li>
                        <?= $this->Html->link('<i class="fa fa-plus"></i> Adicionar Leilão',
                            ['controller' => 'leiloes', 'action' => 'adicionar'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false])
                        ?>
                    </li>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-archive"></i> Arquivo Leilões',
                            ['controller' => 'leiloes', 'action' => 'arquivo'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false])
                        ?>
                    </li>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-suitcase"></I> Leiloeiras',
                            ['controller' => 'leiloeiras', 'action' => 'index'],
                            ['class' => 'waves-effect waves-cyan', 'escape' => false])
                        ?>
                    </li>
                </ul>
            </div>
        </li>

        <li>
            <?= $this->Html->link('<i class="fa fa-film"></i> Canais',
                ['controller' => 'canais', 'action' => 'index'],
                ['class' => 'waves-effect waves-cyan', 'escape' => false]) 
            ?>
        </li>

        <li>
            <?= $this->Html->link('<i class="fa fa-camera"></i> Vídeos',
                ['controller' => 'videos', 'action' => 'index'],
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