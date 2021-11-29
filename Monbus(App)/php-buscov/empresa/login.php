<?php
include ("../conexao.php");
if(isset($_POST['loginButton'])){
    $emailEmpresa = $_POST['email-empresa'];
    $senhaEmpresa = $_POST['senha-empresa'];
        $login = mysqli_num_rows(mysqli_query($con, "SELECT * FROM empresa WHERE email='$emailEmpresa' AND senha='$senhaEmpresa'"));
        if($login != 0){
        echo 'success';
        }
        else{
        echo 'error';
        }
    }
    mysqli_close($con);
?>

