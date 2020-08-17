<?php
echo "<h1>Descargas</h1>";
echo "<br><br>";
echo '<a href="Configuracion.pdf"><img src="pdfImg.png" width="10%" height="10%"> </img> </a>';
echo "<br>";
echo "<br><br>";
echo '<a href="UIIRA1.docx"><img src="Word.png" width="10%" height="10%"> </img> </a>';
echo "<br>";
echo "<br><br>";
echo '<a href="fondo.jpg"><img src="Img.jpeg" width="20%" height="20%"> </img> </a>' ;
echo "<br>";
echo 



$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name']; 

if(!file_exists('archivos')){
	mkdir('archivos',0777,true);
	if(file_exists('archivos')){
		if(move_uploaded_file($guardado,'archivos/'.$nombre)){
			echo "Archivo guardado con exito";
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($guardado,'archivos/'.$nombre)){
		echo "<br>"; 
		echo "Archivo guardado con exito";
	}else{
		echo "Archivo no se pudo guardar";
	}
}
?>
