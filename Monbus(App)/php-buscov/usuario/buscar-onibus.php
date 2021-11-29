<?php
include ("../conexao.php");
$og = $_REQUEST['origem'];
$des = $_REQUEST['destino'];
$data=array();
$q=mysqli_query($con,"select * from onibus where origem like '%$og%' and destino like '%$des%'");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>