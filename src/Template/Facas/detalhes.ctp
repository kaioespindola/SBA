<?php $this->layout = 'vazio'; ?>
<?php $this->assign('title', 'Leilão de Facas'); ?>

<style>
.espaco-faca {
  padding:16px;
}
.caixa-faca {
    background-color:#fff;
    border-radius:7px;
}
.faca-foto {
    padding:5px;
    -webkit-box-shadow: 10px 0px 80px -9px rgba(0,0,0,0.59);
    -moz-box-shadow: 10px 0px 80px -9px rgba(0,0,0,0.59);
    box-shadow: 10px 0px 80px -9px rgba(0,0,0,0.59);
}
input {
  all: unset;
}

h4 {
    margin-bottom:0px;
    padding-bottom:0px;
}

p {
    padding:0px;
    margin-top:0px;
}
</style>

<?= $this->Flash->render() ?>

<div class="col s12" style="padding-left:25px;padding-right:25px;padding-top:35px;">

  <div class="modal-content">

    <h4 style="font-weight:800;font-size:1.60rem;">Lote #<?= $faca->lote ?></h4>

    <div class="row">

      <div class="col s6">

        <div class="col s12">

            <div class="faca-foto" style="margin-top:10px;">
                <img class="responsive-img materialboxed" id="fotofaca<?= $faca->lote ?>" class="responsive-img" src="<?= $faca->picture1 ?>">
            </div>

        </div>

        <?php if(!empty($faca->picture1)): ?>

            <div class="col s4" style="border-radius:9px;margin-top:12px;">
                <center>
                    <a onclick='document.getElementById("fotofaca<?= $faca->lote ?>").src = "<?= $faca->picture1 ?>"'>
                        <img class="responsive-img" src="<?= $faca->picture1 ?>">
                    </a>
                </center>
            </div>

        <?php endif; ?>

        <?php if(!empty($faca->picture2)): ?>

            <div class="col s4" style="border-radius:9px;margin-top:12px;">
                <center>
                    <a onclick='document.getElementById("fotofaca<?= $faca->lote ?>").src = "<?= $faca->picture2 ?>"'>
                        <img class="responsive-img" src="<?= $faca->picture2 ?>">
                    </a>
                </center>
            </div>

        <?php endif; ?>

        <?php if(!empty($faca->picture3)): ?>

            <div class="col s4" style="border-radius:9px;margin-top:12px;">
                <center>
                    <a onclick='document.getElementById("fotofaca<?= $faca->lote ?>").src = "<?= $faca->picture3 ?>"'>
                        <img class="responsive-img" src="<?= $faca->picture3 ?>">
                    </a>
                </center>
            </div>

        <?php endif; ?>

      </div>

      <div class="col s6">
          <h4>Descrição</h4>
          <p><?= $faca->descricao ?></p> 
          <h4>Maior Oferta</h4>
          <p style="font-weight:800;font-size:2.00rem;">
              R$
              <?php if(!empty($faca->lances[0]->valor)): ?>
                  <?= $faca->lances[0]->valor ?>
              <?php else: ?>
                  0
              <?php endif; ?>
          </p>
          <h4>Fazer Oferta</h4>

          <?php if(empty($faca->lances[0]->valor)): ?>
              <?php $oferta = 0; ?>
          <?php else: ?>
              <?php $oferta = $faca->lances[0]->valor; ?>
          <?php endif; ?>

          <?= $this->Form->create(null, [
              'url' => ['controller' => 'facas', 'action' => 'add']
          ]); ?>

          <?= $this->Form->input('faca_id', [
              'class' => 'hide',
              'label' => '',
              'type' => 'number',
              'value' => $faca->id
          ]) ?>

          <?= $this->Form->input('comprador', [
              'label' => 'Nome do Comprador',
              'style' => 'font-size:1.90rem;',
              'type' => 'text',
              'placeholder' => 'Nome Completo'
          ]) ?>

          <?= $this->Form->input('telefone', [
              'label' => 'Telefone do Comprador',
              'style' => 'font-size:1.90rem;',
              'type' => 'number',
              'placeholder' => 'Telefone'
          ]) ?>

          <?= $this->Form->input('cpf', [
              'label' => 'CPF do Comprador',
              'style' => 'font-size:1.90rem;',
              'type' => 'text',
              'placeholder' => 'CPF do Comprador'
          ]) ?>

          <?= $this->Form->input('valor', [
              'label' => 'Valor de Oferta',
              'style' => 'font-size:1.90rem;',
              'type' => 'number',
              'placeholder' => 'R$',
              'value' => $oferta + 50,
          ]) ?>

          <?= $this->Form->button('Efetuar Oferta', [
              'class' => 'aves-effect waves-light btn col s12',
              'type' => 'submit',
              'escape' => false,
              'style' => 'argin-top:6px;border-radius:7px;'
          ]) ?>

          <?= $this->Form->end() ?>

      </div>

    </div>

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