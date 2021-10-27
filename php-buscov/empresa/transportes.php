<?php
include ("../conexao.php");

	/* CADASTRO DE ONIBUS */
    $cod_empresa = $_POST['cod_empresa'];
  	$placaOnibus = $_POST['placa-onibus'];
	$assentosOnibus = $_POST['assentos-onibus'];
	$origemOnibus = $_POST['origem-onibus'];
	$destinoOnibus = $_POST['destino-onibus'];

    if(isset($_POST['register']))
    {   
        $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM onibus WHERE placa = '$placaOnibus'"));
        if($register == 0)
        {
            $insert = mysqli_query($con, "INSERT INTO onibus (cod_empresa, placa, assentos) VALUES ('$cod_empresa', '$placaOnibus', '$assentosOnibus', '$origemOnibus', '$destinoOnibus')");

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