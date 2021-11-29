<?php
include ("../conexao.php");
$email = $_REQUEST['email'];
$data=array();
$q=mysqli_query($con,"select * from usuario where email='$email'");
while($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>