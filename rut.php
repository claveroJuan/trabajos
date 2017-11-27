
<?php   

$digito=$_POST['digito'];
$contar= 2;
$rut=$_POST['rut'];
$largo = strlen($rut);
$acomulador=0;

//si rut no esta vacio hacer ...
while($rut <> 0)
{
$contador= ($rut % 10)*$contar;
$acomulador = $acomulador + $contador;
$rut= $rut / 10;
$contar =$contar+ 1;
if($contar == 8)
{
	$contar = 2;
	
}
	
}
$division = $acomulador %11;
if($division == 0)
{
	$division= 11;
	
}
$dig = 11 - $division;
$dig2=strval($dig);
if($dig2 == 10)
{
	$dig2= "k";
}
if($digito == $dig2)
{
	echo ("Empleado : nombre empleado");
}
else
{
	echo ("Usuario no encontrado ");
}

?>
<Link rel="StyleSheet" href="Formulario.css" type="text/css"> 


<div class="haberes">
<form>
<p> <h1>Haberes</h1>
</p><h3> Imponibles</h3>
  Sueldo base
  <input type="text" name="Sueldo base:"> <br><br>
  Gratificacion
  <input type="text" name="Gratificacion:"><br><br>
  Hora extra Nomral
  <input type="text" name="Hora extra Nomral:"><br><br>
  Bono incentivo
  <input type="text" name="Bono incentivo"><br><br>
  
  <h3> No Imponibles</h3>
  Asignacion Colacion
  <input type="text" name="Asignacion Colacion"> <br><br>
 
  Asignacion Movilizacion
  <input type="text" name="Asignacion Movilizacion:"><br><br>

  Asignacion Familiar
  <input type="text" name="Asignacion Familiar"><br><br>
  
  Viaticos
  <input type="text" name="Viaticos"><br><br>
  Bono extra Loc/Colacion
  <input type="text" name="Bono extra Loc/Colacion" ><br>
  
  Sueldo liquido
  <input type="text" name="Sueldo liquido"><br><br>
  
   <h2>Total Haberes</h2>
   <input type="text" name="Total descuentos" >
  
</form>
</div>

<form>
<div class="descuentos">

<p> <h1>Descuentos</h1>
</p><h3> Legales</h3>
  Cotizacion AFP
  <input type="text" name="Cotizacion AFP"> <br><br>
  Cotizacion plan salud
  <input type="text" name="Cotizacion plan pactada"><br><br>
  Diferncia plan salud
  <input type="text" name="Diferncia plan salud"><br><br>
  Seguro cesantia
  <input type="text" name="Productividad:" ><br><br>
  Impuesto unico
  <input type="text" name="Impuesto unico" ><br>
  
  <h3> Personales</h3>
  Anticipos
  <input type="text" name="Anticipos"> <br><br>
  Prestamos
  <input type="text" name="Prestamos"><br><br>
  Ahorro voluntario
  <input type="text" name="Ahorro voluntario"><br><br>
  Retencion judicial
  <input type="text" name="Retencion judicial" ><br><br>
  
  <h2>Total descuentos</h2>
  .
  <input type="text" name="Total descuentos" >
  
  </div>
</form>

