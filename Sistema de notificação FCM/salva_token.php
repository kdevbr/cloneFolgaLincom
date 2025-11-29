<?php 
include_once '../../../naoeindex/bd.php';

$token = $_POST['token'];

$res=$conn->query("INSERT INTO folga (token) VALUES ('$token')");
if($res){
    echo "Token salvo com sucesso!";
}else{
    echo "Erro ao salvar token: " . $conn->error;
}
?>