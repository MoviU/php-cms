<?php
    namespace engine\Service\Router;

    use engine\Service\AbstractProvider;
    use engine\Core\Router\Router;

    class Provider extends AbstractProvider {
        /**
        *   @var string
        */
        public $serviceName = 'Router';
        /**
        *   @return mixed
        */
        public function init() {
            $router = new Router('http://php.study/');

            $this->di->set($this->serviceName, $router);
        }
    }
