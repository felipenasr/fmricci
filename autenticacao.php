<!DOCTYPE html>
<html lang="PT-br">

	<?php include "head.php"; ?>
	<body>
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

		</div>

		<div class="teste">
			<p id="1"></p>
			<p id="2"></p>
			<p id="3"></p>
			<p id="4"></p>

		</div>
		<?php include "script.php" ?>

	</body>



</html>

treinadorPrincipal
<script>
	dadosDoTreinador();
	ajustaNome ();

	console.log(treinadorPrincipal);

	$('#1').text(treinadorPrincipal.nome);
	$('#2').text(treinadorPrincipal.data);
	$('#3').text(treinadorPrincipal.clubeTorce);
	$('#4').text(treinadorPrincipal.clubeEscolhido);

</script>

