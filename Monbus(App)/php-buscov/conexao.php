<?php
	header("Access-Control-Allow-Origin:*");
	// Pablo
	
	$con = mysqli_connect("localhost","root","admin","buscov")or die("Não pode conectar");
	
	//Luizão
	/*
	$con = mysqli_connect("127.0.0.1","root","1112");
			mysqli_select_db($con,"buscov");
			mysqli_set_charset($con,"UTF8")or die("Não pode conectar");
			if(!$con){
				echo "<script>alert('Banco não conectado')</script>";
			}
	*/
			
	//Mayara
	/*
	$con = mysqli_connect("localhost","root","","tcc")or die("Não pode conectar");
	*/

	//Orlando
	/*
	$con = mysqli_connect("localhost","root","","tcc")or die("Não pode conectar");*/
?>