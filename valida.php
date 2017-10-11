<?php

include_once ('conexao.php');


$email = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING);
echo $email;

//Verificando se o email ja existe no banco de dados.
$result_usuario     = "SELECT * FROM usuarios WHERE email='$email' LIMIT 1";
$resultado_usuario  = mysqli_query($conn, $result_usuario); 

//Essas condições verficam se há alguma dado.
if (($resultado_usuario) AND($resultado_usuario->num_rows != 0)) {
    echo 'Acessar!';
}else{
    echo 'Erro!';
}


?>