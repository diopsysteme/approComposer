<?php
namespace App\Core;
require_once "/var/www/html/approComposer/vendor/autoload.php";

class Model
{
    protected $table;
    protected $database;

    public function __construct(MysqlDatabase $database)
    {
        $this->database = $database;
    }

    public function query($sql, $params = [])
    {
        return $this->database->query($sql, $params);
    }

    public function all()
    {
        return $this->query("SELECT * FROM {$this->table}");
    }

    public function byId($id)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE id = :id", ['id' => $id]);
    }

    public function prepare($sql)
    {
        return $this->database->prepare($sql);
    }
}
