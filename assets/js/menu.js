$(document).ready(main);

var contador = 1;

function main () {
	$('#menu-mobile').click(function() {
		if (contador == 1) {
			$('.nav-mobile').animate({
				left: '0'
			});
			$('.cortina').animate({
				left: '0'
			});
			contador = 0;
		}else{
			contador = 1;
			$('.nav-mobile').animate({
				left: '-100%'
			});
			$('.cortina').animate({
				left: '-100%'
			});
		}
		console.log(contador);
	});
		$('.cortina').click(function() {
		if (contador == 1) {
			$('.nav-mobile').animate({
				left: '0'
			});
			$('.cortina').animate({
				left: '0'
			});
			contador = 0;
		}else{
			contador = 1;
			$('.nav-mobile').animate({
				left: '-100%'
			});
			$('.cortina').animate({
				left: '-100%'
			});
		}
		console.log(contador);
	});
};