<?php

class Plugins_RestAuth  extends Zend_Controller_Plugin_Abstract{
    
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {  
        $apiKey = $request->getHeader('Api-Key');

        //on récupère notre fichier de configuration
        //car notre apikey est stoquée dedans
        $config = Zend_Controller_Front::getInstance()->getParam('bootstrap');
        $configkeys = $config->getOption('apikey');

        //Si notre apikey est mauvaise alors qu'on essaie d'accéder à notre module rest et qu'on est pas sur la page d'erreur, 
        //on renvoie vers la page d'erreur
        if($apiKey != $configkeys['rest'] && $request->getControllerName() != "error") {
            //Ici, on met le code 403 ACCES_DENIED à notre réponse HTTP
            $this   ->getResponse()
                    ->setHttpResponseCode(403);
            //Et on redirige vers le controller d'erreur
            $request->setModuleName('rest')
                    ->setControllerName('error')
                    ->setActionName('api')
                    ->setDispatched(true);
        }

    }
}