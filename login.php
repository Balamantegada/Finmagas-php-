<html>
    <body>
    <?php
		session_start();

        $nome = $_POST['nomeCliente'];
        $senha = $_POST['senha'];
		
		$user = "root";
		$password = "root";
		$database = "finmangas";
		$hostname = "localhost";

		$conexao = new mysqli($hostname,$user,$password,$database);

		// Evita caracteres epeciais (SQL Inject)
		$usuario = $conexao -> real_escape_string($_POST['usuario']);
		$senha = $conexao -> real_escape_string($_POST['senha']);
		$email = $conexao -> real_escape_string($_POST['email']);		

        //verifica o usuário no banco de dados.
        $sql="SELECT `usuario` FROM `cadastros1`
			WHERE `usuario` = '".$usuario."'
			AND `senha` = '".$senha."'
			AND `ativo` = 's';";

		$res = $conexao->query($sql);

		if($res->num_rows != 0){
			$row = $res -> fetch_array();
			$_SESSION['usuario'] = $row[0];
			$conexao -> close();
			header('Location: home.php', true, 301);
			exit();
		} else {
			$conexao -> close();
			header('Location: index.php', true, 301);
		}

    ?>

    </body>
</html>