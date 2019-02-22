<li>
    <a href="<?= $configuracoes["site_url"] ?>admin/admin" class="waves-effect waves-cyan"><i class="fa fa-dashboard"></i> Dashboard</a>
</li>

<li class="no-padding">

    <ul class="collapsible collapsible-accordion">

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

    </ul>

</li>