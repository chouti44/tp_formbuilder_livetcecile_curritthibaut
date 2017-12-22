<?php

    class FormBuilder {
        public function formSelectLanguage() {
            $form = new Form('traitement.php', 'post');
            $select = new Select('value', 'id');
            $form->setChamps($select);
            $form->display();
        }

    }
?>