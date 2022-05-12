
<?php
$conn = pg_connect("host=localhost port=5432 dbname=bdBiblioteca user=postgres password=root");
if(!$conn){
    echo "Conexão falhou";
}
//coneta a um banco de dados chamado "biblioteca" na máquina "ovelha" com um usuário e senha
?>