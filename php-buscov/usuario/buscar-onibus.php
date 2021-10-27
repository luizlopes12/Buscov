<?php
include ("../conexao.php");




$og = $_POST['origem'];
$des = $_POST['destino'];
$data=array();
$q=mysqli_query($con,"select * from onibus where origem='$og' and destino='$des'");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);













?>