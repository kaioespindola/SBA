<?php $this->assign('title', 'Início'); ?>

<?= $this->cell('Players'); ?>

<div class="container">

    <div class="bloco">

        <?= $this->cell('noticias'); ?>

        <?= $this->element('Cotacoes/cotacao'); ?>

        <?= $this->element('previsao'); ?>

    </div>

</div>

<?= $this->cell('leiloes'); ?>

<?= $this->element('Videos/ultimos'); ?>

<?= $this->element('Videos/agricultura-analises'); ?>

<?= $this->cell('programas'); ?>

<?= $this->cell('Materias'); ?>