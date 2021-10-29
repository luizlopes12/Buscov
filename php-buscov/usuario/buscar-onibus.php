<?php
	include ("../conexao.php");

	$og = $_REQUEST['origem-onibus'];
	$des = $_REQUEST['destino-onibus'];

	$q = mysqli_query($con,"SELECT horaInicio, horaTermino, preco, origem, destino FROM onibus WHERE origem ='$og' AND destino='$des'");
	$data = array();
	while ($row = mysqli_fetch_object($q)){
	 $data[] = $row;
	}
	echo json_encode($data);

?>