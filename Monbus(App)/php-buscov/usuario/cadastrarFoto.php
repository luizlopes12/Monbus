<?php

$arquivo = $_FILES['file'];

$filetype = $arquivo['type'];
if($filetype=='image/pjpeg' || $filetype=='image/PJPEG' || $filetype=='image/jpeg' || $filetype=='image/JPEG' || $filetype=='image/jpg' || $filetype=='image/png' || $filetype=='image/PNG' || $filetype=='image/gif' || $filetype=='image/GIF' || $filetype=='image/bmp' || $filetype=='image/BMP'){
		if ($arquivo['size']>1000000){
  		exit('Arquivo muito grande. Tamanho máximo permitido 500kb. O arquivo enviado contém '.round($arquivo['size']/1024).'kb');  
		}
		$novonome = md5(mt_rand(1,10000).$arquivo['name']).'.jpg';
		$dir = "album/";
		if (!file_exists($dir)){
  		mkdir($dir, 0755);  
		}
		$caminho = $dir.$novonome;
	$insere = mysqli_query($con, "UPDATE usuario SET foto = '$novonome' ORDER BY id DESC limit 1");
	if ($insere){
		move_uploaded_file($_FILES['file']['tmp_name'],$caminho);
		echo "<script>alert('Imagem Inserida com sucesso!!');</script>"; 
		}else{
    		echo "<script>alert('Não foi possível inserir a imagem!!');</script>";
  	}
}        

?>