 <?php
include "../conexao.php";
if(isset($_POST['loginButton'])){
    $emailUsuario = $_POST['email-usuario'];
    $senhaUsuario = $_POST['senha-usuario'];
        $login = mysqli_num_rows(mysqli_query($con, "SELECT * FROM usuario WHERE email='$emailUsuario' AND senha='$senhaUsuario'"));
        if($login != 0){
        echo 'success';
        }
        else{
        echo 'error';
        }
    }
    mysqli_close($con);
?>