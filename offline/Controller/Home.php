<?php

class Controller_Home extends Controller_Template {
    
    public function __construct() {
    
    }

    public function display() {
        require __ROOT__.'/offline/View/header/headerhome.tpl';
        require __ROOT__.'/offline/View/home.tpl';
        require __ROOT__.'/offline/View/footer.tpl';
    }
    
    public function displayEn() {
        require __ROOT__.'/offline/View/en/header/headerhome.tpl';
        require __ROOT__.'/offline/View/en/home.tpl';
        require __ROOT__.'/offline/View/footer.tpl';
    }
}
?>
