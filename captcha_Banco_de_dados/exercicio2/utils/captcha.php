<?php

/**
* Classe trabalha com o captcha
*/
class captcha
{
    private $numero1;

    private $numero2;

    /**
     * Gera os dois números randomicos, coloca na sessão e nos atributos da classe
     * @return void
     */
    private function gerarNumeros()
    {
        session_start();
        session_regenerate_id();

        $this->numero1 = mt_rand(1, 9);
        $this->numero2 = mt_rand(1, 9);

        $_SESSION['numero1'] = $this->numero1;
        $_SESSION['numero2'] = $this->numero2;
    }

    /**
     * Gera uma cor hexadecimal aleatória
     * @return string
     */
    private function gerarCor()
    {
        $validos = '0123456789ABCDEF';

        $cor = '#';

        for ($i = 0; $i < 6; $i++) {
            $index = rand(0, 15);
            $cor .= $validos[$index];
        }

        return $cor;
    }

    /**
     * Gera a marcação HTML necessária para o captcha
     * @return string
     */
    public function gerarCaptcha()
    {
        $this->gerarNumeros();

        $dados = [
            'cor1' => $this->gerarCor(),
            'num1' => $this->numero1,
            'cor2' => $this->gerarCor(),
            'num2' => $this->numero2
        ];


        echo vsprintf('<span style="color: %s;">%d</span> + <span style="color: %s;">%d</span>', $dados);
    }

    /**
     * Faz a validação da operação
     * @param int $soma 
     * @return boolean
     */
    public function validarCaptcha($soma)
    {
        session_start();
        session_regenerate_id();

        $numero1 = $_SESSION['numero1'];
        $numero2 = $_SESSION['numero2'];

        if (($numero1 + $numero2) == $soma) {
            return true;
        } else {
            return false;
        }
    }
}
