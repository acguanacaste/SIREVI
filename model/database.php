<?php
class Database
{
    public $config;
    public $pdo;
    public function __construct()
    {
        try{
            if (file_exists("config/config.ini")){
                $this->config = parse_ini_file('config/config.ini');
                $this->pdo = new PDO('mysql:host='.$this->config['host'].';dbname='.$this->config['bd'].';charset=utf8', $this->config['bdusr'], $this->config['bdpass']);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            else{
                throw new Exception("Value must be 1 or below");
            }




        }catch (Exception $e){
            echo "No existe configuración para la base de datos: ".$e;
        }
    }

    public function connect (){

    }

    /**
     * @return array|false
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @return PDO
     */
    public function getPdo(): PDO
    {
        return $this->pdo;
    }
}
