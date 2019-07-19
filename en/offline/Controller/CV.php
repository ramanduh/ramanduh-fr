<?php

class Controller_CV extends Controller_Template {
    
    public function __construct() {
    
    }

    public function display($cv) {
        require __ROOT__.'/offline/View/header/headercv.tpl';
        require __ROOT__.'/offline/View/cv/menu'.$cv.'.tpl';
        require __ROOT__.'/offline/View/cv/'.$cv.'.tpl';
        require __ROOT__.'/offline/View/footer.tpl';
    }
}
?>
