<?php
include("connect.php");
if (isset($_POST['submit'])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $end = $_POST["endereco"];

    $query = pg_query($conn, "INSERT INTO cliente (nome, email, telefone, cpf, endereco) 
    VALUES ('$nome', '$email', '$telefone', '$cpf', '$end')");
    if ( $query ) {
        echo  "Record Successfully Updated!";
    } else{
        echo "Deu não";
    }
}
?>