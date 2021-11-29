<?php
include ("../conexao.php");

	/* CADASTRO DE ONIBUS */
    $cod_empresa = $_POST['cod_empresa'];
  	$placaOnibus = $_POST['placa-onibus'];
	$assentosOnibus = $_POST['assentos-onibus'];
	$origemOnibus = $_POST['origem-onibus'];
	$destinoOnibus = $_POST['destino-onibus'];
    $precoOnibus = $_POST['preco-onibus'];
    $inicioServico = $_POST['inicio-servico'];
    $terminoServico = $_POST['termino-servico'];

    if(isset($_POST['register']))
    {   
        $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM onibus WHERE placa = '$placaOnibus'"));
        if($register == 0)
        {
        $insert = mysqli_query($con, "INSERT INTO onibus (cod_empresa, placa, assentos, 
        ocupados, origem, destino, preco, horaInicio, horaTermino) 
        VALUES
        ('$cod_empresa', '$placaOnibus', '$assentosOnibus', 0,'$origemOnibus', 
        '$destinoOnibus', '$precoOnibus', '$inicioServico', '$terminoServico')");
            
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