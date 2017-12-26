<?php

/**
 * Classe responsável por conectar no banco de dados e verificar se o usuário existe
 */
class Db extends PDO
{
    /**
     * Recebe os parâmetros e faz a consulta
     * @param string $sgdb 
     * @param string $host 
     * @param string $db 
     * @param string $user 
     * @param string $password 
     * @param bool $persistent 
     * @return void
     */
    public function __construct($sgdb, $host, $db, $user, $password, $persistent=true)
    {
        $options = [
            PDO::ATTR_PERSISTENT => $persistent,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $dns = sprintf('%s:host=%s;dbname=%s;charset=utf8', $sgdb, $host, $db);
        parent::__construct($dns, $user, $password, $options);
    }
    
    /**
     * Busca o usuário no banco de dados
     * @param array $where 
     * @param bool $all 
     * @param string $fetchMode 
     * @return usuario
     */
    public function logar(array $where = [], $all = true, $fetchMode = PDO::FETCH_OBJ)
    {
        $sql = 'SELECT * FROM usuarios WHERE email = :email and senha = :senha';

        $sth = $this->prepare($sql);
        
        $sth->bindValue(':email', $where['email'], PDO::PARAM_STR);
        $sth->bindValue(':senha', $where['senha'], PDO::PARAM_STR);
        
        $sth->execute();
        
        if ($all) {
            return $sth->fetchAll($fetchMode);
        }
        
        return $sth->fetch($fetchMode);
    }
}
