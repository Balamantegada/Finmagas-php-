<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finmangas</title>
    <link rel="stylesheet" type="text/css" href="/stylemangalist.css">
    <link rel="shortcut icon" href="/imgs/logo.png">
</head>
<body>
    <?php
			//session_start inicia a sessão
			session_start();

			if (!$_SESSION['usuario']){
				header('Location: index.php');
				exit;
		}
	?>
    <header>
        <nav>
            <h1 href="home.html">Finmangas</h1>
            <img href="home.html" src="/imgs/logo1.png" alt="logo">
            <ul>
                <li><a href="/home.php">Home</a></li>
                <li><a href="/mangalist.php">Mangas</a></li>
                <li><a href="/chats.php">Chats</a></li>
                <li><a href="/perfil.php">Perfil</a></li>
                <li><a href="/index.php" class="login">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            a
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
</body>