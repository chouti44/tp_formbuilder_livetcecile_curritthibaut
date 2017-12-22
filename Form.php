<?php
    class Form {
        private $action;
        private $method;

        public function __construct($action, $method){
            $this->action = $action;
            $this->method = $method;
        }

        public function getAction() {
            return $this->action;
        }

        public function setAction(string $action) {
            $this->type = $action;
        }

        public function getMethod() {
            return strtoupper($this->method);
        }

        public function setMethod($method) {
            $this->type = $method;
        }

        public function display() {
            $form = '<form action= "' . $this->getAction() . '" method= "' . $this->getMethod() . '">
                </form>';
            return $form;
        }
    }
?>