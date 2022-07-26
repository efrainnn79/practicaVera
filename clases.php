<?php

//MI CLASES
class miClase{
	//son atributos
	public $atributoUno;//public accedes desde cualquir parte
	public $atributoDos;
	private $correo;//private utilizar dentro demi class
	public static $uno="este es atributo";//public static acceder mucho mas rapido de afuera
	const MI_CONSTANTE=3.1416;

	public function miMetodo(){
		echo "Esto es un metodo";
	}
};
//MIS OBJETOS - instanciacion
$miObjetoUno=new miClase;

//INSERCION DE DATOS
$miObjetoUno->atributoUno="Yoney Gallardo";
$miObjetoUno->atributoDos="33";

//LLAMANDO DE DATOS
echo $miObjetoUno->atributoUno."<br>";
echo $miObjetoUno->atributoDos."<br>";

$miObjetoUno->miMetodo1();







?>