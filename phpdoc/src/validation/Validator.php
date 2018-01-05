<?php

namespace MeuProjeto\Validation;

/**
 * Classe de validação
 * 
 * Classe que fará validações genericas do sistema
 * Validando toos os inputs de maneira generica
 * 
 * @package MeuProjeto
 * @subpackage Validation
 * @author John Doe <john.doe@example.com>
 * 
 * 
 */

class Validator
{
    /**
     *
     * É um array de valores a serem validados
     * @var array
     */
    protected  $values;
    /**
     * Construtor que faz o set de $values
     * @param array $values
     */
    public function __construct(array $values) {
        $this->values=$values;
    }
    
    /**
     * Valida os dados de values 
     * @return boolean retorna true se validado ou false caso contrário
     */
    public function validate()
    {
        return true;
    }
}
