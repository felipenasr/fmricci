<style>
	div p {
		text-align: center;
	}
	.lorem{
		background: blue;
		height: 450px;
	}
</style>
<main class="mdl-layout__content">
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col mdl-cell--1-col-tablet mdl-cell--1-col-phone hide-cel"></div>
		<div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--4-col-phone">
			<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" id="nome-treinador" pattern="[A-Z,a-z, ]*">
				<label class="mdl-textfield__label" for="nome-treinador">Nome do Treinador</label>
				<span class="mdl-textfield__error"> cabrunco</span>
			</div>
			<div id="idade-trienador">
				<p>07/01/1995</p>
			</div>
			<div id="time-do-coracao">
				<p>Palmeiras</p>
			</div>
			<div id="time-escolhido">
				<p>Botafogo</p>
			</div>


			<div class="button-container">
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary mdl-button--fab mdl-button--mini-fab"><i class="material-icons">add</i></button>

				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary mdl-button--raised">Confirma</button>

				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary mdl-button--fab"><i class="material-icons">add</i></button>
			</div>

		</div>
		<div class="mdl-cell mdl-cell--3-col mdl-cell--1-col-tablet mdl-cell--1-col-phone hide-cel"></div>


		<div class="mdl-cell mdl-cell--3-col mdl-cell--1-col-tablet mdl-cell--1-col-phone hide-cel"></div>
		<div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--4-col-phone lorem">
			<div class="mdl-card mdl-shadow--2dp">
				<div class="mdl-card__title">
					<h2 class="mdl-card__title-text">Titulo teste</h2>
				</div>
				<div class="mdl-card__supporting-text">
					testes
				</div>
				<div class="mdl-card__actions  mdl-card--border">
					<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary mdl-button--fab"><i class="material-icons">add</i></button>
				</div>
				<div class="mdl-card__menu">
					<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary mdl-button--fab mdl-button--mini-fab">
						<i class="material-icons">whatshot</i>
					</button>
				</div>
			</div>
		</div>
		<div class="mdl-cell mdl-cell--3-col mdl-cell--1-col-tablet mdl-cell--1-col-phone hide-cel"></div>



	</div>
</main>