<html>
    <body>
    <?php

		$user = "root";
		$password = "root";
		$database = "finmangas";
		$hostname = "localhost";

		$conexao = new mysqli($hostname,$user,$password,$database) or die ('Não foi possível conectar');

        $message = $conexao -> real_escape_string($_POST['message']);

        $sql="INSERT INTO `messages`
            (`incoming_msg_id`, `outgoing_msg_id`, `msg`)
            VALUES
            ('1234', '5678', '".$message."')";

        $res = $conexao->query($sql);
		$conexao -> close();
		header('Location: /chats/chatgeral.php');
		exit();
    ?>
    </body>
</html>