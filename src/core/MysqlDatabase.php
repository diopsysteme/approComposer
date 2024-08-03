<?php
namespace App\Core;

require_once "/var/www/html/approComposer/vendor/autoload.php"; // Ensure autoload is required

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

try {
    // Define the path to your .env file directory
    $dotenv = Dotenv::createImmutable('/var/www/html/approComposer');
    
    // Load the environment file(s)
    $dotenv->load();

    // Output all loaded environment variables for debugging purposes
    echo "<pre>";
    print_r($_ENV["DB_CONNECTION"]);
    echo "</pre>";

    // Access an environment variable for debugging purposes
    echo getenv('DB_HOST'); // This should output '127.0.0.1'
    
} catch (InvalidPathException $e) {
    // Handle the exception if any of the paths are invalid
    echo 'Error: ' . $e->getMessage();
}


use PDO;

class MysqlDatabase
{
    private $pdo;

    public function __construct()
    {
        $host = $_ENV["DB_HOST"];
        $dbname = $_ENV["DB_NAME"]; // Changez en DB_NAME
        $username = $_ENV["DB_USER"]; // Changez en DB_USER
        $password = $_ENV["DB_PASSWORD"];
        $port = $_ENV["DB_PORT"];
        $sgbd = $_ENV["DB_CONNECTION"]; // Ajout du type de SGBD

        $dsn = "$sgbd:host=$host;port=$port;dbname=$dbname;";
        echo($dsn);
        $this->pdo = new PDO($dsn, $username, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function prepare($sql)
    {
        return $this->pdo->prepare($sql);
    }
}
