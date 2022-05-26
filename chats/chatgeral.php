<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finmangas</title>
    <link rel="stylesheet" type="text/css" href="/stylechat.css">
    <link rel="shortcut icon" href="/imgs/logo.png">
</head>
<body>
    <?php
			//session_start inicia a sessão
			session_start();

			if (empty($_SESSION['usuario'])){
				header('Location: index.php');
				exit;
		}
	?>
    <header>
        <nav>
            <a href="/home.php"><h1>Finmangas</h1></a>
            <a href="/home.php"><img src="/imgs/logo1.png" alt="logo"></a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list"> 
                <li><a href="/home.php">Home</a></li>
                <li><a href="/mangalist.php">Mangas</a></li>
                <li><a href="/chats.php">Chats</a></li>
                <li><a href="/perfil.php">Perfil</a></li>
                <?php
                    if(empty($_session['usuario'])){
                        echo'<li><a href="/sair.php" class="login">Sair</a></li>';
                    } else{
                        echo'<li><a href="/index.php" class="login">Login</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <div class="chat-area">
                <header>
                    <h2>Chat geral</h2>
                </header>
                <div class="chat-box">
                    <div class="chat outgoing">
                        <div class="details">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis perferendis doloribus vel modi ducimus atque autem et! 
                                Dolorum pariatur aliquam eligendi odio iste ullam nisi? Placeat architecto tempore saepe non!
                            </p>
                        </div>
                    </div>
                    <div class="chat incoming">
                        <img src="/imgs/perfil/perfil_exemplo_img.png" alt="">
                        <div class="details">
                            <p>
                                MSG TESTE
                            </p>
                        </div>
                    </div>
                    <div class="chat incoming">
                        <img src="/imgs/perfil/perfil_exemplo_img.png" alt="">
                        <div class="details">
                            <p>
                                MSG TESTE
                            </p>
                        </div>
                    </div>
                    <div class="chat outgoing">
                        <div class="details">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis perferendis doloribus vel modi ducimus atque autem et! 
                                Dolorum pariatur aliquam eligendi odio iste ullam nisi? Placeat architecto tempore saepe non!
                            </p>
                        </div>
                    </div>
                    <div class="chat outgoing">
                        <div class="details">
                            <p>
                                <?php
                                    echo $_SESSION['usuario'];
                                ?>
                            </p>
                        </div>
                    </div>
                <form action="/enviar-msg.php" method="post" id="id-enviar-msg" name="form-enviar-msg" class="typing-area">
                    <input type="text" id="message" name="message" placeholder="Escreva a mensagem aqui...">
                    <button type="submit" value="entrar">Enviar</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div>
            <div>
            <a>Contato:</a>
            <br>
            <img width="20px" src="/imgs/WhatsApp.svg.png">
            <a>Whats: 5547-999315741</a>
            <p><img src="/imgs/twitter_logo.svg" width="20px">Twitter: @bala_mantegada</p>
            </div>
            <div>
                <img src="/imgs/sesi-senai.webp" width="300px">
                <p>Made by Arthur L. kroenke</p>
                <p>SESI SENAI, Itajaí</p>
            </div>
        </div>
    </footer>
    <script src="/mobile-navbar.JS"></script>
</body>