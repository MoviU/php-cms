<?php
    namespace engine\Service;

    abstract class AbstractProvider {
        /**
        *   @var \engine\DI\DI;
        */
        protected $di;

        /**
        *   AbstractProvider constructor.
        *   @param \engine\DI\DI $di
        */
        public function __construct (\engine\DI\DI $di) {
            $this->di = $di;
        }
        /**
        *   @return mixed
        */
        abstract public function init();
    }
