<?php
/*include "../conexao.php";
	if(isset($_POST['insert']))
	{
		$nomeEmpresa= $_POST['nome'];
		$emailEmpresa = $_POST['email'];
  		$senhaEmpresa = $_POST['senha'];
		$cnpj = $_POST['cpf'];

	$q = mysqli_query($con, "insert into empresa (nome, email, senha, cnpj) values ('$nomeEmpresa','$emailEmpresa','$senhaEmpresa', '$cnpj')");

 if($q)
  echo 'success';
  else
  echo 'error';
   }*/
?>

<?php
include ("../conexao.php");

    $nomeEmpresa = $_POST['nome-empresa'];
    $emailEmpresa = $_POST['email-empresa'];
    $senhaEmpresa = $_POST['senha-empresa'];
    $cnpj = $_POST['cnpj'];

    if(isset($_POST['register']))
    {   
        $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM empresa WHERE email = '$emailEmpresa' OR cnpj = '$cnpj'"));
        if($register == 0)
        {
          $insert = mysqli_query($con, "INSERT INTO empresa (nome, email, senha, cnpj) VALUES ('$nomeEmpresa', '$emailEmpresa', '$senhaEmpresa', '$cnpj')");

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