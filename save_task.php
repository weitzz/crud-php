<?php
include("db.php");


if(isset($_POST['save_task'])){
   $title = $_POST['title'];
   $description = $_POST['description'];

   $query = "INSERT INTO task(title,description) VALUES ('$title' ,'$description')";
    $sql = mysqli_query($connect,$query);
    if (! $sql){
        die("Falha na conexão com o Banco de Dados");
    }

    $_SESSION['message'] = "Salvo com Sucesso";
    $_SESSION['message_type'] = 'success';


    header("Location: index.php");
}
?>