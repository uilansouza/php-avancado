<?php
interface Authentication
{
    public function login();
    public function validUser($user);
}   

class AppAuth implements Authentication
{
    public function login() 
    {
        echo 'Verifica user e senha no DB';
    }

    public function validUser($user) 
    {
        echo "verificar $user na session";
    }

}
    class FacebookAuth implements Authentication
    {
        public function login()
        {
            echo"Verifica user via API do Facebook";
        
        }
        public function validUser($user) 
        {
            echo "verificar $user não expirou no Facebook";
        }

    }
    
    class user
    {
        protected $auth;
        
        public function setAuth(Authentication $auth)
        {
            $this->auth =$auth;
        }
        public function login()
        {
            $this->auth->login();
        }
        public function validUser()
        {
            $this->auth->validUser($this->id);
        }
    }
$user = new User();
$user->id=12;
$user->setAuth(new AppAuth);

$user->login();
echo'<br>';

$user->validUser($user);
