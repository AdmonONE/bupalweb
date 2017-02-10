
<!--@if (count($errors) > 0)
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif-->
@extends('layouts.app')

{{ Session::get('message') }}

@section('content')

<h2>Nuevo Registro Salud Estudiantil</h2>




<?php
	$nuevosalud = DB::table('registrossalud')->max('numero');
?>

<?php

	$frases = array(
		0 => "''Si trabajas apasionadamente y realmente convencido de lo que estás haciendo, habrás encontrado la clave del éxito — Anónimo''",
		1 => "''Siempre que te pregunten si puedes hacer un trabajo, contesta que sí y ponte enseguida a aprender cómo se hace — Franklin D. Roosevelt''", 
		2 => "''La confianza en sí mismo es el primer secreto del éxito — Ralph Waldo Emerson''", 
		3 => "''El triunfo no está en vencer siempre, sino en nunca desanimarse — Napoleón Bonaparte''", 
		4 => "''Un hombre inteligente no es el que tiene muchas ideas, sino el que sabe sacar provecho de las pocas que tiene — Anónimo''", 
		5 => "''El éxito no se logra sólo con cualidades especiales. Es sobre todo un trabajo de constancia, de método y de organización — Víctor Hugo''",
		6 => "''El trabajo que nunca se empieza es el que tarda más en finalizarse — J.R.R. Tolkien''",
		7 => "''Escoge un trabajo que te guste, y nunca tendrás que trabajar ni un solo día de tu vida — Confucio'",
		8 => "''El éxito en la vida consiste en siempre seguir adelante — Anónimo'",
		9 => "''El 80% del éxito se basa simplemente en insistir — Woody Allen'",
		10 => "''La motivación nos impulsa a comenzar y el hábito nos permite continuar — Jim Ryun'",
		11 => "''Si puedes soñarlo, puedes hacerlo — Walt Disney'",
		12 => "''Un líder es alguien que conoce el camino, anda el camino, y muestra el camino — John C. Maxwell'",
		13 => "''Pensando en nuestra familia y en nuestros amigos, encontraremos la motivación necesaria para empezar un nuevo día de trabajo — Anónimo'",
		14 => "''El éxito no es la clave de la felicidad. La felicidad es la clave del éxito — Albert Schweitzer'",
		15 => "''Cuanto más tiempo pase sin que actúes, más dinero estás dejando de ganar — Carrie Wilkerson'",
		16 => "''Mantente alejado de aquellas personas que tratan de menospreciar tus ambiciones. Las personas pequeñas siempre lo hacen, pero los verdaderamente grandes hacen sentirte que tú también puedes ser grande — Mark Twain'",
		17 => "''Definitivamente quería ganar mi libertad. Pero la principal motivación no fue hacer dinero, sino causar un impacto — Sean Parker'",
		18 => "''No tengo miedo a morir, tengo miedo a no intentarlo — Jay Z'",
		19 => "''A menudo las personas están trabajando duro en la cosa equivocada. Trabajar en la cosa correcta probablemente es más importante que trabajar duro — Caterina Fake'",
		20 => "''El éxito es la suma de pequeños esfuerzos repetidos un día sí y otro también — Robert Collier'",
		21 => "''Nada es particularmente difícil si lo divides en pequeños trabajos — Henry Ford'",
		22 => "''He aprendido que los errores pueden ser tan buenos profesores como el éxito — Jack Welch'",
		23 => "''Normalmente, lo que nos da más miedo hacer es lo que más necesitamos hacer — Timothy Ferriss'",
		24 => "''Si crees que puedes, ya estás a medio camino — Theodore Roosevelt'",
		25 => "''Trabajar es lo que nos mantiene vivos, sin nuestro trabajo, no seríamos más que seres sin metas en la vida — Anónimo'",
		26 => "''Pregúntate si lo que estás haciendo hoy te acerca al lugar en el que quieres estar mañana - Walt Disney'",
		27 => "''Cuando sientas que todo se pone en tu contra, recuerda que un avión despega contra el viento, no a favor - Henry Ford'",
		28 => "''Comienza haciendo lo que es necesario, después lo que es posible y de repente estarás haciendo lo imposible - San Francisco de Asís'",
		29 => "''La función del liderazgo es producir más líderes, no más seguidores - Ralph Nader'",
		30 => "''Dedica tanto tiempo a tu propia mejora personal que no te quede tiempo para criticar a los demás - Christian D. Larson'",
		31 => "''Nunca vas a poder cruzar el océano hasta que tengas el coraje de dejar de ver la costa - Cristóbal Colón'",
		32 => "''Si quieres llegar rápido, camina solo. Si quieres llegar lejos, camina en grupo - Proverbio africano'",
		33 => "''Si no actúas como piensas, vas a terminar pensando como actúas - Blaise Pascal'",
		34 => "''La forma de empezar algo es dejar de hablar y empezar a hacerlo - Walt Disney'",
		35 => "''Yo no soy tan inteligente, simplemente trabajo en los problemas más tiempo - Albert Einstein'",
		);

