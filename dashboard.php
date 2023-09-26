
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="icon/font/bootstrap-icons.css">
    <link rel="stylesheet" href="icon/font/bootstrap-icons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcamGoldFish | dashboard</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>Mensagens</h3>
        </div>
        <div class="button">
            <button class="btnRestart">Actualizar</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>E-mail</th>
                    <th>Assunto</th>
                    <th>Mensagem</th>
                </tr>
            </thead>
            <?php
include_once "php/config.php";

$sql = "SELECT * FROM contacto";
$result = mysqli_query($conn,$sql);
while($linha = mysqli_fetch_assoc($result)){

    echo "<tbody>" ;
    echo "<tr>";
    echo    "<td>" .$linha['email'] . "</td>";
     echo   "<td>" .$linha['assunto'] . "</td>";
     echo   "<td>" .$linha['mensagem'] . "</td>";
     echo  "</tr>";
     echo    "</tbody>";
}

?>
          
        </table>
    </div>
    <script src="js/loading.js"></script>
</body>
</html>