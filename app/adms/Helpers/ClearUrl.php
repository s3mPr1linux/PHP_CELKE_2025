<?php

namespace  App\adms\Helpers;
/**
 * Limpa a URL
 * 
 * @author Cesar <cesar@celke.com.br
*/
class ClearUrl
{

    public static function clearUrl(string $url): string
    {

        $url = rtrim($url, "/");

        return $url;

    }
   
    
   
    
}


