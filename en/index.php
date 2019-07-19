<?php
define('__ROOT__', dirname(__FILE__));
require_once(__ROOT__.'/offline/Controller/Template.php'); 
require_once(__ROOT__.'/offline/Controller/Home.php'); 
require_once(__ROOT__.'/offline/Controller/CV.php'); 
require_once(__ROOT__.'/offline/Controller/Liens.php'); 
require_once(__ROOT__.'/offline/Controller/Contact.php');
require_once(__ROOT__.'/offline/Controller/Err404.php');

preg_match('#index.php\?page=([a-z0-9_]+)#', $_SERVER['REQUEST_URI'], $match);

if(empty($match[1])) {
    $controller = Controller_Home::getInstance();
    $controller->display();
} else {
    switch($match[1])
    {
        case 'accueil':
            $controller = Controller_Home::getInstance();
            $controller->display();
        break;
        
        case 'cv1' :
            header('Location: index.php?page=accueil');
            $controller = Controller_CV::getInstance();
            $controller->display($match[1]);
        break;
        
        case 'cv2' :
            header('Location: index.php?page=accueil');
            $controller = Controller_CV::getInstance();
            $controller->display($match[1]);
        break;
        
        case 'cv3' :
            header('Location: index.php?page=accueil');
            $controller = Controller_CV::getInstance();
            $controller->display($match[1]);
        break;
        
        case 'cv4' :
            header('Location: index.php?page=accueil');
            $controller = Controller_CV::getInstance();
            $controller->display($match[1]);
        break;
        
        case 'cv5' :
            header('Location: index.php?page=accueil');
            $controller = Controller_CV::getInstance();
            $controller->display($match[1]);
        break;
        
        case 'cv6' :
            header('Location: index.php?page=accueil');
            $controller = Controller_CV::getInstance();
            $controller->display($match[1]);
        break;
        
        case 'liens' :
            header('Location: index.php?page=accueil');
            $controller = Controller_Liens::getInstance();
            $controller->display();
        break;
        
        case 'contact' :
            header('Location: index.php?page=accueil');
            $controller = Controller_Contact::getInstance();
            $controller->display();
        
        case 'err404' :
            $controller = Controller_404::getInstance();
            $controller->display();
        break;
    
        default:
            header('Location: index.php?page=err404');
        break;
    }
}
?>
