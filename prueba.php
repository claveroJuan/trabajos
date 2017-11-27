<html>
<head><title>Liquidacion de Sueldo</title>

</head>
<body>


<form  action="rut.php" method="post" > 
<p>Liquidacion </p>
RUT <input type="text"  name="rut">-
<input type="text"  name="digito" size="1">

<input type="submit" name="buscar" value="Ejecutar">

  
  
</form>
<form  action="conexion.php" method="post" > 
<br><br>

  Nombres:
  <input type="text" name="nom" ">
  <br>
  Apellido:
  <input type="text" name="ape">
  <br>
  Cargo:
  <input type="text" name="cargo">
  <br>
   Fecha de ingreso:
  <input type="text" name="fecha" >
    <br>
  <br> 
  Sueldo base:
  <input type="text" name="sueldo">
  <br>
  RUT <input type="text"  name="rut">-
<input type="text"  name="digito" size="1">

<br>
  <input type="submit" name="guardar" value="Ejecutar">
</form>

</body>
</html>