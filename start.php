<?php
    require 'vendor/autoload.php';
    use Dotenv\Dotenv;

    use Src\Database;

    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $dbConnection = (new Database())->getConnection();

    // test code:
    // it will output: localhost
    // when you run $ php start.php
    echo getenv('DB_HOST');
?>