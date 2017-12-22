<?php
    abstract class Element implements IElement {
        private $type;
        private $name;

        public function getType() {
            return $this->type;
        }

        public function setType(string $type) {
            $this->type = $type;
        }

        public function getName() {
            return $this->name;
        }

        public function setName(string $name) {
            $this->name = $name;
        }

        public function create(){

        }

        public function display() {

        }
    }
?>