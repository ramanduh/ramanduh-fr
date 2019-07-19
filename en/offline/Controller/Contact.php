<?php
require_once(__ROOT__.'/offline/Model/Mail.php');

define("SENT",0);
define("BAD_CAPTCHA",1);
define("ERR",2);
define("BAD_MAIL",3);
define("INCOMPLETE_FIELD",4);

class Controller_Contact extends Controller_Template {
    private $mail;
    
    public function __construct() {
        $this->mail = new Model_Mail();
    }

    public function display() {
        require __ROOT__.'/offline/View/header/headercontact.tpl';
        if ($_POST != null) {
            session_start();//Pour le captcha
            $code = $this->mail->send($_POST);
            switch ($code) {
                case SENT :
                    require __ROOT__.'/offline/View/contact/sent.tpl';
                break;
                
                case BAD_CAPTCHA :
                    require __ROOT__.'/offline/View/contact/bad_captcha.tpl';
                break;
                
                case ERR :
                    require __ROOT__.'/offline/View/contact/err.tpl';
                break;
                
                case BAD_MAIL :
                    require __ROOT__.'/offline/View/contact/bad_mail.tpl';
                break;
                
                case INCOMPLETE_FIELD :
                    require __ROOT__.'/offline/View/contact/err_field.tpl';
                break;
            }
        } else {
            require __ROOT__.'/offline/View/contact/contact.tpl';
        }
        require __ROOT__.'/offline/View/footer.tpl';
    }
}
?>
