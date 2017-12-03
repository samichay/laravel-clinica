var a=1;
var b=1;
var c=1;

function Desplegar(){
	if(a % 2== 1){
		document.getElementById("menu--desplegable1").style.display = "inline";
		document.getElementById("menu--desplegable2").style.display = "none";
		document.getElementById("menu--desplegable3").style.display = "none";
		a=a+1;
	}
	else{
		document.getElementById("menu--desplegable1").style.display = "none";
		a=a+1;
	}
}

function Desplegar2(){
	if(b % 2== 1){
		document.getElementById("menu--desplegable2").style.display = "inline";
		document.getElementById("menu--desplegable1").style.display = "none";
		document.getElementById("menu--desplegable3").style.display = "none";
		b=b+1;
	}
	else{
		document.getElementById("menu--desplegable2").style.display = "none";
		b=b+1;
	}
}

function Desplegar3(){
	if(c % 2== 1){
		document.getElementById("menu--desplegable3").style.display = "inline";
		document.getElementById("menu--desplegable1").style.display = "none";
		document.getElementById("menu--desplegable2").style.display = "none";
		c=c+1;
	}
	else{
		document.getElementById("menu--desplegable3").style.display = "none";
		c=c+1;
	}
}