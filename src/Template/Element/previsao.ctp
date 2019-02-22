
<div class="previsao-do-tempo">

		<div class="titulo">
			<h1>Previsão do Tempo</h1>
			<a href="#"><p>ver previsões dos próximos dias</p></a>
		</div>
	
		<div class="previsao">
	
			<div class="local">
				<h1 id="local"></h1>
				<p><?= date('d/m/Y') ?></p>
			</div>
	
			<div class="temperatura">
	
				<div class="icone" id="icone">
				</div>
	
				<div class="min" id="temp_min">
				</div>
	
				<div class="max" id="temp_max">
				</div>
	
				<div class="umidade" id="umidade">
				</div>
	
				<div class="chuva" id="temp_agora">
				</div>
	
				<div class="vento" id="vento">
				</div>
	
			</div>
	
			<a href="#"><h5>Ver previsões dos próximos dias</h5></a>
	
		</div>
	
	</div>

<script>


let url = 'https://api.openweathermap.org/data/2.5/forecast?id=3448439&units=metric&appid=9583e31e99e273ddb9d3554cb70a0526';

function procuraPrevisao() {
fetch(url)
.then(result => {
return result.json(); 
}).then(result => {
init(result)
})
}


function init(resultados) {

	console.log(resultados.list[0].main.temp_min);

	let local = document.getElementById("local");
	let icone = document.getElementById("icone");
	let temp_min = document.getElementById("temp_min");
	let temp_max = document.getElementById("temp_max");
	let umidade = document.getElementById("umidade");
	let temp_agora = document.getElementById("temp_agora");
	let vento = document.getElementById("vento");

	let tempminima = resultados.list[0].main.temp_min.toString().substring(0,2);
	let tempmaxima = resultados.list[0].main.temp_max.toString().substring(0,2);
	let tempagora = resultados.list[0].main.temp.toString().substring(0,2);

	local.innerHTML = resultados.city.name;
	icone.innerHTML = `<img src='https://openweathermap.org/themes/openweathermap/assets/vendor/owm/img/widgets/${resultados.list[0].weather[0].icon}.png'>`;
	temp_min.innerHTML = "<p>MIN</p><h1>" + tempminima + "</h1>";
	temp_max.innerHTML = `<p>MAX</p><h1>${tempmaxima}</h1>`;
	umidade.innerHTML = `<p>UMIDADE</p><h1>${resultados.list[0].main.humidity}%</h1>`;
	temp_agora.innerHTML = `<p>AGORA</p><h1>${tempagora}</h1>`;
	vento.innerHTML = `<p>VENTO</p><h1>${resultados.list[0].wind.speed}</h1>`;

}

procuraPrevisao();

</script>
