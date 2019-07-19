<?php
define('__ROOT__', dirname(__FILE__));
require_once(__ROOT__.'/offline/Controller/Template.php'); 
require_once(__ROOT__.'/offline/Controller/Home.php'); 
require_once(__ROOT__.'/offline/Controller/CV.php'); 
require_once(__ROOT__.'/offline/Controller/Liens.php'); 
require_once(__ROOT__.'/offline/Controller/Contact.php');
require_once(__ROOT__.'/offline/Controller/Err404.php');

if(empty($_GET['page'])) {
    $controller = Controller_Home::getInstance();
    $controller->display();
} else {
    switch($_GET['page'])
    {
        case 'accueil':
            $controller = Controller_Home::getInstance();
            $controller->display();
        break;
        
        case 'cv1' :
            $controller = Controller_CV::getInstance();
            $controller->display('cv1');
        break;
        
        case 'cv2' :
            $controller = Controller_CV::getInstance();
            $controller->display('cv2');
        break;
        
        case 'cv3' :
            $controller = Controller_CV::getInstance();
            $controller->display('cv3');
        break;
        
        case 'cv4' :
            $controller = Controller_CV::getInstance();
            $controller->display('cv4');
        break;
        
        case 'cv5' :
            $controller = Controller_CV::getInstance();
            $controller->display('cv5');
        break;
        
        case 'cv6' :
            $controller = Controller_CV::getInstance();
            $controller->display('cv6');
        break;
        
        case 'liens' :
            $controller = Controller_Liens::getInstance();
            $controller->display();
        break;
        
        case 'contact' :
            $controller = Controller_Contact::getInstance();
            $controller->display();
        break;
        
        case '404' :
            $controller = Controller_404::getInstance();
            $controller->display();
        break;
    
        default:
        	echo $_GET['page'];
            /*header('Location: not-found');*/
        break;
    }
}
?>
