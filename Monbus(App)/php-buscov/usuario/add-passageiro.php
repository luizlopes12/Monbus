<?php
include ("../conexao.php");
$id = $_REQUEST['codOnibus'];
$data=array();
$q=mysqli_query($con,"update onibus set ocupados = ocupados+1 where cod_onibus = $id");
?>