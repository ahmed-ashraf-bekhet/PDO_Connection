
<?php
    class DBConnection extends PDO{
        public $host = 'localhost';
        public $dbname = 'chattingsystem';
        public $user = 'root';
        public $pass = '';

        public function __construct()
        {
            try {
                parent::__construct("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);

                // $DBH = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
                $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                
            }
            catch(PDOException $e) {

                echo 'ERROR: ' . $e->getMessage();
            }

        } // function ends

        
    } // class ends