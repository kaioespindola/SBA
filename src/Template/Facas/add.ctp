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

<center>

    <h1><?= $this->Flash->render() ?></h1>

</center>