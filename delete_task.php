<?php
include('db.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id  = $id";
    $result = mysqli_query($connect,$query);
    if(!$result){
        die("Erro no Banco de Dados");
    }
    $_SESSION['message'] = 'Removido com Sucesso';
    $_SESSION['message_type'] = 'danger';
    header("Location: index.php");

}


?>