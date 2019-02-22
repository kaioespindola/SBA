<?php $this->assign('title', 'Cadastro'); ?>

<div class="container-sky">

	<div class="row">

	    <div class="col s12 titulo-pagina" style="padding-left:10px;padding-right:10px;padding-top:15px;">

	        <h1>Cadastro SBA</h1>
	        <h5>Participe de nossos leilões</h5>
	        <hr>

	    </div>

	    <div class="col s12">

			<div class="section">
				<h2>Dados Pessoais</h2>
			</div>

			<div class="row">

				<div class="input-field col s5">

					<?= $this->Form->input('name', [
						'label' => 'Nome Completo',
						'type' => 'text',
						'class' => 'validate'])
					?>

				</div>

				<div class="input-field col s5">

					<?= $this->Form->input('email', [
						'label' => 'E-mail',
						'type' => 'email',
						'class' => 'validate'])
					?>

				</div>

				<div class="input-field col s2">

					<?= $this->Form->input('telefone', [
						'label' => 'Telefone Fixo',
						'type' => 'number',
						'class' => 'validate'])
					?>

				</div>

				<div class="input-field col s2">

					<?= $this->Form->input('celular', [
						'label' => 'Telefone Celular',
						'type' => 'number',
						'class' => 'validate'])
					?>

				</div>

				<div class="input-field col s3">

					<?= $this->Form->input('profissao', [
						'label' => 'Profissão',
						'type' => 'text',
						'class' => 'validate'])
					?>

				</div>

				<div class="input-field col s12">

				</div>

				<div class="input-field col s3">

					<?= $this->Form->input('cpf', [
						'label' => 'CPF',
						'type' => 'number',
						'class' => 'validate'])
					?>

				</div>

				<div class="input-field col s3">

					<?= $this->Form->input('rg', [
						'label' => 'RG',
						'type' => 'number',
						'class' => 'validate'])
					?>

				</div>

				<div class="input-field col s3">

					<?= $this->Form->input('ssp', [
						'label' => 'SSP',
						'type' => 'text',
						'class' => 'validate'])
					?>

				</div>

				<div class="input-field col s12">

				</div>

				<div class="input-field col s3">

					<?= $this->Form->input('nascimento', [
						'label' => 'Data de Nascimento',
						'type' => 'text',
						'class' => 'validate'])
					?>

				</div>

				<div class="input-field col s3">

					<?= $this->Form->input('sexo', [
						'label' => 'Sexo',
						'type' => 'text',
						'class' => 'validate'])
					?>

				</div>

				<div class="input-field col s3">

					<?= $this->Form->input('civil', [
						'label' => 'Estado Civil',
						'type' => 'text',
						'class' => 'validate'])
					?>

				</div>

			</div>

	    </div>

		<div class="col s12">

			<div class="section">
				<h2>Dados Residenciais</h2>
			</div>

			<div class="input-field col s4">

				<?= $this->Form->input('cep', [
					'label' => 'CEP',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>
			
			<div class="input-field col s12">

			</div>

			<div class="input-field col s5">

				<?= $this->Form->input('endereco-residencial', [
					'label' => 'Endereço',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s2">

				<?= $this->Form->input('numero-residencial', [
					'label' => 'Número',
					'type' => 'number',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s5">

				<?= $this->Form->input('complemento-residencial', [
					'label' => 'Complemento',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s4">

				<?= $this->Form->input('bairro-residencial', [
					'label' => 'Bairro',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s4">

				<?= $this->Form->input('cidade-residencial', [
					'label' => 'Cidade',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s4">

				<?= $this->Form->input('estado-residencial', [
					'label' => 'Estado',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

		</div>

		<div class="col s12">

			<div class="section">
				<h2>Dados Comerciais</h2>
			</div>

			<div class="input-field col s5">

				<?= $this->Form->input('empresa-comercial', [
					'label' => 'Empresa',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s7">

				<?= $this->Form->input('email-comercial', [
					'label' => 'E-mail',
					'type' => 'email',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s4">

				<?= $this->Form->input('cnpj-comercial', [
					'label' => 'CNPJ',
					'type' => 'number',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s2">

				<?= $this->Form->input('inscricao-comercial', [
					'label' => 'Inscrição Estadual',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s3">

				<?= $this->Form->input('telefone-comercial', [
					'label' => 'Telefone',
					'type' => 'number',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s3">

				<?= $this->Form->input('celular-comercial', [
					'label' => 'Celular',
					'type' => 'number',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s2">

				<?= $this->Form->input('cep-comercial', [
					'label' => 'CEP',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s8">

				<?= $this->Form->input('endereco-comercial', [
					'label' => 'Endereço',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s2">

				<?= $this->Form->input('numero-comercial', [
					'label' => 'Número',
					'type' => 'number',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s2">

				<?= $this->Form->input('complemento-comercial', [
					'label' => 'Complemento',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s4">

				<?= $this->Form->input('bairro-comercial', [
					'label' => 'Bairro',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s4">

				<?= $this->Form->input('cidade-comercial', [
					'label' => 'Cidade',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s2">

				<?= $this->Form->input('estado-comercial', [
					'label' => 'Estado',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>


		</div>

		<div class="col s12">

			<div class="section">
				<h2>Preferência de Animais</h2>
			</div>

		</div>

		<div class="col s12">

			<div class="section">
				<h2>Dados da Fazenda</h2>
			</div>

		</div>

		<div class="col s12">

			<div class="section">
				<h2>Preferência de TVs</h2>
			</div>

		</div>

		<div class="col s12">

			<div class="section">
				<h2>Dados Bancários</h2>
			</div>

			<div class="input-field col s3">

				<?= $this->Form->input('banco', [
					'label' => 'Banco',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s3">

				<?= $this->Form->input('agencia', [
					'label' => 'Agência',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s3">

				<?= $this->Form->input('conta', [
					'label' => 'Conta',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s2">

				<?= $this->Form->input('telefone-banco', [
					'label' => 'Telefone',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s2">

				<?= $this->Form->input('cliente-desde', [
					'label' => 'Cliente desde',
					'type' => 'number',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s4">

				<?= $this->Form->input('falarcom', [
					'label' => 'Falar com',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s4">

				<?= $this->Form->input('autorizo', [
					'label' => 'Autorizo',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

			<div class="input-field col s2">

				<?= $this->Form->input('cpf-banco', [
					'label' => 'CPF',
					'type' => 'text',
					'class' => 'validate'])
				?>

			</div>

		</div>

		<div class="col s12">

			<div class="section">
				<h2>Informações Complementares</h2>
			</div>

		</div>

	</div>

</div>