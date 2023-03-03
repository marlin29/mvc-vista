<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AWI</title>
	<link rel="stylesheet" href="styles.css">
	<script>
		function eliminar(id)
        {
            if (confirm("¿Estás seguro de eliminar el registro?"))
            {
                window.location = "controlador.php?id_eliminar=" + id;
            }
        }
        function modificar(id)
        {
            window.location = "controlador.php?id_mod=" + id;
        }
        function logout()
        {
            if (confirm("¿Quieres cerrar sesión?")) 
            {
                window.location = "logout.php"
            }
        }
	</script>

	<script type="text/javascript" src="validaciones.js"></script>

</head>
<body>

     <!-- INICIO INSERTAR EN TABLA PRODUCTOS -->
	<form id="frmInsert" name="frmInsert" action="controlador.php" method="post" onsubmit="return validar();">
		<input id="idProd" name="idProd" type="text" placeholder="id Producto" value="<?php echo @$cat_mod[0][0]; ?>" hidden/>
		<div class="row">
			<h1>Registrar Producto</h1>
		  <span>
		      <h3>Nombre</h3>
		    <input class="balloon" id="nombre" name="nombre" type="text" value="<?php echo @$cat_mod[0][1]; ?>" onkeypress="return Vname();" required/>
		  </span>
		  <span>
		      <h3>Cantidad</h3>
		    <input class="balloon" id="cant" name="cant" type="text" value="<?php echo @$cat_mod[0][2]; ?>" onkeypress="return Vcant();" required/>
		  </span>
		  <span>
		    <h3>Precio</h3>
		    <input class="balloon" id="precio" name="precio" type="text" value="<?php echo @$cat_mod[0][3]; ?>" onkeypress="return Vprecio();"  required/>
		  </span>
		<input type="submit" name="btnEnviar" id="btnEnviar" value="<?php if(isset($_GET['id_mod'])) {
			echo 'Modificar';
		}
		else
		{
			echo 'Registrar';
		}
		 ?>">
		
			
	</form>
	<!-- FIN INSERTAR EN TABLA PRODUCTOS -->


	<!-- INICIO BUSCAR EN TABLA PRODUCTOS -->
	<form id="frmBuscar" name="frmBuscar" action="controlador.php" method="post">
		<div class="">
			<span>
			<h3>Buscar</h3>
		    <input class="balloon" id="txtNombre" name="txtNombre" type="text" onkeypress="return Vbuscar();" />
		  </span>
		    <input type="submit" id="btnBuscar" name="btnBuscar" class="btn btn-secondary" value="Buscar" style="margin-left: 20px;margin-top: 10px;width: 96px;">
		</div>
    </form>

    <div class="">
	    <table style="background-color: white; border-color: #654ea3;border: 2px solid; color: black;" align="center">
	        <tr>
	            <td style="border-color: white;border: 2px solid;">Id del Producto</td>
	            <td style="border-color: white;border: 2px solid;">Nombre</td>
	            <td style="border-color: white;border: 2px solid;">Cantidad</td>
	            <td style="border-color: white;border: 2px solid;">Precio</td>
	            <td style="border-color: white;border: 2px solid;">Eliminar</td>
	            <td style="border-color: white;border: 2px solid;">Modificar</td>
	        </tr>
	        <?php echo $tabla_result; ?>
	    </table>
    </div>
    </div>
</body>
</html>