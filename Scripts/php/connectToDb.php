<?php
    class DBConnection
    {
        private static $instance;
        private $pdo;
    
        private function __construct()
        {
            $dsn = 'sqlite:./DB/CMS.db';
    
            $this->pdo = new PDO($dsn);
        }
    
        public static function getInstance()
        {
            if (self::$instance === null) {
                self::$instance = new self();
            }
    
            return self::$instance;
        }
    
        public function getPDO()
        {
            return $this->pdo;
        }
    }

    $db = DBConnection::getInstance()->getPDO()

?>