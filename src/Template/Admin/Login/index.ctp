<body class="login-background"> 

	<div class="container-login">

		<div class="row">

			<div class="col s12 center-align">
				<img class="login-logo responsive-img" src="<?= $configuracoes["site_url"] ?>img/logo-compact.png">
			</div>

			<div class="col s12 center-align">
				<h4>Efetue o <b>login</b> para continuar <?= $this->Flash->render() ?></h4>
			</div>

			<div class="col s12 logar">

              <?= $this->Form->create() ?>

	              <div class="input-field col s12">
	                <i class="material-icons prefix">account_circle</i>
	                <input id="username" name="username" type="text" class="validate">
	                <label class="blue-grey-text" for="username">Usuário</label>
	              </div>

	              <div class="input-field col s12">
	                <i class="material-icons prefix">lock</i>
	                <input id="password" name="password" type="password" class="validate">
	                <label class="blue-grey-text" for="password">Senha</label>
	              </div>

	              <?= $this->Form->button('Logar', [
	                  'class' => 'col s12 waves-effect waves-light btn blue-grey',
	                  'escape' => false
	              ]) ?>

              <?= $this->Form->end() ?>

			</div>

		</div>

	</div>

</body>