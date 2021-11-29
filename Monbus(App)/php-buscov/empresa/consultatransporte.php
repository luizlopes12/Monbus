<?php
	include("../conexao.php");

	/* CONSULTA DE CNPJ */
	/*$cod_empresa = $_POST['cod_empresa'];*/
	$cnpj = $_REQUEST['buscacnpj'];

	$q = mysqli_query($con, "SELECT cod_empresa FROM empresa WHERE cnpj = '$cnpj'");
	$data = array();
	while ($row = mysqli_fetch_object($q))
	{
		$data[] = $row;
	}

	echo json_encode($data);
?>