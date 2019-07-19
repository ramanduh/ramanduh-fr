<?php

class Controller_Liens extends Controller_Template {
    
    public function __construct() {
    
    }

    public function display() {
        require __ROOT__.'/offline/View/header/headerliens.tpl';
        require __ROOT__.'/offline/View/liens.tpl';
        require __ROOT__.'/offline/View/footer.tpl';
    }
}
?>
