<?php

    abstract class Element implements IElement {
        // declare var
        private $type;
        private $name;
        private $label;
        private $form;

        //----- beginning get and setter of properties ---//
        public function getType():string {
            return $this->type;
        }

        public function setType(string $type) {
            $this->type = $type;
        }

        public function getName():string {
            return $this->name;
        }

        public function setName(string $name) {
            $this->name = $name;
        }

        public function getLabel():string {
            return $this->label;
        }

        public function setLabel(string $label) {
            $this->name = $label;
        }

        public function getForm():string{
            return $this->form;
        }

        public function setForm(Form $form){
            $this->form = $form;
        }
        //----- finish get and setter of properties ---//

        //---- function of interface ---//
        public function create(){

        }
    }
?>