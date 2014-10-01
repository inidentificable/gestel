<div id="logo">
		<h1><img src="images/logo.png" alt="24" width="166" height="151"></h1>
</div> <!-- div logo -->
</br>

<?php
if(isset($_SESSION["perfil"])){
  switch ( $_SESSION["perfil"] )
           {
		        case "Administrador" :
			     echo '
                     <nav id="nav">
 						<ul>
							<li><a href="../../index.php">Inicio</a></li>
							<li><a href="bien_admin.php">Configuraci&oacute;n</a></li>
							<li><a href="empresa.php">La Empresa</a></li>
							<li><a href="propiedades.php">Propiedades</a></li>							
							<li><a href="cargar_propiedades.php">Cargar Propiedades</a></li>
							<li><a href="contacto.php">Cont&aacute;ctenos</a></li>
							
						</ul>
						</div>';
		          	break;
					
			   case "Cliente-Proveedor":
                    echo '
                     <nav id="nav">
 						<ul>
							<li><a href="../../index.php">Inicio</a></li>
							<li><a href="bien_clipro.php">Configuraci&oacute;n</a></li>
							<li><a href="ver_inmueble.php">Ver Inmueble</a></li>							
							<li><a href="cargar_propiedades.php">Cargar Propiedades</a></li>
							
						</ul>
						</div>'; 
			          break;
	         }
	}else{
				     echo '
                     <nav id="nav">
 						<ul>
							<li><a href="../../index.php">Inicio</a></li>
							<li><a href="empresa.php">La Empresa</a></li>
							<li><a href="propiedades.php">Propiedades</a></li>
							<li><a href="contacto.php">Cont&aacute;ctenos</a></li>							
						</ul>
						</div>';
	}		 

?>

<?php /*?><nav id="nav">
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="empresa.php">La Empresa</a></li>
			<li><a href="propiedades.php">Propiedades</a></li>
			<li><a href="contacto.php">Cont&aacute;ctenos</a></li>
			
		</ul>
</nav><?php */?>
