<?php
include ("../conexao.php");
$id = $_REQUEST['codOnibus'];
$data=array();
$q=mysqli_query($con,"select * from onibus where cod_onibus='$id'");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>