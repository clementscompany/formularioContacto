<?php
include_once "config.php";
$email =  mysqli_real_escape_string($conn, $_POST['email']);
$assunto =  mysqli_real_escape_string($conn, $_POST['assunto']);
$mensagem =  mysqli_real_escape_string($conn, $_POST['mensagem']);

if(!empty($email) && !empty($assunto) && !empty($mensagem)){
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
$sql = mysqli_query($conn, "INSERT INTO contacto (email,assunto,mensagem) VALUES ('{$email}', '{$assunto}', '{$mensagem}')");
echo " Mensagem enviada com sucesso";
}
else{
    echo "$email- este email não é válido";
}

}
else{
    echo "Porfavor, preencha todos os campos";
}

?>