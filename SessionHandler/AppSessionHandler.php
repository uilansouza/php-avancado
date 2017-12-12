<?php

class AppSessionHandler implements SessionHandlerInterface
{
    protected $pdo;
    
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function execute($sql, $pars=array())
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($pars);
        return $stmt;
    }
    
    public function close() 
    {
        return true;
    }

    public function destroy($session_id) 
    {
        $this->execute('DELETE FROM session WHERE id=?', [$session_id]);
        return true;
    }

    public function gc($maxlifetime) 
    {
        $delete = 'DELETE FROM session '
                . 'WHERE ultimo_acesso < '
                . "DATE_SUB(NOW(), INTERVAL $maxlifetime SECOND)";
        $this->execute($delete);
                
    }

    public function open($save_path, $name) 
    {
        return true;
    }

    public function read($session_id) 
    {
        $res = $this->execute('SELECT conteudo FROM session WHERE id=?', [
            $session_id
        ]);
        if ($res->rowCount()) {
            return $res->fetch(\PDO::FETCH_OBJ)->conteudo;
        }
        return false;
    }

    public function write($session_id, $session_data) 
    {
        $this->execute('REPLACE INTO session VALUES (?, ?, NULL)', [
            $session_id, $session_data
        ]);
        return true;
    }
}

$pdo = new PDO('mysql:dbname=phpavancado', 'root', '');

$appSession = new AppSessionHandler($pdo);

session_set_save_handler($appSession, true);


session_start();
/*$_SESSION['myapp'] = 'TreinaWeb';
$_SESSION['project'] = 'Meu projeto';
$_SESSION['email'] = 'teste@gmail.com';
*/
echo $_SESSION['myapp'] . '<br>';
echo $_SESSION['project'] . '<br>';
echo $_SESSION['email'] . '<br>';

// session_destroy();

