<?php
abstract class Controller_Template
{
    protected $selfModel;
    protected static $instance;
    public static $db;

    protected function __construct() {
    }

    public static function getInstance() {
        $class = get_called_class();
        if(!$class::$instance) {
            $class::$instance = new $class();
            return $class::$instance;
        }
    }
}
?>
