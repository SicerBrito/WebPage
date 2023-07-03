<?php 
    namespace Clases;
    class Database{
        private $conn;
        protected static $settings = Array(
            "mysql" => Array(
                    'driver' => 'mysql',
                    'host' => 'localhost',
                    'username' => 'campus',
                    'database' => 'WebPage',
                    'password' => 'campus2023',
                    'collation' => 'utf8mb4_unicode_ci',
                    'flags' => [
                        // Turn off persistent connections
                        \PDO::ATTR_PERSISTENT => false,
                        // Enable exceptions
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                        // Emulate prepared statements
                        \PDO::ATTR_EMULATE_PREPARES => true,
                        // Set default fetch mode to array
                        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                        // Set character set
                        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci'
                    ]                
                ),
            "psql" => array(
                        'driver' => 'pgsql',
                        'host' => '172.16.48.210',
                        'username' => 'apolo',
                        'database' => 'sgavapp',
                        'password' => '@pol0Adm1n$',
                        'flags' => [
                            // Turn off persistent connections
                            \PDO::ATTR_PERSISTENT => false,
                            // Enable exceptions
                            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                            // Set default fetch mode to array
                            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                            // Set character set
                            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                        ]                
                )

        );
        public function __construct($args = []) {
            $this->conn = $args['conn'] ?? null;
        }
        public function getConnection($dbKey) {
            $dbConfig = self::$settings[$dbKey];
            $this->conn = null;
            $dsn = "{$dbConfig['driver']}:host={$dbConfig['host']};dbname={$dbConfig['database']}";
            try{
                $this->conn = new \PDO($dsn, $dbConfig['username'], $dbConfig['password'], $dbConfig['flags']);
            }catch(\PDOException $exception){
                $error=[[
                    'error' => $exception->getMessage(),
                    'message' => 'Error al momento de establecer conexion'
                ]];
                return $error;
            }
            return $this->conn;
        }       
    }

?>