<?php

class Controller_404 extends Controller_Template {
    
    public function __construct() {
    
    }

    public function display() {
        require __ROOT__.'/offline/View/header/header404.tpl';
        require __ROOT__.'/offline/View/err404.tpl';
        require __ROOT__.'/offline/View/footer.tpl';
    }
}
?>
