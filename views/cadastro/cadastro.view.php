<section class="large-12 medium-12 small-12 left" id="cadastrar-main">
	<?php 
		if(isset($_GET['confirm']) && isset($_GET['msg'])) {
        	if($_GET['confirm'] == '1')
              echo HTML::mesageDefault(base64_decode($_GET['msg']), 'sucess');
            if($_GET['confirm'] == '2')
              echo HTML::mesageDefault(base64_decode($_GET['msg']), 'alert');
        }
	?>
	<div class="row">
		<div class="large-10 large-centered medium-12 medium-uncentered small-12 small-uncentered columns text-center" id="cadastro">
			<h3>Preencha o formulário e cadastre-se no nosso site!</h3>
			<form action="/funcoes.php?ac=adduser" method="POST">
				<input class="text-field" required type="text" placeholder="Nome" name="nome" /><br />
				<input class="text-field" required type="text" placeholder="E-mail" name="email" /><br />
				<input class="text-field" required type="password" placeholder="Senha" name="senha" /><br />
				<input class="text-field" required type="password" placeholder="Repita novamente a senha" name="senha2" /><br />
				<input class="text-field" required type="text" placeholder="Creci" name="creci" /><br />
				<input class="button-form" type="submit" value="Enviar" onclick="return validarForm(0);" />
				<input class="button-form" type="reset" value="Limpar" />	
			</form>
		</div>
	</div>
</section>

