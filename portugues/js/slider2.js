//======== ALMACENANDO VARIABLES (SLIDER Y BOTONES) ==========//

var slider2 = $('#slider-info');
var avanzar2 = $('#btn-avanzar2');
var retroceder2 = $('#btn-retroceder2');

//===========  INSERTANDO LA ULTIMA IMAGEN DEL SLIDER AL PRINCIPIO DEL RECORRIDO  ===========//
$('#slider-info section:last').insertBefore('#slider-info section:first');

//===== 	MOVIENDO EL MARGEN PARA VER LA PRIMERA IMAGEN    ==============//
slider2.css('margin-left', '-'+100+'%');

//========	PROGRAMANDO EL BOTON DE AVANZAR   ===========//
function moverD2(){
	slider2.animate({marginLeft:'-'+200+'%'},700, function(){
		//==  INSERTANDO LA PRIMERA IMAGEN DEL SLIDER AL FINAL DEL RECORRIDO  ==//
		$('#slider-info section:first').insertAfter('#slider-info section:last');
		//=== MOVIENDO EL MARGEN PARA VER LA IMAGEN CORRECTA//
		slider2.css('margin-left', '-'+100+'%');
	});
}

//========	PROGRAMANDO EL BOTON DE REGRESAR   ===========//
function moverI2(){
	slider2.animate({marginLeft:0},700, function(){
		//==  INSERTANDO LA ULTIMA IMAGEN DEL SLIDER AL INICIO DEL RECORRIDO  ==//
		$('#slider-info section:last').insertBefore('#slider-info section:first');
		//=== MOVIENDO EL MARGEN PARA VER LA IMAGEN CORRECTA//
		slider2.css('margin-left', '-'+100+'%');
	});
}

//=== ACTIVANDO BOTON DE AVANZAR ===//
avanzar2.on('click',function(){
	moverD2();
});

//=== ACTIVANDO BOTON DE RETROCEDER ===//
retroceder2.on('click', function(){
	moverI2();
});

// //====  AUTOPLAY SLIDER ====//
// function autoplay(){
// 	interval = setInterval(function(){
// 		moverD();
// 	}, 5000);
// }

// autoplay();