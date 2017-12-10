<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['login'] == 'root' && $_POST['senha'] == '123456') {
        session_name('TREINAWEB');
        session_start();
        $_SESSION['logado'] = true;
        $_SESSION['login'] = $_POST['login'];
        header('Location: logado.php');
    }
}
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="index.php" method="post">
            Login: <input type="text" name="login"><br>
            Senha: <input type="password" name="senha"><br>
            <button>Logar</button>
        </form>
    </body>
</html>


<?php echo'<br>';
  var_dump( hash('sha512', "TreinaWeb") );
 