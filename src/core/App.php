<?php

namespace App\Core;
require_once "/var/www/html/approComposer/vendor/autoload.php";
class App
{
    private static $instance = null;
    private $database;

    private function __construct()
    {
        $this->database = new MysqlDatabase();
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new App();
        }
        return self::$instance;
    }

    public function getDatabase()
    {
        return $this->database;
    }

    public function getModel($model)
    {
        $class = "App\\Modele\\" . ucfirst($model);
        if (class_exists($class)) {
            return new $class($this->database);
        }
        throw new \Exception(" heyyyyModel $model not found.");
    }
}