$numero = rand(1,35);

?>




<?php
function now($format, $language = "es") {
	if($format == 1) {
		return ($language === "es") ? date("d/m/y", time()): date("m/d/y", time());
	} elseif($format == 2) {	
		$day = date("l");
 
		if ($language === "es") {
			if ($day == "Monday") 	 $day = "Lunes";
			if ($day == "Tuesday") $day = "Martes";
			if ($day == "Wednesday") $day = "Miércoles";
			if ($day == "Thursday") $day = "Jueves";
			if ($day == "Friday") 	 $day = "Viernes";
			if ($day == "Saturday") $day = "Sabado";
			if ($day == "Sunday") 	 $day = "Domingo";
		}
 
		$day2 = date("d");
		$month = date("F");
 
		if ($language === "es") {
			if ($month == "January") 	$month = "Enero";
			if ($month == "February") 	$month = "Febrero";
			if ($month == "March") 		$month = "Marzo";
			if ($month == "April")	 	$month = "Abril";
			if ($month == "May") 		$month = "Mayo";
			if ($month == "June") 		$month = "Junio";
			if ($month == "July") 		$month = "Julio";
			if ($month == "August") 	$month = "Agosto";
			if ($month == "September") 	$month = "Setiembre";
			if ($month == "October")	$month = "Octubre";
			if ($month == "November") 	$month = "Noviembre";
			if ($month == "December") 	$month = "Diciembre";
		}
 
		$year = date("Y");		
 
		return ($language === "es") ? "$day, $day2 de $month de $year": "$month $day2, $year";
	} elseif($format == 3) {
		return ($language === "es") ? date("d-m-Y H:i:s", time()): date("Y-m-d H:i:s", time());
	}
}
?>

<?php
 $fechaAct = now(2); //Imprime: Miércoles, 27 de Marzo de 2013

 ?>


<form class="col-md-4" action="{{ url('salud') }}" method="post">

	
	<input class="form-control" type="text" name="numero" value="<?php echo ($nuevosalud+1)?>" placeholder="Numero de Oficio" style="visibility:hidden">
	<h5>{{ ($errors->has('numero')) ? $errors->first('numero') : '' }} </h5>

	Numero de Oficio: P.SUS<input type="text" name="date" class="form-control" value="<?php echo ($nuevosalud+1)?>" disabled><br>

	Fecha:<input class="tcal form-control" type="text" name="fecha" value="<?php echo $fechaAct;?>" placeholder="Fecha" autocomplete="off">
	<h5>{{ ($errors->has('fecha')) ? $errors->first('fecha') : '' }} </h5>

	Área:<input class="form-control" type="text" name="" value="{{ Auth::user()->area }} " disabled><br>

	Destinatario:<input class="form-control" type="text" name="destinatario" value="" placeholder="Destinatario">
	<h5>{{ ($errors->has('destinatario')) ? $errors->first('destinatario') : '' }} </h5>

	Asunto:<input class="form-control" type="text" name="asunto" value="" placeholder="Asunto">
	<h5>{{ ($errors->has('asunto')) ? $errors->first('asunto') : '' }} </h5>

	<input class="form-control" type="text" name="usuario" value="{{ Auth::user()->name }}" placeholder="" style="visibility:hidden">
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<center>
	<input class="btn btn-primary" type="submit" name="name" value="Agregar" style="width: 40%; margin-right: 10%">
	<a href="{{ url('salud') }}" class="btn btn-warning" style="width: 40%;">Regresar</a>
	</center>

	<input class="form-control" type="text" name="area" value="{{ Auth::user()->area }} " placeholder="Area" style="visibility:hidden">
	<h5>{{ ($errors->has('area')) ? $errors->first('area') : '' }} </h5>
</form>


<div class="col-md-6 divfrases">
	<?php

	echo "$frases[$numero]";

?>
</div>

@stop