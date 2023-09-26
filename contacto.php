<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="icon/font/bootstrap-icons.css">
    <link rel="stylesheet" href="icon/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/stile.css">
    <title>ArcamGoldFish | contactos</title>
</head>
<body>
    <section class="container ">
        <section class="contentForm">
            <form action="#" class="form" id="form" method="POST"  enctype="multipart/form-data">
                <h2>Contacte-nos</h2>
                <br>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Seu e-mail...">
                    <span>Seu e-mail</span>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="assunto" placeholder="Diga-nos do que se trata">
                    <span>Assunto</span>
                </div>
                <br>
                <div class="input-box">
                    <textarea name="mensagem" id="textArea" cols="60" rows="5" placeholder="Sua mensagem..." ></textarea>
                    <span>Sua Mensagem</span>
                </div>
                <br>
                <div class="contact">
                    <a href="#"><i class="bi bi-facebook"></i>facebook</a>
                    <a href="#"><i class="b bi-whatsapp"></i>whatsapp</a>
                    <a href="#"><i class="bi bi-instagram"></i>instagram</a>
                    <a href="#"><i class="bi bi-twitter"></i>twitter</a>
                </div>
                <button class="btnSend" onclick="loadingShow()">Enviar <i class="bi bi-telegram"></i></button>
            </form>
             <section class="logo">
                <div class="img">
                </div>
            </section>
            <section class="cardError" id="cardError">
             <div class="smsError" id="smsError">
                <h4 id="error"></h4>
                <div class="bottomError">
                    <label id="close">ok</label>
                </div>
             </div>
            </section>
            <section class="reLoad" id="reload">
                <div class="load">
                    
                </div>
            </section>
        </section>
    </section>
    <script src="js/ajax.js"></script>
    <script src="js/loading.js"></script>
</body>
</html>