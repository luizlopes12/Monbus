<?php
/*include "conexao.php";
	if(isset($_POST['insert']))
	{
		$nomeUsuario = $_POST['nome-usuario'];
		$emailUsuario = $_POST['email-usuario'];
  		$senhaUsuario = $_POST['senha-usuario'];
		$cpfUsuario = $_POST['cpf-usuario'];

	$q = mysqli_query($con, "INSERT INTO usuario (nome, email, senha, cpf) VALUES ('$nomeUsuario','$emailUsuario','$senhaUsuario', '$cpfUsuario')");

 if($q)
  echo 'success';
  else
  echo 'error';
   }*/
?>

<?php
include ("../conexao.php");
  $nomeUsuario = $_POST['nome-usuario'];
	$emailUsuario = $_POST['email-usuario'];
	$senhaUsuario = $_POST['senha-usuario'];
	$cpfUsuario = $_POST['cpf-usuario'];

    if(isset($_POST['register']))
    {   
        $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM usuario WHERE email = '$emailUsuario'"));
        if($register == 0)
        {
            $insert = mysqli_query($con, "INSERT INTO usuario (nome, senha, email, cpf) VALUES ('$nomeUsuario', '$senhaUsuario', '$emailUsuario', '$cpfUsuario')");
            if($insert)
                echo "success";
            else
                echo "error";
        }
        else if($register != 0)
            echo "exist";
    }

    mysqli_close($con);
?>