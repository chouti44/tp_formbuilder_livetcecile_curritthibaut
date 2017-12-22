<?php
    class Form {
        // declare var
        private $action;
        private $method;
        private $champs = array();

        //---- construct $action and $method ---//
        public function __construct($action, $method){
            $this->action = $action;
            $this->method = $method;
        }

        //----- beginning get and setter of properties ---//
        public function getAction():string {
            return $this->action;
        }

        public function setAction(string $action) {
            $this->type = $action;
        }

        public function getMethod():string {
            return strtoupper($this->method);
        }

        public function setMethod(String $method) {
            $this->type = $method;
        }

        public function getChamps():string {
            return $this->method;
        }

        public function setChamps(String $champs) {
            $this->champs[] = $champs;
        }
        //----- finish get and setter of properties ---//

        //---- function of display ---//
        public function display() {
            $form = '<form action= "' . $this->getAction() . '" method= "' . $this->getMethod() . '">';
                        foreach ($this->champs as $champ) {
                            echo $champ;
                        }
                    '</form>';
            return $form;
        }
    }
?>