<?php
    namespace engine\Service\Database;

    use engine\Service\AbstractProvider;
    use engine\Core\Database\Connection;

    class Provider extends AbstractProvider {
        /**
        *   @var string
        */
        public $serviceName = 'Database';
        /**
        *   @return mixed
        */
        public function init() {
            $db = new Connection();
            $this->di->set($this->serviceName, $db);
        }
    }
