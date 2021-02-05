<?php
    namespace engine;
    use engine\Helper\Common;

    class Cms {
        /**
        * @var DI
        */
        private $di;
        public $router;
        /**
        * Cms constructor
        * @param $di
        */
        public function __construct($di) {
            $this->di = $di;
            $this->router = $this->di->get('Router');
        }
        /**
        * Run Cms
        */
        public function run() {
            $this->router->add('home', '/', 'HomeController:index');
            $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());
            print_r($routerDispatch);
        }
    }
