
<html>
    <head>
        <title>Code Injection</title>
    </head>
    <body>
        <?php
       // setcookie('teste', 'um valor', strtotime('+1 hour'));
        if($_SERVER['REQUEST_METHOD']=='POST'){
           // echo htmlentities($_POST['code']);
            echo strip_tags($_POST['code'], '<h1>,<h2>');
            eval($_POST['code']);// comando perigoso, evitar usar pois pode executar qualquer comando PHP

        }
       ?>
        <form action="index.php" method="POST">
            Codigo: <input type="text" name="code">
            <button>Enviar</button>
        </form>
        
        
        
    </body>
    
    
    
    
    
    
</html>
