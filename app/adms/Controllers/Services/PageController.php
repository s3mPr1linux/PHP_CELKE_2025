<?php

namespace App\adms\Controllers\Services;

use App\adms\Helpers\ClearUrl;

/**
 * Recebe a URL e manipula
 * 
 * @author Cesar <cesar@celke.com.br>
 */
class PageController
{
    /**@var string $url  Receber a URL do .htaccess */
    private string $url;


    /** *
     * Recebe a URL do .htaccess
     */
    public function __construct()
    {
        echo "Carregar página." . "<br><br>" ;
        // Verificar se tem valor na variável $url enviada pelo .htaccess
        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            // Se sim, atribui o valor a variável $url enviada pelo .htaccess   
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

            echo "Acessar o endereço: " . $this->url . "<br><br>" ;

           $teste = ClearUrl::clearUrl($this->url);
            var_dump($teste);

        }else{
            echo "Acessar a página principal.<br><br>" ;
             

    

        }
    }
}