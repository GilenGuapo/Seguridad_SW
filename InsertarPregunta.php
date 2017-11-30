<?php
 
session_start();
if ($_SESSION["autentificado"] != "SI") {
 //si no existe, envio a la página de autentificación
 header("Location: NoAutentificado.html");
 //además salgo de este script
 
}else{
include "funciones.php";
if (isset($_POST['mail'])) {
    insertarpregunta();
    //insertarXML();

}}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Preguntas</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
	<style>
	#page-wrap{
		text-align: center;
		background-color: ;
	}
	#titulo{
		background:#D5E4E8 none repeat scroll 0 0;
    border:3px solid #B5CAD0;
    margin:10px 0px;
    padding:10px;
	}
	#logo{
		width: 160px;
		margin-bottom: -12px;
		margin-top: 10px;
	}
	#et1{
		color :white;
        font: oblique bold 100% cursive;
	}
	#et2{
		color :white;
        font: oblique bold 100% cursive;
		margin-left:  -22px;
	}
	#et3{
		color :white;
        font: oblique bold 100% cursive;
		margin-left:  -105px;
	}
	#et4{
		color :white;
        font: oblique bold 100% cursive;
		margin-left:  -150px;
	}
	#et5{
		color :white;
        font: oblique bold 100% cursive;
		margin-left: -210px;
	}
	#et6{
		color :white;
        font: oblique bold 100% cursive;
		margin-left: 0px;
	}
	#et7{
		color :white;
        font: oblique bold 100% cursive;
		margin-left: 125px;
	}
	#mail{
		margin-bottom: 10px;
		border-radius: 10px;
		margin-left: 5px;
	}
	#com{
		margin-bottom: 10px;
		border-radius: 10px;
		margin-left: 5px;
	}
	#img{
		margin-bottom: 10px;
		border-radius: 10px;
		margin-left: 5px;
	}
	#tema{
		margin-bottom: 10px;
		border-radius: 10px;
		margin-left: 5px;
	}
	#pre{
		width: 300px;
		border-radius: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
	}
	#preco{
		width: 300px;
		border-radius: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
	}
	#prein{
		width: 300px;
		border-radius: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
	}
	#prein2{
		width: 300px;
		border-radius: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
	}
	#prein3{
		width: 300px;
		border-radius: 10px;
		margin-bottom: 10px;
		margin-left: 5px;
	}
	a{
		color:black;
	}
	#button{
		margin-bottom: 20px;
		margin-top: 10px;
		border-radius: 10px;
		width: 150px;
		background-color: black;
		color: white;
	}
	 #linea{
        border-color:white;
        width:800px;
    }
    #error{
    	color: red;
    	margin-top: 230px;
    	margin-left: 940px;
    	position: absolute;
    	font-weight: bold;
    }
    #error1{
    	color: red;
    	margin-top: 265px;
    	margin-left: 940px;
    	position: absolute;
    	font-weight: bold;
    }
    #error2{
    	color: red;
    	margin-top: 300px;
    	margin-left: 940px;
    	position: absolute;
    	font-weight: bold;
    }
    #error3{
    	color: red;
    	margin-top: 335px;
    	margin-left: 940px;
    	position: absolute;
    	font-weight: bold;
    }
    #error4{
    	color: red;
    	margin-top: 365px;
    	margin-left: 940px;
    	position: absolute;
    	font-weight: bold;
    }
     #error5{
    	color: red;
    	margin-top: 420px;
    	margin-left: 870px;
    	position: absolute;
    	font-weight: bold;
    }
     #error6{
    	color: red;
    	margin-top: 455px;
    	margin-left: 755px;
    	position: absolute;
    	font-weight: bold;
    }
     #error7{
    	color: red;
    	margin-top: 490px;
    	margin-left: 870px;
    	position: absolute;
    	font-weight: bold;
    }
   
	</style>
  </head>



  <body style="background-color:#8FC9D4  ;">
  
  
		  <div id='page-wrap'>

			<header class='main' id='h1'>
			
				
		      		<span class="right" style="display:none;"><a href="/logout">Logout</a></span>
		      		<a href="layout.php" title="Inicio">

							<img id="logo" src="imagenes/logo.png" onmouseover="this.src='imagenes/logopulsado.png';" onmouseout="this.src='imagenes/logo.png';"/>

					</a>
				<h3 id="titulo">Preguntas: Introduce una nueva pregunta.</h3>
		    </header>
			
		<form id="form"  enctype="multipart/form-data" method="post">

			
          
           <label id="et2">Pregunta*:</label><input id="pre" type="text" name="pre"><br>
           <label id="et3">Respuesta correcta*:</label><input id="preco" type="text" name="preco" ><br>
           <label id="et4">Respuesta incorrecta nº1*:</label><input id="prein" type="text" name="prein"><br>
           <label id="et4">Respuesta incorrecta nº2*:</label><input id="prein2" type="text" name="prein2"><br>
           <label id="et4">Respuesta incorrecta nº3*:</label><input id="prein3" type="text" name="prein3"><br>
			 
			 <hr id="linea">

			<?php
			
			$mail=$_SESSION['mail'];
			//$mail=$_GET['mail']
			?>
			
            <label id="et1">Email*:</label><input id="mail" type="text" name="mail" value="<?php echo $mail; ?>" ><br>
           <label id="et5">Complejidad(1..5)*:</label><input type="number" min="1" max="5" id="com" type="text" name="com"><br>
           <label id="et6">Tema*:</label><input id="tema" type="text" name="tema"><br>
           <label id="et7">Imagen:</label> <input type="file" id="img" name="img"/><br>
           
		
            
                <input type="submit" id="button" value="Enviar Pregunta">
         
       </form>

			<footer class='main' id='f1'>
				<a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a>
				<a href='https://github.com'>Link GITHUB</a>
			</footer>
		</div>
<script src=https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js></script>
<script>	
		//$('#mail').attr('value','OTRO TEXTO');
</script>
</body>
</html>