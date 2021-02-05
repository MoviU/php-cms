<?php
    namespace engine\Core\Database;
    use \PDO;

    class Connection {
        private $link;

        /**
        *   Database Costructor
        */
        public function __construct () {
            $this->connect();
        }

        /**
        *   Database connect function
        *   @return $this
        */
        private function connect() {
            $config = [
                'host' => 'php.study',
                'dbname' => 'cms-site',
                'username' => 'max',
                'password' => 'AvoGadro1256',
                'charset' => 'utf8'
            ];
            $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'].';charset='.$config['charset'].';';

            $this->link = new PDO($dsn, $config['username'], $config['password']);
            return $this;
        }

        /**
        *   @param $sql
        *   @return mixed
        */
        public function execute($sql) {
            $sth = $this->link->prepare($sql);

            return $sth->execute();
        }

        /**
        *   @param $sql
        *   @return array
        */
        public function query($sql) {
            $exe = $this->execute($sql);

            $result = $exe->fetchAll(PDO::FETCH_ASSOC);

            if ($result === false) {
                return [];
            }
            return $result;
        }
    }
